<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function show($test = ""){
        $datas['name'] = "this is my controller";
        return view('my-view',$datas);
    }
}
