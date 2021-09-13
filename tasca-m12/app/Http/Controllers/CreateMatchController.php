<?php

namespace App\Http\Controllers;

use App\Models\Matches as TeamMatch;
use Illuminate\Http\Request;

class CreateMatchController extends Controller
{
    public function __invoke(Request $request)
    {

        $this->validate($request, [
            'local_team_id' => 'min:1',
            'local_goals' => 'min:1 | max:90',
            'visitor_team_id' => 'min:1',
            'visitor_goals' => 'min:1| max:90',
            'date' => 'required'
        ]);

        $match = new TeamMatch();

        $match->local_team_id = $request->get('local_team_id');
        $match->local_goals = $request->get('local_goals');
        $match->visitor_team_id = $request->get('visitor_team_id');
        $match->visitor_goals = $request->get('visitor_goals');
        $match->date = $request->get('date');

        $match->save();


        return redirect('/home');

    }

}



