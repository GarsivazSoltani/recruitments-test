<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;
    use ThrottlesLogins;
    // protected $maxAttempts = 2;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateForm($request); // اعتبار سنجی فرم ورود

        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        if ($this->attempLogin($request)){
            return $this->sendSuccessResponse(); // درست بودن نام کاربری و رمز عبور
        }
        $this->incrementLoginAttempts($request); // کسر کردن دفعات تلاش برای ورود

        return $this->sendLoginFailedResponse(); // اشتباه بودن نام کاربری یا رمز عبور
    }

    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required']
        ]);
    }

    protected function attempLogin(Request $request)
    {
        return Auth::attempt($request->only('email', 'password'), $request->filled('remember')); // چک کردن نام کاربری و رمز عبور
    }

    protected function sendSuccessResponse()
    {
        session()->regenerate(); // ساختن مجدد سشن
        return redirect()->intended(); // ریدایرکت کردن به صفحه‌ی ورودی کاربر
    }

    protected function sendLoginFailedResponse()
    {
        return back()->with('wrongCredentials', true); 
    }

    public function logout()
    {
        session()->invalidate();
        Auth::logout();
        return redirect()->route('home.welcome');
    }

    protected function username()
    {
        return 'email';
    }
}
