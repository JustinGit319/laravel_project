<?php

namespace App\Http\Controllers;

use App\Models\gun;
use Illuminate\Http\Request;

class GunsController extends Controller
{
    public function index(){
        $guns = gun::all();
        return view('guns.index',['receipts'=>$guns]);
    }

    public function creat(){
        return view('guns.creat');
    }

    public function show($id){
        $temp = gun::findOrFail($id);
        $gun = $temp->toArray();
        return view('guns.show',$gun);
    }

    public function edit($id)
    {
        $gun = gun::findOrFail($id)->toArray();
        return view('guns.edit', $gun);
    }
}
