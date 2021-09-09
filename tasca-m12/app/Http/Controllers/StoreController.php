<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:2 | max:50',
            'coach' => 'min:2|max:70',
            'total_score' => 'required',
            'stadium' => 'max:255',
            'shield' => 'min:1|max:7',
        ]);

        $team = Team::where('id', $request->get('id'))->first();

        if ($team !== null) {
            $team->name = $request->get('name');
            $team->coach = $request->get('coach');
            $team->town = $request->get('town');
            $team->total_score = $request->get('total_score');
            $team->stadium = $request->get('stadium');
            $team->updated_at = date('Y-m-d');
            $team->shield = $request->get('shield');


            $team->save();
            return redirect('/show/' . $team->id);
        } else {
            return redirect('/home');
        }


    }

}

