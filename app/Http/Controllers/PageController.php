<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($domain, $page)
    {
        return "Welcome to '$domain' , '$page'";
    }
}
