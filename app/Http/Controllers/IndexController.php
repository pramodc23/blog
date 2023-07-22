<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class IndexController extends Controller
{
    //
    public function testfun($value='')
    {
    	# code...
    }


    public function index(Member $id)
    {
    	dd($id);
    	return  Member::all();


    	dd($data);
  	  	return '';
    	//return Group::all();
    }

}
