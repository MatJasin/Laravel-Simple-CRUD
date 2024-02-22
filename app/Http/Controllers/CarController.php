<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use App\Models\user;
use App\Models\student;



class CarController extends Controller
{
    public function index(car $car){

      $users = User::with('cars')->get();
      $car = car::findOrFail($car);
      // dd($users[0]->car);
      return view('car.index',  compact('users', 'car'));
        
    }

    public function create(){
      $users = User::all();
     return view('car.create', ['users' => $users]);
}

    public function store(Request $request){

        $request->validate([
          'user_id' => 'required|exists:users,id',
          'model' => 'required',
          'brand' => 'required',
          'plate' => 'required'
        ]);

        
        car::create([
          'user_id' => $request->input('user_id'),
          'model' => $request->input('model'),
          'brand' => $request->input('brand'),
          'plate' => $request->input('plate')
      ]);
      return redirect()->route('car.index');

    }

    public function edit(int $car){
    
    $user = user::all();
    $car = car::findOrFail($car);
    return view('car.edit', compact('user', 'car'));
    }

    public function update(Request $request, car $car){
      $data = $request->validate([
        'id' => 'required',
        'plate' => 'required',
        'brand' => 'required',
        'model' => 'required'
      ]);
      // dd($data);
      
      $car->update($data);
  
      return redirect(route('car.index'))->with('success', 'Car Updated Successfully'); 
      
    }

    public function destroy(car $car){

      $car->delete();
      return redirect(route('car.index'))->with('success', 'Car Deleted Successfully'); 
  
    }
}
