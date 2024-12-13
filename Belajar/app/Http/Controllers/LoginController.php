<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index_login()
    {
        return view('login', [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        /*
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);
        */

        ##dd('Berhasil login'); buat ngecek validasinya bisa atau enggak

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } #else {
           # return redirect()->back()-> withInput($request->only('username'))->withErrors([
           # 'password' => 'Incorrect Username or Password combination',
           #]);
       #}

        return back()->with('loginError', 'Incorrect Username or Password combination');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function index_register()
    {
        return view('addregister');
    }

    public function add_register(Request $request)
    {
        //Simpan Pengguna baru
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password); // Menggunakan Hash::make agar menjadi Bcrypt
        $user->save();

        return redirect('/register')->with('Success', 'Akun Berhasil di Tambah');

    }
}
