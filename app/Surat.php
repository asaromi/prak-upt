<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'nomor',
        'tgl_pengajuan',
        'semester',
        'keterangan',
        'status',
        'tgl_diambil',
        'user',
    ];

    public function users(){
        return $this->belongsTo('App\User', 'user');
    }
}
