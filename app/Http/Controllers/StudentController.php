<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\user;

class StudentController extends Controller
{

  
  public function user(){
     
     return view ('student.user');
  }

  public function userstore(Request $request){
    $data = $request->validate([
      'matrics' => 'required',
      'email' => 'required',
      'password' => 'required'
    ]);
    
    $newuser = user::create($data);

    return redirect(route('student.create'));
  }



  public function index(){
    
    $users = User::with('student')->get();
    // dd($users[0]->student->firstName);
    return view('student.index',  compact('users'));
  }

  public function create(){
         $users = User::all();
        return view('student.create', ['users' => $users]);
  }

  public function store(Request $request){
    $request->validate([
      'user_id' => 'required|exists:users,id',
      'firstName' => 'required',
      'lastName' => 'required',
      'year' => 'required|numeric',
      'course' => 'required'
    ]);
    
    student::create([
      'user_id' => $request->input('user_id'),
      'firstName' => $request->input('firstName'),
      'lastName' => $request->input('lastName'),
      'year' => $request->input('year'),
      'course' => $request->input('course'),
  ]);
  return redirect()->route('student.index');
}


  public function edit(user $user){
    
    $student = $user->student;
    // dd($student);
    return view('student.edit', compact('user', 'student'));
  }

  public function update(user $user, Request $request){
    $data = $request->validate([
      'user_id' => 'required',
      'firstName' => 'required',
      'lastName' => 'required',
      'year' => 'required|numeric',
      'course' => 'required'
    ]);
    // dd($data);
    $student = $user->student;
    $student->update($data);

    return redirect(route('student.index'))->with('success', 'Student Updated Successfully'); 

  }

  public function destroy(user $user){

    $student = $user->student;
    $student->delete();
    return redirect(route('student.index'))->with('success', 'Student Deleted Successfully'); 

  }

}
