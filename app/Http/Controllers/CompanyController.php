<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('companys.index');
    }

    public function creat(){
        return view('companys.creat');
    }

    public function show($id){
        if ($id == 5){
            $company_name = "XXX";
        } else {
            $company_name = "Whatever";
        }
        $data = compact("company_name");
        return view('companys.show', $data);
    }

    public function edit($id){
        if ($id == 5){
            $company_name = "XXX";
        } else {
            $company_name = "Whatever";
        }
        $data = compact("company_name");
        return view('companys.edit', $data);
    }
}
