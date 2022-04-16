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

    public function score(){
        return $this->hasMany(Score::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
