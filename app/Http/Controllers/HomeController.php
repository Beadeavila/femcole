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
        $grades = Grade::paginate();
        $users = User::paginate();
        return view('home', compact('grades','users'))
            ->with('i', (request()->input('page', 1) - 1) * $grades->perPage(), $users->perPage());
    }
}
