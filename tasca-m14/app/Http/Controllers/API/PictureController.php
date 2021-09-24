<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{

    public function create(Request $request)
    {
        //$picture = new Picture();
        $picture = Picture::create([
            'name' => $request->get('name'),
            'author' => $request->get('author'),
            'price' => $request->get('price'),
            'updated_at' => date('Y-m-d'),
            'shop_id' => $request->get('shop_id'),
        ]);

        return response()->json([
            'success' => true, 'picture' => $picture], 200);
    }

    public function list()
    {
        $pictures = Picture::all();
        //return response(json(compact('shops')));
        return response()->json([
            'success' => true, 'picture' => $pictures], 200);
    }

}

