<?php

require_once __DIR__ . '/../Helper/SingletonTrait.php';
require_once __DIR__ . '/../Entity/Site.php';
require_once __DIR__ . '/../Entity/Quote.php';
require_once __DIR__ . '/../Entity/User.php';

class ApplicationContext
{
    use TemplateManager\Helper\SingletonTrait;

    /**
     * @var Site
     */
    private $currentSite;
    /**
     * @var User
     */
    private $currentUser;

    protected function __construct()
    {
        $faker = \Faker\Factory::create();
        $this->currentSite = new Site($faker->randomNumber(), $faker->url);
        $this->currentUser = new User($faker->randomNumber(), $faker->firstName, $faker->lastName, $faker->email);
    }

    public function getCurrentSite()
    {
        return $this->currentSite;
    }

    public function getCurrentUser()
    {
        return $this->currentUser;
    }
}
