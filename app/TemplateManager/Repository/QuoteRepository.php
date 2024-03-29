<?php

namespace TemplateManager\Repository;

require_once __DIR__ . '/../Helper/SingletonTrait.php';
require_once __DIR__ . '/../Entity/Quote.php';
require_once __DIR__ . '/Repository.php';

use \TemplateManager\Entity\Quote;

class QuoteRepository implements \Repository
{
    use \TemplateManager\Helper\SingletonTrait;

    /**
     * @param int $id
     *
     * @return Quote
     */
    public function getById($id)
    {
        $generator = \Faker\Factory::create();
        $generator->seed($id);

        return new Quote(
            $id,
            $generator->numberBetween(1, 10),
            $generator->numberBetween(1, 200),
            new \DateTime()
        );
    }
}
