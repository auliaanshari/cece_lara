<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "point";

    protected $fillable = [
        'game_id',
        'team_id', 
        'soal_id',
        'point'
    ];

    public function soal(){
        return $this->belongsTo(Soal::class, 'soal_id');
    }

    public function team(){
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function game(){
        return $this->belongsTo(Game::class, 'game_id');
    }
}
