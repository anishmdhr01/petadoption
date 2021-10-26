<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adopt;
use App\Models\Adopted;
use App\Models\Register;
use App\Models\Surrender;

class DetailController extends Controller
{
    function german(){
    	$data=Adopt::where('Pet_Id','1')->get();
    	return view('/german',['data'=>$data]);
    }

    function bulldog(){
    	$data=Adopt::where('Pet_Id','2')->get();
    	return view('/bulldog',['data'=>$data]);
    }

    function bengal(){
    	$data=Adopt::where('Pet_Id','3')->get();
    	return view('/bengal',['data'=>$data]);
    }

    function pomeranian(){
    	$data=Adopt::where('Pet_Id','4')->get();
    	return view('/pomeranian',['data'=>$data]);
    }

    function scottish(){
    	$data=Adopt::where('Pet_Id','5')->get();
    	return view('/bulldog',['data'=>$data]);
    }

    function sia(){
    	$data=Adopt::where('Pet_Id','6')->get();
    	return view('/sia',['data'=>$data]);
    }

    function admindetail(){
        $data=Adopt::all();
        return view('/admindetail',['data'=>$data]);
    }

    function adminadopted(){
        $data=Adopted::all();
        return view('/adminadopted',['data'=>$data]);
    }
        
    function adminsurrender(){
        $data=Surrender::all();
        return view('/adminsurrender',['data'=>$data]);
    }

    function adminregister(){
        $data=Register::all();
        return view('/adminregister',['data'=>$data]);
    }
}
