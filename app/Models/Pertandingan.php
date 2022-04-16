<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "pertandingan";

    protected $fillable = [
        'id', 
        'pertandingan_ke',
        'babak_id'
    ];

    public function score(){
        return $this->hasMany(Score::class);
    }

    public function babak(){
        return $this->belongsTo(Babak::class);
    }
}
