<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function create(Request $request)
    {
        $shop = Shop::create([
        'name' => $request->get('name'),
        'capacity' => $request->get('capacity'),
        'updated_at' => date('Y-m-d'),
        ]);

        $shop->save();

        return response()->json([
            'success' => true, 'shop' => $shop], 200);
    }

    public function index()
    {
        $shops = Shop::all();
        //return response(json(compact('shops')));
        return response()->json([
            'success' => true, 'shops' => $shops], 200);
    }

}

