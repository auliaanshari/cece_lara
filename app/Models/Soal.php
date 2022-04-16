<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "soal";

    protected $fillable = [
        'id', 
        'soal',
        'jawaban',
        'bobot',
        'kategori_id',
        'jenis_id',
        'status_id'
    ];

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }

    public function kategori_soal(){
        return $this->belongsTo(KategoriSoal::class, 'kategori_id');
    }

    public function jenis_soal(){
        return $this->belongsTo(JenisSoal::class, 'jenis_id');
    }

    public function status_soal(){
        return $this->belongsTo(StatusSoal::class, 'status_id');
    }
}
