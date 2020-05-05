<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\User;

class DriverController extends Controller
{
    public function car_list()
    {

    	$posts = Car::orderBy('id')->get();
        //pass posts data to view and load list view

    	return view('driver.car-list', ['posts' => $posts]);
    }

    public function car_add(){
    	return view('driver.car-add');
    }

    public function user_logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
