<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class AddpController extends Controller
{
	    public function index(){
        $patients = Patient::all();
        return view('Addp.create')->with('patients', $patients);
    }

    public function post(Request $request){
    	
          $data = $request->all();
//this is a doctors priviledge to add patients record 
//a patient can also insert their records if they wish which is done in the patient controller          
          $add = new Patient;
          $add->name = $data['fname'];
          $add->lname = $data['lname'];
		  $add->age = $data['age'];          
          $add->description = $data['description'];
          $add->save(); 
      }
}
