<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "game";

    protected $fillable = [
        'id', 
        'game_ke',
        'babak_id'
    ];

    public function score(){
        return $this->hasMany(Score::class);
    }

    public function babak(){
        return $this->belongsTo(Babak::class, 'babak_id');
    }
}
