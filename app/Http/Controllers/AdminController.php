<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;  
use App\User;
use App\Product;
use App\Admin;
use Auth;
use Hash;
use DataTables;
use Task;
use DB;
use Location;


class AdminController extends Controller
{
    public function __construct(){
        if(Auth::guard('admin')->user() == ""){
            return redirect('/admin');
        }
    }
    
    // render login page
    public function showLoginForm(){
        return view('admin.login',['title' => 'Login']);
    }

    // admin login attempt 
    public function attemptLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'))->with('error','Invalid Email or Password');
    }
    
    // admin logout attempt
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('logout','You\'re Successfully Logout');
    }

    // render registration page
    public function showRegisterForm(){
        return view('admin.register',['title' => 'Registration']);
    }

    // attempt registration 
    public function createAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gender' => 'required',
        ]);  
        if ($validator->fails()) {
            return redirect('admin/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
        ]);
        return redirect()->intended('admin/');
    }

    // show forgot password form
    public function showForgotForm(){
        return view('admin.forgot_password',['title' => 'Forgot Password']);
    }

    // show admin dashbord to admin
    public function showDashboard(){
        //$this->fetchProductDetails('B07X1KT6MR','in');
        //$ip = "150.129.164.228";
        $ip = trim($this->getClientIp());
        $location_data = Location::get($ip);
        $temp = $this->getTemprature($location_data->cityName,$location_data->countryCode);
        $temp_data = $this->getWatherInfo($location_data->cityName,$location_data->countryCode);
        
        return view('admin.dashboard',['title' => 'Dashboard','user_count' => User::all()->count(),'admin_count' => Admin::all()->count(),'temp' => $temp,'location_data' => $location_data,'temp_data' => $temp_data]);
    }

    public function getClientIp(){
        $ip_address_api = file_get_contents('http://checkip.dyndns.com/');
        $ip = explode(' ',$ip_address_api);
        return $ip[5];
    }

    public function getWatherInfo($city,$country){
         $jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&appid=b5f52b10940d8d52e2826fa81e7d63dc";
        $json = file_get_contents($jsonurl);
        $weather = json_decode($json);  
        return $weather;
    }
    public function getTemprature($city,$country){
        $jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&appid=b5f52b10940d8d52e2826fa81e7d63dc";
        $json = file_get_contents($jsonurl);
        $weather = json_decode($json);  
        $kelvin = $weather->main->temp;
        $celcius = $kelvin - 273.15;
        return $celcius;
    }

    //===============================================================================================================
                            // user Relates Methods start
    //===============================================================================================================
    // 
    public function showAllUser(){
        return view('admin.users');
    }

    //get all user display in datatable
    public function getAllUser(Request $request){
        if($request->ajax()){
            $data = User::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('gender',function($data){
                if($data->gender == "F"){
                    $btn  = '<span class="">FeMale</span>';
                }else{
                    $btn  = '<span class="">Male</span>';
                }
                return $btn;
            })
            ->addColumn('action',function($row){
                $btn  = '<td><a href="/admin/users/view/'.$row->id.'" ><i class="fas fa-eye p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/users/edit/'.$row->id.'" ><i class="fas fa-edit p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/users/delete/'.$row->id.'"><i class="fas fa-trash p-2"></i></a></td>';
                return $btn;
            }) 
            ->rawColumns(['gender','action'])
            ->toJson();
        }
    }


    // show add user form to admin
    public function showAddUserForm(){
        return view('admin.add_user');
    }
    // submit add user form
    public function submitAddUserForm(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'profile_img'  => 'required|mimes:png,jpeg,jpg|max:2048',
        ]); 
        if($request->hasfile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->extension();
            $allowedExtension = array('jpg','jpeg','png');
            if(!in_array($extension,$allowedExtension)){
                return redirect()->back()->with('img_error','Please Select Image File Only');
            }
            $filename = 'profile_dp_'.str_replace(' ','',$request->name)."_". time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images/users', $filename);
            $request->profile_img = $filename;
        }
        
        User::create([
            'name' => $request->name,
            'profile_img' => $request->profile_img,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'address' => $request->address,
            'city' => $request->city,
            'pincode' => $request->pincode,
        ]);

        return redirect()->back()->with('msg','User Added Succesfully');
    }

    // return view of all user
    public function showUserDetail($id){
        $userData = User::find($id);
        return view('admin.view_user',['user' => $userData]);
    }

    // return view of edit user page
    public function EditUserDetail($id){
        $userData = User::find($id);
        return view('admin.edit_user',['user' => $userData]);
    }   

    public function updateUserDetail(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
        ]); 
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if($request->status == "on"){
            $request->status = 1;
        }else{
            $request->status = 0;
        }
        DB::table('users')
              ->where('id', $id)
              ->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'status' => $request->status,
              ]);
        return redirect()->back()->with('session_msg','Data updated Successfully');     
    }

    // function to delete user
    public function deleteUserSoft($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('delete_msg','User Deleted Succesfully');
    }


    //===============================================================================================================
                            // user Relates Methods End
    //===============================================================================================================


    //===============================================================================================================
                            // Admin Relates Methods start
    //===============================================================================================================
    // 
    public function showAllAdmin(){
        return view('admin.admins');
    }

    //get all user display in datatable
    public function getAllAdmin(Request $request){
        if($request->ajax()){
            $data = Admin::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn  = '<td><a href="/admin/admins/view/'.$row->id.'"><i class="fas fa-eye p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/admins/edit/'.$row->id.'" ><i class="fas fa-edit p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/admins/delete/'.$row->id.'"><i class="fas fa-trash p-2"></i></a></td>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }


    // show add user form to admin
    public function showAddAdminForm(){
        return view('admin.add_admin');
    }
    // submit add user form
    public function submitAddAdminForm(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'profile_img' => 'mimes:jpeg,jpeg,png',
        ]); 
        if($request->hasfile('profile_img')){
            $file = $request->file('profile_img');
            $extension = $file->extension();
            $allowedExtension = array('jpg','jpeg','png');
            if(!in_array($extension,$allowedExtension)){
                return redirect()->back()->with('img_error','Please Select Image File Only');
            }
            $filename = 'profile_dp_'.str_replace(' ','',$request->name)."_". time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images/admins', $filename);
            $request->profile_img = $filename;
        }
        
        Admin::create([
            'name' => $request->name,
            'profile_img' => $request->profile_img,
            'email' => $request->email,    
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'address' => $request->address,
            'city' => $request->city,
            'pincode' => $request->pincode,
        ]);
        return redirect()->back()->with('msg','Admin Added Succesfully');
    }

    // return view of all user
    public function showAdminDetail($id){
        $userData = Admin::find($id);
        return view('admin.view_admin',['user' => $userData]);
    }

    // return view of edit user page
    public function EditAdminDetail($id){
        $userData = Admin::find($id);
        return view('admin.edit_admin',['user' => $userData]);
    }   

    // function to delete user
    public function deleteAdminSoft($id){
        $user = Admin::find($id);
        $user->delete();
        return redirect()->back()->with('delete_msg','Admin Deleted Succesfully');
    }


    

    //===============================================================================================================
                            // Admin Relates Methods End
    //===============================================================================================================
    public function showAllProduct(){
        return view('admin.products');
    }
     //get all product display in datatable
     public function getAllProduct(Request $request){
        
        if($request->ajax()){
            $data = Product::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('image',function($row){
                $file = $row->image;
                $file_alt = stripslashes($row->title);
                $image = '<img src="'.$file.'" alt="'.$file_alt.'" width="200px" height="300px">';
                return $image;
            })
            ->editColumn('title',function($row){
                
                $title = stripslashes($row->title);
                return $title;
            })
            ->addColumn('action',function($row){
                $btn  = '<td><a href="/admin/product/view/'.$row->id.'"><i class="fas fa-eye p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/product/edit/'.$row->id.'"><i class="fas fa-edit p-2"></i></a></td>';
                $btn .= '<td><a href="/admin/product/delete/'.$row->id.'"><i class="fas fa-trash p-2"></i></a></td>';
                return $btn;
            }) 
            ->rawColumns(['image','action'])
            ->make(true);
        }
    }
    public function showImportProductForm(){
        return view('admin.import_data');
    }



}

