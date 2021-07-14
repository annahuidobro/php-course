<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    /*   public function __invoke()
       {
           // TODO: Implement __invoke() method.
           return "This is the books catalog: ";
       }
    */


    public function list()
    {
        return "This is the catalog main page";
    }

    public function show($id = null)
    {
        return "This is the description of $id book";
    }

    public function create()
    {
        return "Create a new Book tab";
    }

    public function edit($id = null)
    {
        return "Edit $id Book tab";
    }
}
