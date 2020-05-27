<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penyakit extends Model
{
    use SoftDeletes;
    
    public $incrementing = false;

    public $table = 'penyakit';
    
    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'kd_penyakit',
        'nama_penyakit',
        'deskripsi',
        'solusi'   
    ];

    public function relasi()
    {
        return $this->hasMany('App\Models\Relasi', 'kd_penyakit', 'kd_penyakit');
    }
}
