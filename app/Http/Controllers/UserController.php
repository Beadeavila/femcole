<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isAdmin()
{
    return auth()->user()->isAdmin;
}


    //...

    public function index()
    {
        if ($this->isAdmin()) {
            $users = User::where('isAdmin','=', false)->paginate();
            return view('user.index', compact('users'))
                ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
        } else {
            return redirect()->route('users.show', [auth()->id()]);
        }
    }
    
    
    public function show($id)
    {
        if ($this->isAdmin()) {
            $user = User::findOrFail($id);
            $grades = $user->grades;
    
            return view('user.show', compact('user', 'grades'));
        } else {
            $user = User::findOrFail($id);
            $grades = $user->grades;
            return view('user.show', compact('user', 'grades'));
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);
        $user->image = 'storage/images/' . $imageName;
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'Estudiante creado.');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        request()->validate(User::$rules);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Estudiante actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Estudiante borrado correctamente');
    }


    public function upload(Request $request)
{
    $file = $request->file('file');

    $filename = time() . '_' . $file->getClientOriginalName();

    $file->move(public_path('uploads'), $filename);

    return response()->json(['filename' => $filename]);
}




}
