<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSoal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "jenis_soal";

    protected $fillable = [
        'id', 
        'jenis_soal'
    ];

    public function soal(){
        return $this->hasMany(Soal::class);
    }
}
