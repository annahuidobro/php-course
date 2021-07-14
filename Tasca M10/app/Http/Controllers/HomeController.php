<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
   public function __invoke()
   {
       // TODO: Implement __invoke() method.
       return "Welcome to Library home page";
   }
}
