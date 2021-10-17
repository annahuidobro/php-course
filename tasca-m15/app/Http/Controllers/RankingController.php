<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;

class RankingController extends Controller
{
    public function ranking()
    {
        $games = Game::all();
        $sumSuccess = 0;
        $userTotalPlays = 0;
        $totalsuccessfulgames = 0;
        foreach ($games as $game) {
            ++$userTotalPlays;
            if ($game->success === 1) {
                ++$sumSuccess;
            }
        }
        if ($userTotalPlays !== 0) {
            $totalsuccessfulgames = ($sumSuccess / $userTotalPlays) * 100;
        }

        return response()->json(
            [
                'success' => true, 'total_average' => round($totalsuccessfulgames, 2), 'sum_success' => $sumSuccess, 'total_plays' => $userTotalPlays,
            ],
            200
        );
    }

    public function loser()
    {
        $users = User::all();
        $loser = 0;
        $userSuccessfulGames = [];

        foreach ($users as $user) {
            $games = Game::where('user_id', $user->id)->get();
            $sumSuccess = 0;
            $userTotalPlays = 0;
            foreach ($games as $game) {
                if ($game->success === 1) {
                    ++$sumSuccess;
                }
                ++$userTotalPlays;
            }
            if ($userTotalPlays !== 0) {
                $userSuccessfulGames[$user->id] = ($sumSuccess / $userTotalPlays) * 100;
            } else {
                $userSuccessfulGames[$user->id] = 0;
            }
        }

        $miniumResult = 101;
        $loser = null;
        foreach ($userSuccessfulGames as $user => $result) {
            if ($result < $miniumResult) {
                $miniumResult = $result;
                $loser = $user;
            }
        }

        return response()->json(
            [
                'success' => true, 'loser_player' => $loser, 'loser_succes' => $miniumResult,
            ],
            200
        );
    }

    public function winner()
    {
        $users = User::all();
        $loser = 0;
        $userSuccessfulGames = [];

        foreach ($users as $user) {
            $games = Game::where('user_id', $user->id)->get();
            $sumSuccess = 0;
            $userTotalPlays = 0;
            foreach ($games as $game) {
                if ($game->success === 1) {
                    ++$sumSuccess;
                }
                ++$userTotalPlays;
            }
            if ($userTotalPlays !== 0) {
                $userSuccessfulGames[$user->id] = ($sumSuccess / $userTotalPlays) * 100;
            } else {
                $userSuccessfulGames[$user->id] = 0;
            }
        }
        $maximResult = 0;
        $player = null;
        foreach ($userSuccessfulGames as $user => $result) {
            if ($result > $maximResult) {
                $maximResult = $result;
                $player = $user;
            }
        }

        return response()->json(
            [
                'success' => true, 'winner_player' => $player, 'percent_succes_winner' => $maximResult,
            ],
            200
        );
    }
}
