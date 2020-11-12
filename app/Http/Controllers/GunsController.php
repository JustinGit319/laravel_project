<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\gun;
use Illuminate\Http\Request;

class GunsController extends Controller
{
    public function index(){
        $guns = gun::all();
        $companies = company::all();
        return view('guns.index',['guns'=>$guns, 'companies'=>$companies]);
    }

    public function creat(){
        return view('guns.creat');
    }

    public function show($id){
        $gun = gun::findOrFail($id)->toArray();
        $companies = company::all();
        return view('guns.show',$gun, ['companies'=>$companies]);
    }

    public function edit($id)
    {
        $gun = gun::findOrFail($id)->toArray();
        $companies = company::all();
        return view('guns.edit', $gun, ['companies'=>$companies]);
    }
}
