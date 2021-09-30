<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    const SUCCESSFUL_RESULT = 7;

    public function play(Request $request, string $id)
    {
        $dice1=random_int(1, 12);
        $dice2=random_int(1, 12);
        $game = Game::create([
            'user_id' => $id,
            'dice1' => $dice1,
            'dice2' => $dice2,
            'success'=> $dice1+$dice2 == self::SUCCESSFUL_RESULT,
            'updated_at' => date('Y-m-d'),
        ]);

        if ($game->dice1 + $game->dice2 === self::SUCCESSFUL_RESULT) {
            $success = true;
        } else {
            $success = false;
        }

        return response()->json(
            [
                'success' => $success,
                'game' => $game
            ],
            200);
    }

    public function delete(string $id)
    {
        $games = Game::where('user_id', $id)->get();

        foreach ($games as $game) {
            $game->delete();
        }
        return response()->json([
            'success' => true, 200]);
    }


}


