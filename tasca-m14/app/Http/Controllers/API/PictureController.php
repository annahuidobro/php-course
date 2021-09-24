<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PictureController extends Controller
{

    public function create(Request $request)
    {
        $picture = new Picture();

        $picture->name = $request->get('name');
        $picture->author= $request->get('author');
        $picture->price= $request->get('price');
        $picture->updated_at = date('Y-m-d');
        $picture->shop_id = $request->get('shop_id');

        $picture->save();

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

