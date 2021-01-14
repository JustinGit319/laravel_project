<?php

namespace App\Http\Controllers;

use App\Http\Requests\GunRequest;
use App\Models\company;
use App\Models\gun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GunsController extends Controller
{
    public function index(){
        $guns = Gun::orderBy('id', 'ASC')->get();
//        $guns = $guns;
        $models = Gun::GetAllGunType()->get();

        $data = [];
        foreach($models as $model){
            $data[$model->gun_type] = $model->gun_type;
        }
        return view('guns.index',['guns'=>$guns, 'guntypes' => $data]);
    }

    public function creat(){
//        $companies = DB::table('companies')
//            ->select('id', 'company_name')
//            ->orderBy('id', 'asc')->get();
        $companies = Company::GetCompany()->get();

        $all_company_name = [];
        foreach ($companies as $company){
            $all_company_name[$company->id] = $company->company_name;
        }
        return view('guns.create', ['companies'=>$all_company_name]);
    }

    public function show($id){
        $gun = Gun::findOrFail($id);
        $company = Company::findOrFail($gun->company);
        return view('guns.show', ['gun'=>$gun, 'company_name'=>$company->company_name]);
    }

    public function edit($id)
    {
//        $companies = DB::table('companies')
//            ->select('id', 'company_name')
//            ->orderby('id', 'asc')
//            ->get();
        $companies = Company::GetCompany()->get();

        $data = [];
        foreach($companies as $company){
            $data[$company->id] = $company->company_name;
        }
        $gun = gun::findOrFail($id);
        return view('guns.edit', $gun, ['gun'=>$gun, 'companies'=>$data]);
    }

    public function store(GunRequest $request)
    {
        $gun = new Gun();
        $gun->gun_name = $request->input('gun_name');
        $gun->gun_type = $request->input('gun_type');
        $gun->caliber = $request->input('caliber');
        $gun->company = $request->input('company');
        $gun->save();

        return redirect('guns');
    }

    public function update($id, GunRequest $request)
    {
        $gun = Gun::FindOrFail($id);
        $gun->gun_name = $request->input('gun_name');
        $gun->gun_type = $request->input('gun_type');
        $gun->caliber = $request->input('caliber');
        $gun->company = $request->input('company');
        $gun->save();
        return redirect('guns');
    }

    public function destroy($id)
    {
        Gun::destroy($id);
        return redirect('guns');
    }

    public function guntype(Request $request){

        $guns = Gun::filter_guntype($request->input('type'))->get();

        $models = Gun::GetAllGunType()->get();

        $data = [];
        foreach($models as $model){
            $data[$model->gun_type] = $model->gun_type;
        }

        return view('guns.index',['guns'=>$guns, 'guntypes' => $data]);
    }

    // Api
    public function api_guns()
    {
        return Gun::orderBy('id', 'ASC')->get();
    }


    public function api_update(Request $request)
    {
        $gun = Gun::find($request->input('id'));
        $gun_name = $request->input('gun_name');
        $gun_type = $request->input('gun_type');
        $caliber = $request->input('caliber');
        $company = $request->input('cid');

        if ($gun == null)
        {
            return response()->json([
                'status' => 0,
                'error' => '沒有此筆資料可更新'
            ]);
        }

        if ($gun_name == null)
        {
            return response()->json([
                'status' => -1,
                'error' => 'gun_name 不能為空值'
            ]);
        }
        if ($gun_type == null)
        {
            return response()->json([
                'status' => -2,
                'error' => 'gun_type 不能為空值'
            ]);
        }
        if ($caliber == null)
        {
            return response()->json([
                'status' => -3,
                'error' => 'caliber 不能為空值'
            ]);
        }
        if ($company == null)
        {
            return response()->json([
                'status' => -4,
                'error' => 'company 不能為空值'
            ]);
        }
        $gun->gun_name = $request->input('gun_name');
        $gun->gun_type = $request->input('gun_type');
        $gun->caliber = $request->input('caliber');
        $gun->company = $request->input('cid');
        if ($gun->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'error' => '更新失敗'
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $gun = Gun::find($request->input('id'));

        if ($gun == null)
        {
            return response()->json([
                'status' => 0,
                'error' => '沒有此筆資料可刪除'
            ]);
        }
        if ($gun->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
