<?php

require_once __DIR__ . '/Repository.php';
require_once __DIR__ . '/../Helper/SingletonTrait.php';
require_once __DIR__ . '/../Entity/Destination.php';

use Faker\Factory;

class DestinationRepository implements Repository
{
    use TemplateManager\Helper\SingletonTrait;
    /**
     * @param int $id
     *
     * @return Destination
     */
    public function getById($id)
    {
        $generator    = Faker\Factory::create();
        $generator->seed($id);

        return new Destination(
            $id,
            $generator->country,
            'en',
            $generator->slug()
        );
    }
}
