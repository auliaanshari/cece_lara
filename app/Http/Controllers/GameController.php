<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Game;
Use App\Models\Babak;
use DataTables;

class GameController extends Controller
{
    public function data(){
        $game = Game::with('babak');
        return DataTables::of($game)->toJson();
    }

    public function create(Request $request){
        $create = new Game();
        $create->game_ke = $request->game_input;
        $create->babak_id = $request->babak_input;
        $create->save();
    }

    public function update(Request $request, $id){
        $update = Game::find($id);
        $update->game_ke = $request->game_input;
        $update->babak_id = $request->babak_input;
        $update->save();
    }

    public function delete($id){
        Game::where('id', $id)->delete();
    }

    public function combo_game()
    {
        $game = Game::select("*")->with('babak')->orderBy('game_ke','desc')->get();
        return $game->toJson();
    }
}
