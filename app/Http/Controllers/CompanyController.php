<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Company;
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

    public function store(Request $request)
    {
        $company = new Company();
        $company->company_name = $request->input('company_name');
        $company->country = $request->input('country');
        $company->save();

        return redirect('companies');
    }

    public function update($id, Request $request)
    {
        Company::FindOrFail($id)
            ->update([
                'company_name' => $request->input('company_name'),
                'country'=>$request->input('country')
            ]);

        return redirect('companies');
    }
}
