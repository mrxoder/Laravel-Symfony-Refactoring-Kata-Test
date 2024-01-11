<?php

namespace App\Http\Controllers;

require_once __DIR__."/../../TemplateManager.php";

use Illuminate\Http\Request;
use Faker\Factory;


class example extends Controller
{
    public function index()
    {
        $faker = Factory::create();
        
        $output = " it work ";
        return view("example", ["output"=>$output]);
    }
}
