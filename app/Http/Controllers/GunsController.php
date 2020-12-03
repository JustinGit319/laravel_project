<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\gun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GunsController extends Controller
{
    public function index(){
        $guns = DB::table('guns')
            ->join('companies', 'guns.company', '=', 'companies.id')
            ->orderBy('guns.id')
            ->select(
                'guns.id',
                'guns.gun_name',
                'guns.gun_type',
                'guns.caliber',
                'companies.company_name',
            )->get();
        return view('guns.index',['guns'=>$guns]);
    }

    public function creat(){
        return view('guns.create');
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

    public function store(Request $request)
    {
        $gun = new Gun();
        $gun->gun_name = $request->input('gun_name');
        $gun->gun_type = $request->input('gun_type');
        $gun->caliber = $request->input('caliber');
        $gun->company = $request->input('company');
        $gun->save();

        return redirect('guns');
    }

    public function update($id, Request $request)
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
}
