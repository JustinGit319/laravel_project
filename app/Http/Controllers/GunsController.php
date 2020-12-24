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
        $guns = Gun::all();
        $models = Gun::GetAllGunType()->get();

        $data = [];
        foreach($models as $model){
            $data[$model->gun_type] = $model->gun_type;
        }
        return view('guns.index',['guns'=>$guns, 'guntypes' => $data]);
    }

    public function creat(){
        $companies = DB::table('companies')
            ->select('id', 'company_name')
            ->orderBy('id', 'asc')->get();

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
        $companies = DB::table('companies')
            ->select('id', 'company_name')
            ->orderby('id', 'asc')
            ->get();

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
        Gun::FindOrFail($id)
            ->update(
                ['gun_name' => $request->input('gun_name')],
                ['gun_type' => $request->input('gun_type')],
                ['caliber' => $request->input('caliber')],
                ['company' => $request->input('company')],
            );
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
}
