<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Babak extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "babak";

    protected $fillable = [
        'id', 
        'babak'
    ];

    public function game(){
        return $this->hasMany(Game::class);
    }
}
