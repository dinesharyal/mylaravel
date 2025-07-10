<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circular;

class myViewController extends Controller
{
    public function showhome(){
        return view('home');
    }
    
    public function showdept(){
        return view('department');
    }
    
    public function showCircular(){
        $circular = Circular::all();
        return view('circular', ['circular' => $circular]);
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
