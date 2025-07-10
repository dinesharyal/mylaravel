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
    
    public function showCircular(Request $request){

        $searchText=$request->get('search');
        if($searchText){
            $circular = Circular::where(function($query) use ($searchText) {
                $query->where('subject', 'like', '%' . $searchText . '%')
                      ->orWhere('department', 'like', '%' . $searchText . '%')
                      ->orWhere('circular_no', 'like', '%' . $searchText . '%');
            })->get();
        }else{
        $circular = Circular::get();
    }
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
