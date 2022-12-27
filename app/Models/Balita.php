<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'nama_balita',
        'tl_balita',
        'jk',
        'nama_ibu',
        'nama_ayah',
        'panjang_badan',
        'berat_lahir',
        'lingkar_kepala'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function penimbangans(){
        return $this->hasMany(Penimbangan::class);
    }
}
