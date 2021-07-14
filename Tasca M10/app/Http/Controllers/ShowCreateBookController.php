<?php

namespace App\Http\Controllers;

class ShowCreateBookController extends Controller
{
    public function __invoke()
    {
        return view('catalog.create');
    }
}
