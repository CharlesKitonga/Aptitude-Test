<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrugController extends Controller
{
    
    public function index(){
        $drugs = Drug::all();
        return view('Addp.create')->with('drugs', $drugs);
    }

    public function post(Request $request){
    	
          $data = $request->all();

          $add = new Product;
          $add->name = $data['name'];
          $add->lname = $data['patientname'];         
          $add->description = $data['description'];
		  $add->price = $data['price'];           
          $add->save();  
      }
  }
