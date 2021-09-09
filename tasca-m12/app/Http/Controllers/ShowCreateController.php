<?php

namespace App\Http\Controllers;

class ShowCreateController extends Controller
{
    public function __invoke()
    {
        return view('show-create');
    }
}
