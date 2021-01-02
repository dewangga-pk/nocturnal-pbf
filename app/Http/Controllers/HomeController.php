<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index()
    {
        if (auth()->user()->isA('admin')){
            return redirect('/admin/dashboard');
        }elseif (auth()->user()->isA('user')){
            return redirect('/');
        }else{
            return abort(403);
        }
    }
}
