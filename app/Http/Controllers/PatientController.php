<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('Addp.create')->with('patient', $patients);
    }

    public function post(Request $request){
    	
          $data = $request->all();

          $add = new Patient;
          $add->name = $data['fname'];
          $add->lname = $data['lname'];
		  $add->age = $data['age'];          
          $add->description = $data['description'];
          $add->save();  
      }
  }
