<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "score";

    protected $fillable = [
        'id', 
        'pertandingan_id',
        'team_id',
        'nilai',
        'bonus',
        'total'
    ];

    public function pertandingan(){
        return $this->belongsTo(Pertandingan::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
