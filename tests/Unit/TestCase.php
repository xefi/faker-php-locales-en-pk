<?php

namespace Xefi\Faker\EnPk\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\EnPk\FakerEnPkServiceProvider())->boot();

        $this->faker = (new Container(false))->locale('en_PK');
    }
}
