<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_laporan',
        'keterangan',
        'is_approve',
        'approve_by',
        'approve_date',
        'user_id',
        'penimbangan_id',
        'pemeriksaan_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function penimbangan(){
        return $this->belongsTo(Penimbangan::class);
    }
    public function pemeriksaan(){
        return $this->belongsTo(Pemeriksaan::class);
    }
}
