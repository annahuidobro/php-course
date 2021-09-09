<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Matches as TeamMatch;
use Illuminate\Http\Request;

class StoreMatchController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'local_team_id'=> 'min:1',
            'local_goals'=> 'min:1 | max:50',
            'visitor_team_id'=> 'min:1',
            'visitor_goals'=> 'min:1 | max:50',
            'date'=> 'required'
        ]);

        $match = Matches::where('id', $request->get('id'))->first();

        if ($match !== null) {
            $match->local_team_id = $request->get('local_team_id');
            $match->local_goals = $request->get('local_goals');
            $match->visitor_team_id = $request->get('visitor_team_id');
            $match->visitor_goals = $request->get('visitor_goals');
            $match->updated_at = date('Y-m-d');


            $match->save();

            return redirect('/home');
        }


    }

}

