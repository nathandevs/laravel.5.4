<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $users = User::find($user_id);
        // Session::put('test', '11111');
        // Session:put('test', 'test');
        // echo Session::get('test');
        // print_r(session()->all()); die;
        return view('home')->with('posts', $users->posts);
    }
}
