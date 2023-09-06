<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Welcome! You have Successfully logged in');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }



    public function mendel_genetics()
    {
        if(Auth::check()){
            return view('mendel_genetics');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function nonmendel_genetics()
    {
        if(Auth::check()){
            return view('nonmendel_genetics');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    
    public function index_genetics()
    {
        if(Auth::check()){
            return view('index_genetics');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function index_genetics_video()
    {
        if(Auth::check()){
            return view('index_genetics_video');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function lawdominance()
    {
        if(Auth::check()){
            return view('lawdominance');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function lawassortment()
    {
        if(Auth::check()){
            return view('lawassortment');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function lawsegregation()
    {
        if(Auth::check()){
            return view('lawsegregation');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function incompletedominance()
    {
        if(Auth::check()){
            return view('incompletedominance');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function codominance()
    {
        if(Auth::check()){
            return view('codominance');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function multipleallele1()
    {
        if(Auth::check()){
            return view('multipleallele1');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function multipleallele2()
    {
        if(Auth::check()){
            return view('multipleallele2');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function multipleallele3()
    {
        if(Auth::check()){
            return view('multipleallele3');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function pleitropic()
    {
        if(Auth::check()){
            return view('pleitropic');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    function lpm1() {
        return view ('/lpm');
    }

    function navbar1() {
        return view ('navbar');
    }

    function home() {
        return view ('home');
    }

}