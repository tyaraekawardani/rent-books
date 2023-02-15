<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // buat ngecek klo user udah login atau belum
        if (Auth::attempt($credentials)){
        //    buat ngecek status user active atau bukan
        if(Auth::user()->status != 'active')
        {
            Session::flash('status', 'failed');
            Session::flash('massage', 'Your Account is not Active yet, please contact admin');
            return redirect('login');
        }

        $request->session()->regenerate();

            // cek apakah dia admin
        if(Auth::user()->roles_id == 1)
        {
            return redirect('dashboard');
        }

        // cek apakah dia client
        if(Auth::user()->roles_id == 2)
        {
            return redirect('profile');
        }
            
        }
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
            // klau gagal login
            Session::flash('status', 'failed');
            Session::flash('massage', 'Invalid login');
            return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function register()
    {
        return view('register');
    }

    public function regis(Request $request)
    {
        // validate data masuk apa ngga
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address' => 'required|max:255',
        ]);

        $request['password'] = Hash::make($request->newPassword);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('massage', 'regis success please, wait admin to approve');
        return redirect('register');
    }
}
