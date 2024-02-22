<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = subject::all();
        return view('subject.index', ['subject'=>$subjects]);
    }

    public function create(){
        return view('subject.create');
    }

    public function store(Request $req){
        $data = $req->validate([
            'code' => 'required',
            'subject' => 'required',
            'lecturer' => 'required',
            'description' => 'nullable'
        ]);

        $newsubject = subject::create($data);

        return redirect(route('subject.index'));

    }

    public function edit(subject $subject){
        
        return view('subject.edit', ['subject' => $subject]);
    
      }

    public function update(subject $subject, Request $req){
        $data = $req->validate([
            'code' => 'required',
            'subject' => 'required',
            'lecturer' => 'required',
            'description' => 'nullable'
        ]);

        $subject->update($data);

        return redirect(route('subject.index'))->with('success', 'subject Updated Successfully');
    }

    public function destroy($id){
       
        $subject = subject::findorFail($id);
        $subject->delete();
        return redirect(route('subject.index'))->with('success', 'subject Deleted Successfully'); 
    
      }
}
