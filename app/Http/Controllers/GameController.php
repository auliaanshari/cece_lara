<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Game;
Use App\Models\Babak;
use DataTables;

class GameController extends Controller
{
    public function datagame(){
        $game = Game::with('babak');
        return DataTables::of($game)->toJson();
    }

    public function create(Request $request){
        $create = new Game();
        $create->babak_id = $request->babak_input;
        $create->save();
    }
}
