<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bidan_id',
        'tgl_pemeriksaan',
        'keluhan',
        'berat_badan',
        'tekanan_darah',
        'tinggi_badan',
        'usia_kehamilan',
        'tinggi_fundus',
        'letak_janin',
        'denyut_janin',
        'keterangan'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bidan(){
        return $this->belongsTo(Bidan::class);
    }
    public function laporan(){
        return $this->hasOne(Laporan::class);
    }
}
