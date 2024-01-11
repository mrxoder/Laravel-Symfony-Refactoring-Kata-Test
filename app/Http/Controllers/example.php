<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class example extends Controller
{
    public function index()
    {
        $output = "it work";
        return view("example", ["output"=>$output]);
    }
}
