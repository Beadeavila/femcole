<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = auth()->user()->isAdmin ? Grade::paginate() : auth()->user()->grades()->paginate();
        return view('grade.index', compact('grades'))->with('i', (request()->input('page', 1) - 1) * $grades->perPage());
    }

    public function create()
    {
        abort_unless(auth()->user()->isAdmin, 403);
        return view('grade.create');
    }

    public function store(Request $request)
    {
        abort_unless(auth()->user()->isAdmin, 403);
        $grade = Grade::create($request->all());
        return redirect()->route('grades.index')->with('success', 'Grade created successfully.');
    }

    public function show($id)
    {
        $user = User::find($id);
        $grade = Grade::find($id);
        return view('grade.show', compact('user', 'grade'));
    }

    public function edit($id)
    {
        $grade = Grade::find($id);
        $user = User::pluck('name', 'id');
        return view('grade.edit', compact('grade', 'user'));
    }

    public function update(Request $request, Grade $grade)
    {
        request()->validate(Grade::$rules);
        $grade->update($request->all());
        return redirect()->route('grades.index')->with('success', 'Grade updated successfully');
    }

    public function destroy($id)
    {
        $grade = Grade::find($id);
        abort_unless($grade && auth()->user()->isAdmin, 403);
        $grade->delete();
        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully');
    }
}
