<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreBookController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:50',
            'author' => 'required',
            'publication_date' => 'required | date',
            'abstract' => 'required | max:255',
        ]);
        echo 'Book Saved';
    }
}
