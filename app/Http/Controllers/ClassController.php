<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\subject;
use App\Models\classes;


class ClassController extends Controller
{
    public function index()
    {
    }

    public function create()
    {

        $users = user::all();
        $subjects = subject::all();

        return view('class.create', compact('users', 'subjects'));
    }

    public function store(Request $request)
    {
        $class = new classes;
        $class->save();
        $class->users()->attach($request->input('selectedUsers'));
        $class->subjects()->attach($request->input('selectedSubjects'));

        return redirect()->route('classes.index')->with('success', 'Class created successfully');
    }
}
