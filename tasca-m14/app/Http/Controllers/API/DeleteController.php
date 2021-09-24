<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($shopId, Request $request)
    {
        $pictures=Picture::where('shop_id',$shopId)->get();
        foreach ($pictures as $picture){
            $picture->delete();
        }

        return response()->json([
            'success' => true, 200]);
    }
}
