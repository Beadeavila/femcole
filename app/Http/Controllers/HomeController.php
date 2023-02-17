<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin) {
                return redirect()->route('users.index');
            } else {
                return redirect()->route('users.show', [auth()->id()]);
            }
        } else {
            return view('auth.login');
        }
    }
    
}
