<?php

namespace App\Http\Controllers;

require_once __DIR__."/../../TemplateManager.php";
require_once __DIR__ . '/../../TemplateManager/Entity/Quote.php';
require_once __DIR__ . '/../../TemplateManager/Entity/Template.php';
//require_once __DIR__ . '/../../TemplateManager/Entity/User.php';

use Illuminate\Http\Request;
use Faker\Factory;
use TemplateManager\Entity\Template;
use TemplateManager\Entity\Quote;
use App\TemplateManager;


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
