<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    const SUCCESSFUL_RESULT = 7;

    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'updated_at' => date('Y-m-d'),
        ]);

        return response()->json([
            'success' => true, 'user' => $user], 200);
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->get('id'))->first();

        if ($user !== null) {
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = $request->get('password');
            $user->updated_at = date('Y-m-d');
        }

        $user->save();

        return response()->json([
            'success' => true, 'user' => $user], 200);

    }

    public function list_players()
    {
        $users = User::all();

        $userSuccessfulGames = [];

        foreach ($users as $user) {
            $games = Game::where('user_id', $user->id)->get();
            $sumSuccess = 0;
            $userTotalPlays = 0;
            foreach ($games as $game) {
                if ($game->success === 1) {
                    $sumSuccess++;
                }
                $userTotalPlays++;
            }

            if ($userTotalPlays !== 0) {
                $userSuccessfulGames[$user->id] = ($sumSuccess / $userTotalPlays)*100;
            } else {
                $userSuccessfulGames[$user->id] = 0;
            }

        }

        return response()->json(
            [
                'success' => true, '% sucess' => $userSuccessfulGames
            ],
            200
        );

    }

    public function list_games(string $id)
    {
        $i = 1;
        $games = Game::where('user_id', $id)->get();
        $user_resoults = [];
        foreach ($games as $game) {
            $user_resoults[$i] = $game->dice1 + $game->dice2;
            $i++;
        }
        return response()->json([
            'success' => true,
            'user' => $id,
            'results' => $user_resoults
        ]);
    }
}
