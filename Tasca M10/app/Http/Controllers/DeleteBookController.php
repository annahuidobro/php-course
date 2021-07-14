<?php

namespace App\Http\Controllers;

class DeleteBookController extends Controller
{
    public function __invoke(string $id)
    {
        $book = ['name' => $id];
        return view('catalog.delete', ['book' => $book]);
    }
}
