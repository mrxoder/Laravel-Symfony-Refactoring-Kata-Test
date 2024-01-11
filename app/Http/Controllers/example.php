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
        
        $template = new Template( 1,
        'Your delivery to [quote:destination_name]',
        "
        Hi [user:first_name],

        Thanks for contacting us to deliver to [quote:destination_name].

        Regards,

        SAYNA team
        ");
        
        $templateManager = new TemplateManager();
        
        $message = $templateManager->getTemplateComputed( $template,[ 'quote' => new Quote($faker->randomNumber(), $faker->randomNumber(), $faker->randomNumber(), $faker->date()) ] );
        
        $output = $message->subject . "\n" . $message->content;

        return view("example", ["output"=>$output]);
    }
}
