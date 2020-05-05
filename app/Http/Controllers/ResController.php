<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Res;
use App\Http\Controllers\Controller;
use Session;

class ResController extends Controller
{
       public function insert(Request $request){
        //validate post data
         $this->validate($request,[
            'pickupDate'=>'required', // для валидации
            'pickupTime'=>'required',
            'phone'=>'required',
            'returnDate'=>'required',
            'returnTime'=>'required'
        ]);

        //get post data
        $postData = $request->all();

        //insert post data
        Res::create($postData);

        //store status message
        Session::flash('success', 'Data has been saved successfully!');

        return redirect()->route('user_reservation');
    }
}
