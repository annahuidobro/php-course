<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeMatchesController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = DB::table('matches');

        if ($request->get('local_team_id') !== null && $request->get('local_team_id') !== 'NULL') {
            $query->where('local_team_id', '=', $request->get('local_team_id'));
        }
        if ($request->get('local_goals') !== null && $request->get('local_goals') !== 'NULL') {
            $query->where('local_goals', '=', $request->get('local_goals'));
        }
        if ($request->get('visitor_team_id') !== null && $request->get('visitor_team_id') !== 'NULL') {
            $query->where('vistor_team_id', '=', $request->get('visitor_team_id'));
        }
        if ($request->get('visitor_goals') !== null && $request->get('visitor_goals') !== 'NULL') {
            $query->where('visitor_goals', '=', $request->get('visitor_goals'));
        }
        if ($request->get('date') !== null && $request->get('date') !== 'NULL') {
            $query->where('date', '=', $request->get('date'));
        }

        return view('home-matches', [
            'matches' => $query->get()
        ]);
    }
}
