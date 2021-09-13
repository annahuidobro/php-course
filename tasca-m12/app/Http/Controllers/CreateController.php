<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class CreateController extends Controller
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

        $team = new Team();

        $team->name = $request->get('name');
        $team->coach = $request->get('coach');
        $team->town = $request->get('town');
        $team->total_score = $request->get('total_score');
        $team->stadium = $request->get('stadium');
        $team->updated_at = date('Y-m-d');
        $team->shield = $request->get('shield');

        $team->save();


        return redirect('/show/' . $team->id);
    }

}



