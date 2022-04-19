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
        $detail_game = DetailGame::with( 'team', 'game', 'game.babak')->where('game_id',13)->get();
        return $detail_game->toJson();
    }

    public function create(Request $request){
        $create = new DetailGame();
        $create->game_id = $request->game_input;
        $create->team_id = $request->teamA_input;
        $create->save();
        $create1 = new DetailGame();
        $create1->game_id = $request->game_input;
        $create1->team_id = $request->teamB_input;
        $create1->save();
        $create2 = new DetailGame();
        $create2->game_id = $request->game_input;
        $create2->team_id = $request->teamC_input;
        $create2->save();
        $create3 = new DetailGame();
        $create3->game_id = $request->game_input;
        $create3->team_id = '999';
        $create3->save();
        
    }

    public function update(Request $request, $id){
        $update = DetailGame::find($id);
        $update->game_ke = $request->game_input;
        $update->babak_id = $request->babak_input;
        $update->save();
    }

    public function delete($id){
        DetailGame::where('id', $id)->delete();
    }
}
