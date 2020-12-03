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
}
