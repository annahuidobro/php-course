<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequestController extends Controller
{

    public function __invoke(Request $request)
    {
        $metodo = $request->method();
        if ($request->isMethod('post')) {
            echo "receiving via post";
        } else {
            echo "receiving via get";
        }
        $title = $request->input("title", 'Title');
        if ($request->has("Title")) {
            echo "Title is found";
        }
        $author = $request->input("author", 'Author');
        if ($request->has("Author")) {
            echo "Author is found";
        }
        $publication_date = $request->input("publication_date", "0001-01-01");
        if ($request->has("publication-date")) {
            echo "Publication date is found";
        }
        $abstract = $request->input('abstact', 'this is the abstract of the book');
        if ($request->has("abstract")) {
            echo "Abstract is found";
        }
        $all = $request->all();
        //$request->flash();
        return redirect('/public/catalog/show/$title')-> withInput();
    }
}
