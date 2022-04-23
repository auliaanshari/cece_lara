<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;
use App\Models\Soal;
use App\Models\Game;
use App\Models\Team;
use DataTables;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    public function data(){
        $point = Point::all();
        return DataTables::of($point)->toJson();
    }

    public function create(Request $request){
        $create = new Point();
        $create->game_id = $request->game_input;
        $create->team_id = $request->team_input;
        $create->soal_id = $request->soal_input;
        $create->point = $request->point_input;
        $create->save();
        $update = Soal::find($request->soal_input);
        $update->status_id = 2;
        $update->save();

    }

    public function update(Request $request, $id){
        $update = Team::find($id);
        $update->nama_team = $request->team_input;
        $update->asal_masjid = $request->asal_input;
        $update->save();
    }

    public function delete($id){
        Team::where('id', $id)->delete();
    }

    public function combo_team()
    {
        $team = Team::all();
        return $team->toJson();
    }
}
