<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
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
        $company = Company::findOrFail($id);
        $guns = $company->guns;
        return view('companies.show', ['company'=>$company, 'guns'=>$guns]);
    }

    public function edit($id)
    {
        $company = company::findOrFail($id);
        return view('companies.edit', ['company'=>$company]);
    }

    public function store(CompanyRequest $request)
    {
        $company = new Company();
        $company->company_name = $request->input('company_name');
        $company->country = $request->input('country');
        $company->save();

        return redirect('companies');
    }

    public function update($id, CompanyRequest $request)
    {
        Company::FindOrFail($id)
            ->update([
                'company_name' => $request->input('company_name'),
                'country'=>$request->input('country')
            ]);

        return redirect('companies');
    }

    public function destroy($id)
    {
        Company::destroy($id);

        return redirect('companies');
    }

    //------- Api
    public function api_companies()
    {
        return Company::all();
    }

    public function api_update(Request $request)
    {
        $company = Company::find($request->input('id'));
        $company->company_name = $request->input('company_name');
        $company->country = $request->input('country');

        if ($company == null)
        {
            return response()->json([
                'status' => 0,
                'error' => '沒有此筆資料'
            ]);
        }
        if ($company->company_name == null)
        {
            return response()->json([
                'status' => -1,
                'error' => 'Company_name 不能為空值'
            ]);
        }
        if ($company->country == null)
        {
            return response()->json([
                'status' => -2,
                'error' => 'Country 不能為空值'
            ]);
        }


        if ($company->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => -3,
                'error' => '儲存失敗'
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $company = Company::find($request->input('id'));

        if ($company == null)
        {
            return response()->json([
                'status' => 0,
                'error' => '沒有此筆資料可刪除'
            ]);
        }

        if ($company->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }

    }
}
