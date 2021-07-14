<?php

namespace App\Http\Controllers;

class ShowEditBookController extends Controller
{
    public function __invoke(string $id = null)
    {
        $book = [
            'name' => 'Pitagoras book',
            'author' => 'Pitagoras',
            'publication_date' => '2003-02-24',
            'abstract' => 'This is the Pitagoras life book.',
        ];

        return view('catalog.edit', [
            'book' => $book,
        ]);
    }
}
