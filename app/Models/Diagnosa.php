<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Diagnosa extends Model
{
    use SoftDeletes;
    
    public $incrementing = false;

    public $table = 'diagnosa';
    
    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'pasien_id',
        'kd_penyakit',
        'tanggal_konsultasi',
    ];

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'pasien_id', 'id');
    }

    public function penyakit()
    {
        return $this->belongsTo('App\Models\Penyakit', 'kd_penyakit', 'kd_penyakit');
    }
}
