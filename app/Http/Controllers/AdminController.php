<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Res;
use App\User;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function admin_home(){
    	return view('admin.home');
    }

    public function admin_logout(){
    	Auth::logout();
    	return redirect('/');
    }

    public function admin_cars(){
    	return view('admin.cars');
    }

    public function admin_reservation()
    {
        $posts = Res::orderBy('pickupDate')->get();
        //pass posts data to view and load list view

    	return view('admin.reservation', ['posts' => $posts]);
    }

    public function admin_reservationDetails($id=" ")
    {
        //fetch post data
        $post = Res::find($id);

        //pass posts data to view and load list view
       return view('admin.reservationDetails',['post' => $post]);
    }

    public function admin_reservationSearch(Request $request)
    {
        $search = $request->get('search');

        $posts = DB::table('res')->select('*')->where('id',$search)->get();
        return view('admin.reservation',['posts' => $posts]);
    }

    public function admin_reservationDelete($id=" "){
        //update post data
        Res::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('admin_reservation');
    }

    public function admin_custoemr()
    {
        $posts = User::orderBy('fname')->get();
        //pass posts data to view and load list view

        return view('admin.customer', ['posts' => $posts]);
    }

     public function admin_customerSearch(Request $request)
    {
        $search = $request->get('search');

        $posts = DB::table('users')->select('*')->where('fname',$search)->get();
        return view('admin.customer',['posts' => $posts]);
    }

    public function admin_custoemrDetails($id=" ")
    {
        //fetch post data
        $post = User::find($id);

        //pass posts data to view and load list view
       return view('admin.customerDetails',['post' => $post]);
    }

    public function admin_custoemrDelete($id=" "){
        //update post data
        User::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('admin_custoemr');
    }

    public function admin_message(){
        return view('admin.message');
    }
}
