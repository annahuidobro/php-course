<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateBookController extends Controller
{
    public function __invoke(Request $request)
    {
        $book = [
            'name' => $request->get('name'),
            'author' => $request->get('author'),
            'publication_date' => $request->get('publication_date'),
            'abstract' => $request->get('abstract'),
        ];

        return redirect()->route('catalog');

    }
}
