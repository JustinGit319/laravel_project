<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    use HasFactory;
    protected $fillable=[
        'gun_name',
        'gun_type',
        'caliber',
        'company',
        'created_at',
        'updated_at'
    ];

//    public function scopeGetAllData($query){
//        $query->join('companies', 'guns.company', '=', 'companies.id')
//            ->orderBy('guns.id')
//            ->select(
//                'guns.id',
//                'guns.gun_name',
//                'guns.gun_type',
//                'guns.caliber',
//                'companies.company_name',
//            );
//    }
    public function company(){
        return $this->belongsTo('App\Models\Company', 'company', 'id');
    }

    public function scopeGetAllGunType($query){
        $query->select('guns.gun_type')->distinct();
    }

    public function scopefilter_guntype($query, $type){
        $query->where('gun_type', '=', $type)
            ->orderBy('guns.id');
    }
}
