<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relasi extends Model
{
    use SoftDeletes;
    
    public $incrementing = false;

    public $table = 'relasi';
    
    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'kd_penyakit',
        'kd_gejala',
          
    ];

    public function gejala()
    {
        return $this->belongsTo('App\Models\Gejala', 'kd_gejala', 'kd_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo('App\Models\Penyakit', 'kd_penyakit', 'kd_penyakit');
    }
}

