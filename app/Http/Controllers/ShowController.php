<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function search(Request  $r):View{
        $search = $r->search;
        $data=Students::where('name','LIKE',"%$search%")->get();
        return view('index',['sdata'=>$data]);
    }

    public function show(): View{

        $data=Students::all();

        return view('index',['sdata'=>$data]);
    }
}
