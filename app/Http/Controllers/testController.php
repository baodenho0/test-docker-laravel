<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abc;

class testController extends Controller
{
    public function test(){
    	echo abc::first();
    }
}
