<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'balita_id',
        'imunisasi_id',
        'vitamin_id',
        'bidan_id',
        'tgl_timbang',
        'usia_balita',
        'bb',
        'saran'
    ];

    public function balita(){
        return $this->belongsTo(Balita::class);
    }
    public function imunisasi(){
        return $this->belongsTo(Imunisasi::class);
    } 
    public function vitamin(){
        return $this->belongsTo(Vitamin::class);
    }
    public function bidan(){
        return $this->belongsTo(Bidan::class);
    }
    public function laporan(){
        return $this->hasOne(Laporan::class);
    }
}
