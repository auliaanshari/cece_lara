<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "nilai";

    protected $fillable = [
        'team_id', 
        'soal_id',
        'nilai'
    ];

    public function soal(){
        return $this->belongsTo(Soal::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
