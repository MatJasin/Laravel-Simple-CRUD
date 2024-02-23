<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\user;
use App\Models\subject;
use App\Models\enrollment;


// @foreach ($enrollment->student_matrics as $matrics)
//                 <ul>{{$matrics}}</ul>
//                 @endforeach
class EnrollmentController extends Controller
{
    public function index()
    {

        $enrollments = DB::table('enrollment')
        ->join('users', 'enrollment.user_id', '=', 'users.id')
        ->join('subjects', 'enrollment.subject_id', '=', 'subjects.id')
        ->select('enrollment.id', 'users.matrics as student_matrics', 'subjects.code as subject_code',
        'subjects.subject as subject_subject', 'subjects.lecturer as subject_lecturer')
        ->get();

        return view('enrollment.index', ['enrollments' => $enrollments]);
    }

    public function create()
    {

        $users = user::all();
        $subjects = subject::all();

        return view('enrollment.create', compact('users', 'subjects'));
    }

    public function store(Request $request)
    {
        $user = user::find($request->user_id);
       
        $user->subjects()->sync($request->selected_subjects);
        
        return redirect()->route('enrollment.index')->with('success', 'Enrollment success!');
    }
}
