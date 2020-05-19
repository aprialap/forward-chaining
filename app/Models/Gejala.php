<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gejala extends Model
{
    use SoftDeletes;
    
    public $incrementing = false;

    public $table = 'gejala';
    
    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'kd_gejala',
        'gejala',
         
    ];
}
