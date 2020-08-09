<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HR;

class HrController extends Controller
{

   
	public function index(){
    	$users = HR::all();
        
        return view('/pages/show',compact('users'));
    }

	 

	public function save(Request $request){
    	$member = new HR;
    	$member->no = $request->input('no');
    	$member->data = $request->input('date');
    	$member->item = $request->input('item');
    	$member->quantity = $request->input('quantity');
    	$member->driver = $request->input('driver');
    	$member->state = $request->input('state');

  		$member->save();

  		$users = HR::all();
        
        return view('/pages/show',compact('users'));
 
  	}

  	
    

    public function updateState(Request $request)
{
    $member = HR::findOrFail($request->user_id);
    $member->state = $request->state;
    $member->save();

    //return response()->json(['message' => 'User status updated successfully.']);
}
}	

  

