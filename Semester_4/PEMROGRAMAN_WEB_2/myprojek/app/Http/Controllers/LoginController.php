<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }


    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function index(){
//         return view('login.index', [
//             'title' => 'Login',
//             'active' => 'login'
//         ]);
//     }

//     public function authenticate(Request $request){
//         $credentials = $request->validate([
//             'email' => 'requeired|email:dns',
//             'password' => 'required'
//         ]);

//         if(Auth::attempt($credentials)){
//             $request->session()->regenerate();
//             return redirect()->intended('http://localhost/myprojek/public/dashboard');
//         }

//         return back()->with('loginError', 'Login failed!');
//     }

//     public function logout(Request $request){
//         Auth::logout();

//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         return redirect('/');
//     }
// }
