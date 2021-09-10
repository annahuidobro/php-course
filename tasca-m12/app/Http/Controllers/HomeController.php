<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = DB::table('teams');

        if ($request->get('stadium') !== null && $request->get('stadium') !== 'NULL') {
            $query->where('stadium', 'like', '%' . $request->get('stadium') . '%');
        }

        if ($request->get('total_score') !== null && $request->get('total_score') !== 'NULL') {
            $query->where('total_score', '=', $request->get('total_score'));
        }

        if ($request->get('town') !== null) {
            $query->where('town', 'like', '%' . $request->get('town'). '%');
        }

        if ($request->get('name') !== null) {
            $query->where('name', 'like','%' . $request->get('name') . '%');
        }

        if ($request->get('coach') !== null) {
            $query->where('coach', 'like', '%' . $request->get('coach') . '%');
        }

        $teams = $query->get();
        $arrayTeams = [];

        foreach (Team::all() as $team) {
            $arrayTeams[$team->id] = $team;
        }

        return view('home', [
            'teams' => $teams,
            'arrayTeams' => $arrayTeams,
            'matches'=> Matches::all()
        ]);
    }
}
