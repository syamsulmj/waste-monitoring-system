<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DustBin;
use App\User;

class HomeController extends Controller
{
    public function index() {

      $dust_bins = DustBin::all();

      if(session('login?')) {
        return view(
          'home.index',
          compact('dust_bins')
        );
      }
      else {
        return redirect()->action('HomeController@login');
      }
    }

    public function login() {

      return view('home.login');
    }

    public function login_checking(Request $request) {

      $request->validate([
        'username' => 'required',
        'password' => 'required'
      ]);

      $username = $request->input('username');
      $password = $request->input('password');

      if(User::where('username', $username)->where('password', $password)->count() > 0) {

        session([
          'login?' => true
        ]);

        return redirect()->action('HomeController@index');
      }

      else {
        return back()->withErrors(['status' => 'Wrong Username or Password']);
      }
    }

    public function register() {
      
    }

    public function logout(Request $request) {
      auth()->logout();
      session()->flush();

      return redirect()->action('HomeController@index');
    }
}
