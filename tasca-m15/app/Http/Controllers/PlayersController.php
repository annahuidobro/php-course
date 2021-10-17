<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
            'success' => true, 'user' => $user, ], 200);
    }

    public function update(Request $request)
    {
        $user = User::where('id', $request->get('id'))->first();

        if ($user !== null) {
            $user->name = $request->get('name');
        }

        $user->save();

        return response()->json([
            'success' => true, 'user new name' => $user->name, ], 200);
    }

    public function list_players()
    {
        $users = User::all();

        $userSuccessfulGames = [];

        foreach ($users as $user) {
            $games = Game::where('user_id', $user->id)->get();
            $sumSuccess = 0;
            $userTotalPlays = 0;
            $lastGame = Carbon::createFromTimestamp(0);

            foreach ($games as $game) {
                if ($game->success === 1) {
                    ++$sumSuccess;
                }
                ++$userTotalPlays;

                if ($game->created_at->gt($lastGame)) {
                    $lastGame = $game->created_at;
                }
            }

            if ($userTotalPlays !== 0) {
                $ranking = $sumSuccess / $userTotalPlays * 100;
            } else {
                $ranking = 0;
            }

            $userSuccessfulGames[$user->id] = [
                'id' => $user->id,
                'name' => $user->name,
                'tries' => $userTotalPlays,
                'ranking' => $ranking,
                'last_game' => $lastGame->format('M d Y'),
            ];
        }

        return response()->json(
            [
                'success' => true, 'users' => $userSuccessfulGames,
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
            ++$i;
        }

        return response()->json([
            'success' => true,
            'user' => $id,
            'resoults' => $user_resoults,
        ]);
    }
}
