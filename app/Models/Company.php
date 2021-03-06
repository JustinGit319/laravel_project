<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'company_name',
        'country',
        'created_at',
        'updated_at'
    ];

    public function guns()
    {
        return $this->hasMany('App\Models\Gun', 'company');
    }

    public function delete()
    {
        $this->guns()->delete();
        return parent::delete();
    }

    public function scopeGetCompany($query){
        $query->select('id', 'company_name')
            ->orderBy('id', 'asc');
    }
}
