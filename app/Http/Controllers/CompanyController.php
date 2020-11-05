<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companys = company::all();;
        return view('companys.index', ['companys' => $companys]);
    }

    public function creat()
    {
        return view('companys.creat');
    }

    public function show($id)
    {
        $temp = company::findOrFail($id);
        $company = $temp->toArray();
        return view('companys.show', $company);
    }

    public function edit($id)
    {
        $company = company::findOrFail($id)->toArray();
        return view('$companys.edit', $company);
    }
}
