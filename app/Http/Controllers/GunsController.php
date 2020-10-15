<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GunsController extends Controller
{
    public function index(){
        return view('guns.index');
    }

    public function creat(){
        return view('guns.creat');
    }

    public function show($id){
        if ($id == 5){
            $gun_name = "AK-47";
            $gun_type = "Assault rifle";
        } else {
            $gun_name = "Whatever";
            $gun_type = "Whatever";
        }
        $data = compact("gun_name", "gun_type");
        return view('guns.show', $data);
    }

    public function edit($id){
        if ($id == 5){
            $gun_name = "AK-47";
            $gun_type = "Assault rifle";
        } else {
            $gun_name = "Whatever";
            $gun_type = "Whatever";
        }
        $data = compact("gun_name", "gun_type");
        return view('guns.edit', $data);
    }
}
