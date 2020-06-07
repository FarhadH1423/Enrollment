<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login_dashboard(Request $request){

    	// return view('admin.dashboard');

    	$email=$request->admin_email;
    	$pass=md5($request->admin_pass);
    	$result = DB::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_pass',$pass)
    	->first(); 

    	 $user= DB::table('admin_tbl')->get(); 

    	$posts = DB::select('SELECT * FROM admin_tbl');

    	


    	 if( $posts )

    	{
    		echo "hi";
    	}

    	else{

    		return Redirect::to('/backend');
    		
    	}

    }
}
