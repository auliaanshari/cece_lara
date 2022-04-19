<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailGame;
use App\Models\Game;
use App\Models\Team;
use DataTables;

class DetailGameController extends Controller
{
    public function data(){
        $detail_game = DetailGame::with('game', 'team')->where('game_id',1)->get();
        return $detail_game->toJson();
    }
}
