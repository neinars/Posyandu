<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bidan',
        'is_aktif'
    ];

    public function penimbangans(){
        return $this->hasMany(Penimbangan::class);
    }
    public function pemeriksaans(){
        return $this->hasMany(Pemeriksaan::class);
    }
}
