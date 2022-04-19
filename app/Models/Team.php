<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "team";

    protected $fillable = [
        'id', 
        'nama_team',
        'asal_masjid'
    ];

    public function detail_game(){
        return $this->hasMany(DetailGame::class);
    }

    public function point(){
        return $this->hasMany(Point::class);
    }
}
