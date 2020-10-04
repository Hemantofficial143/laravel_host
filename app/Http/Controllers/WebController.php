<?php

namespace App\Http\Controllers;
use App\Product;
use App\Wishlist;
use App\User;
use Illuminate\Http\Request;
use DB;
use Validator;
use Hash;
use Auth;

class WebController extends Controller
{
    
    public function index(){
        $new = Product::all()->sortByDesc('price')->take(3);
        $popular = DB::table('products')->orderBy('price','desc')->get()->take(6);
        return view('web.index', ['new' => $new , 'popular' => $popular]);
    }

    public function shop(){
        return view('web.index');
    }

    public function about(){
        return view('web.about');
    }

    public function contact(){
        return view('web.contact');
    }

    public function single($name){
        $product = Product::where('asin',"=",$name)->get();
        if(Auth::check()){
            $wish = DB::table('wishlists')->where('product_id', $product->id);

        }
        return view('web.single',['data' => $product[0]]);
    }

    

    public function register(){
        return view('web.register');
    }

    public function registerSubmit(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $email = $request->email;
        $password = $request->password;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gender' => 'required',
        ]);  
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $user_create = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'gender' => $gender,
        ]);
        if($user_create){
            return redirect()->back()->with('success','Successfully Registered');
        }
        return redirect()->back()->with('error','Something Went Wrong');
        

    }

    public function login(){
        return view('web.login');
    }

    public function loginSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'email'   => 'required|email',
            'password' => 'required'
        ]);  
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])){
            return redirect()->intended('/');
        }
        return redirect()->back()->with('error' , 'Invalid Email or Password');
    }

    public function dashboard(){
        return view('web.dashboard');
    }

    public function wishlistAction(Request $request,$action){
        $result = array();
        if ($action == 'add'){
            if(Auth::check()){
                $wish = Wishlist::create([
                    'product_id' => $request->product_id,
                    'user_id' => $request->user_id,
                ]);
                if($wish){
                    $result['error'] = False;
                    $result['success_msg'] = "Product Added to Wishlist";    
                }
            }else{
                $result['error'] = True;
                $result['error_msg'] = "Please Login to Add wishlist";
            }
        }else if ($action == 'remove'){
            
        }
        echo json_encode($result);
    }

    public function logout(Request $request){
        Auth::logout($request);
        return redirect('/login')->with('success','You have Successfully logged out');
    }

    public function search(Request $request){
        $result = Product::where('title', $request->keyword)
                ->orWhere('title', 'like', '%' . $request->keyword . '%')
                ->orWhere('category', 'like', '%' . $request->keyword . '%')
                ->get();

        $high_to_low = Product::where('title', $request->keyword)
                ->orWhere('title', 'like', '%' . $request->keyword . '%')
                ->orWhere('category', 'like', '%' . $request->keyword . '%')
                ->orderBy('price', 'desc')
                ->get();
        $low_to_high = Product::where('title', $request->keyword)
                ->orWhere('title', 'like', '%' . $request->keyword . '%')
                ->orWhere('category', 'like', '%' . $request->keyword . '%')
                ->orderBy('price')
                ->get();
        return view('web.search_result',[ 'result' => $result , 'keyword' => $request->keyword , 'high_to_low' => $high_to_low , 'low_to_high' => $low_to_high]);
    }


    

}
