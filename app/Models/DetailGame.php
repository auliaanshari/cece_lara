<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGame extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "detail_game";

    protected $fillable = [
        'game_id',
        'team_id',
        'nilai',
        'bonus',
        'total'
    ];

    public function game(){
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function team(){
        return $this->belongsTo(Team::class, 'team_id');
    }
}
