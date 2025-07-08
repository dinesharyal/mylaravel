<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myViewController extends Controller
{
    public function showhome(){
        return view('home');
    }
    
    public function showdept(){
        return view('department');
    }
    
    public function showcircular(){
        return view('circular');
    }
    
    public function showpolicy(){
        return view('policy');
    }
    
    public function showgallery(){
        return view('gallery');
    }
    
    public function showTraining(){
        return view('training');
    }
    public function showUnion(){
        return view('unionnotice');
    }   
}
