<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;
use DB;

class BlogpostController extends Controller
{
    //
    public function insertblog(){
  	
		 
		foreach (Blogpost::all() as $flight) {
		    echo $flight->name;
		}

		//Raw query 
		
		
		/*
		$sql = DB::raw("INSERT INTO blogpost (name) VALUES ('test5')");
		DB::insert($sql);
		*/	
 		   	echo "pramod";
    }
}
