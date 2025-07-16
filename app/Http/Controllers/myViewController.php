<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circular;
use App\Models\Union;
use App\Models\UnionNotice;

class myViewController extends Controller
{
    public function showhome()
    {
        return view('home');
    }

    public function showdept()
    {
        return view('department');
    }

    public function showCircular(Request $request)
    {
        $searchText = $request->get('search');

        if ($searchText) {
            $circular = Circular::with('department')
                ->where(function ($query) use ($searchText) {
                    $query->where('subject', 'like', '%' . $searchText . '%')
                        ->orWhereHas('department', function ($q) use ($searchText) {
                            $q->where('name', 'like', '%' . $searchText . '%');
                        })
                        ->orWhere('circular_no', 'like', '%' . $searchText . '%')
                        ->orWhere('circular_date','like','%' .$searchText .'%');
                })
                ->get();
        } else {
            $circular = Circular::with('department')->get();
        }
        return view('circular', ['circular' => $circular]);
    }



    public function showpolicy()
    {
        return view('policy');
    }

    public function showgallery()
    {
        return view('gallery');
    }

    public function showTraining()
    {
        return view('training');
    }
    public function showUnion()
    {
        $notices = UnionNotice::with('union')->get();
        return view('unionnotice',['notices'=>$notices]);
    }
}
