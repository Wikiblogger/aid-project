<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Controllers\Controller;
use Session;


class CarController extends Controller
{
    public function insert(Request $request){
        //validate post data
         $this->validate($request,[
            'maker'=>'required', // для валидации
            'model'=>'required',
            'year'=>'required'
        ]);

        //get post data
        $postData = $request->all();

        //insert post data
        Car::create($postData);

        //store status message
        Session::flash('success', 'Data has been saved successfully!');

        return redirect()->route('car_add');
    }

        public function edit($id){
        //get post data by id
        $post = Car::find($id);

        //load form view
        return view('posts.edit', ['post' => $post]);
    }

    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'maker'=>'required', // для валидации
            'model'=>'required',
            'year'=>'required'
        ]);

        //get post data
        $postData = $request->all();

        //update post data
        Post::find($id)->update($postData);

        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('posts.index');
    }
}
