<?php


namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Product;
use App\Wishlist;
use App\User;
use App\Clicks;
use Illuminate\Http\Request;
use DB;
use Validator;
use URL;
use Hash;
use Auth;
use Mail;
use App\Mail\verification;
use Carbon\Carbon;


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
        $wish = "";
        if(Auth::check()){
            $wish = DB::table('wishlists')
                    ->where('product_id','=',$product[0]->id)
                    ->where('user_id','=',Auth::user()->id)
                    ->count();
        }
        return view('web.single',['data' => $product[0] , 'wish' => $wish]);
    }

    public function loadMailConfig($mail){
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'a2mallowner@gmail.com';
        $mail->Password = 'a2maller';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('a2mallowner@gmail.com', 'A2MALL');
        return $mail;
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
        $ver_token = md5(rand(1,9999)."".rand(1,9999));
        $user_create = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'gender' => $gender,
            'ver_token' => $ver_token,
        ]);

        if($user_create){
            $mail = new PHPMailer(true);
            $mail = $this->loadMailConfig($mail);
            $mail->addAddress($email = $request->email,  $request->name);
            $mail->Subject = "A2Mall Account Verification Email";
            $url = URL::to('/verify/'.$ver_token);
            $mail->Body = "Hi <b>".$request->name."</b>\n
                            look like You Just Signed up to A2Mall \n
                            Thank you for signup please click on below link to verify your Account\n
                            ".$url."\n Thank you!!";
            $mail->send();
            return redirect()->back()->with('success','Successfully Registered');
        }
        return redirect()->back()->with('error','Something Went Wrong');
    }

    public function verify(Request $request,$token = ""){
        try{
            $find_user = User::where('ver_token',$token)
                ->where('status',0)
                ->first();
            if(isset($find_user->id)){
                $user = User::find($find_user->id);
                $user->email_verified_at = Carbon::now()->timestamp;
                $user->status = 1;
                $user->save();
                return redirect('/login')->with('success','Account verified Successfully');
            }else{
                return redirect('/login')->with('error','Account already verified or token Expired');
            }
        }catch(Exception $e){
            return redirect('/login')->with('error',$e);
        }

    }

    public function store(){
        $new = Product::all();
        $high_to_low = DB::table('products')->orderBy('price', 'desc')->get();
        $low_to_high = DB::table('products')->orderBy('price')->get();
        return view('web.store',['new' => $new, 'high_to_low' => $high_to_low, 'low_to_high' => $low_to_high]);
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

    public function forgot_password(){
        return view('web.forgot_password');
    }

    public function forgot_passwordSubmit(Request $request){
        $email  = $request->email;
        $token = md5(rand(1,9999)."".rand(1,9999));
        $created_at = now();

        $forgot = DB::table('password_resets')->insert([
                    'email' => $email,
                    'token' => $token,
                    'created_at' => $created_at,
                    'status' => 0,
                ]);
        if($forgot){
            $mail = new PHPMailer(true);
            $mail = $this->loadMailConfig($mail);
            $mail->addAddress($email = $request->email);
            $mail->Subject = "A2Mall Password Reset Email";
            $url = URL::to('/reset/'.$token);
            $mail->Body = "Hi <b>".$request->email."</b>.\n
                            look like You Just request to reset password on A2Mall. \n
                            Stay Relex and click on below link to reset your password.\n
                            ".$url."\n\n
                            Thank you!!";
            $mail->send();
            return redirect()->back()->with('success','Please Check your mail to reset password');
        }
        return redirect()->back()->with('error','Something went Wrong');
    }

    public function resetPassword($token = null){
        if($token !== null){
            $check_token = DB::table('password_resets')
                            ->where('token',$token)
                            ->where('status',0)
                            ->first();
            if(isset($check_token->email)){

                $check_user = DB::table('users')
                            ->where('email',$check_token->email)
                            ->first();
                if(isset($check_user->email)){
                    return view('web.reset_password',['user' => $check_user]);
                }
                return redirect()->back()->with('error',"Email not Registered with us");
            }
        }
    }

    public function resetPasswordSubmit(Request $request){
        $update_password = User::where('email',$request->email)
                        ->update(['password' => Hash::make($request->password)]);
        if($update_password){
            return redirect('/login')->with('success',"Password Changed Successfully");
        }
        return redirect('/login')->with('error',"Something went wrong");
    }

    public function dashboard(){
        return view('web.dashboard');
    }

    public function profile(){
        $user = User::find(Auth::user()->id);
        return view('web.profile',['user' => $user]);
    }

    public function profileSubmit(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        if($user->save()){
            return redirect()->back()->with('success','Profile updated Successfully');
        }
        return redirect()->back()->with('error','Something went wrong');

    }

    public function wishlist(){
        $wishlist = DB::table('wishlists')
                    ->join('users','users.id','=','wishlists.user_id')
                    ->join('products','products.id','=','wishlists.product_id')
                    ->select('products.*')
                    ->get();
        return view('web.wishlist',['products' => $wishlist]);
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
            if(Auth::check()){
                $wish = DB::table('wishlists')
                            ->where('product_id','=',$request->product_id)
                            ->where('user_id','=',$request->user_id);
                if($wish->delete()){
                    $result['error'] = False;
                    $result['success_msg'] = "Product Removed from Wishlist";
                }
            }else{
                $result['error'] = True;
                $result['error_msg'] = "Please Login to Add wishlist";
            }
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

    public function buy($asin = null,$user_id = null,$product_id = null){
        echo $user_id;
        echo $product_id;
        $insert_clicks = Clicks::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);
        if($insert_clicks){
            return redirect("http://www.amazon.in/dp/".$asin."/ref=as_li_qf_asin_il_tl?ie=UTF8&tag=hemantstor04e-21&creative=24630&linkCode=as2&creativeASIN=B07HGGYWL6");
        }
        return redirect()->back();
    }

    public function recent(){
        $recent_product = DB::table('clicks')
                    ->join('users','users.id','=','clicks.user_id')
                    ->join('products','products.id','=','clicks.product_id')
                    ->select('products.*')
                    ->orderBy('clicks.created_at')
                    ->distinct('id')
                    ->get();
                    echo $recent_product;
        return view('web.recent');
    }


}
