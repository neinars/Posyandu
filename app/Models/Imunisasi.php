<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_imunisasi',
        'keterangan'
    ];

    public function penimbangans(){
        return $this->hasMany(Penimbangan::class);
    }
}
