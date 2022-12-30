<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'username',
        'NIK',
        'address',
        'phone',
        'jk',
        'age',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
