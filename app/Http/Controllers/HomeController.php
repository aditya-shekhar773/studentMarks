<?php

namespace App\Http\controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class HomeController extends controller
{
    public function index(){
        return view('index');
    }

    public function storeData(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'math' => 'required',
            'phy' => 'required',
            'che' => 'required',
            'eng' => 'required',
            'hindi' => 'required',
        ]);

        Students::create($data);
        return redirect()->route('student.show');
    }
   
}
