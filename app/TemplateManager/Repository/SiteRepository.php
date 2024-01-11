<?php



require_once __DIR__ . '/Repository.php';
require_once __DIR__ . '/../Helper/SingletonTrait.php';
require_once __DIR__ . '/../Entity/Site.php';

use Faker\Factory;

class SiteRepository implements Repository
{
    use TemplateManager\Helper\SingletonTrait;

    private $url;

    /**
     * @param int $id
     *
     * @return Site
     */
    public function getById($id)
    {
        $generator = Faker\Factory::create();
        $generator->seed($id);

        return new Site($id, $generator->url);
    }
}
