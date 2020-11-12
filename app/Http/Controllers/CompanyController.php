<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = company::all();;
        return view('companies.index', ['companies' => $companies]);
    }

    public function creat()
    {
        return view('companies.create');
    }

    public function show($id)
    {
        $company = company::findOrFail($id)->toArray();
        return view('companies.show', $company);
    }

    public function edit($id)
    {
        $company = company::findOrFail($id)->toArray();
        return view('companies.edit', $company);
    }
}
