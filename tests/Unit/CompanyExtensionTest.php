<?php

namespace Xefi\Faker\EnPk\Tests\Unit;

use Random\Randomizer;
use Xefi\Faker\Container\Container;
use Xefi\Faker\EnPk\Extensions\CompanyExtension;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new \ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testNtn()
    {
        $faker = new Container(false);

        for ($i = 0; $i < 1000; $i++) {
            $result = $faker->ntn();

            $this->assertMatchesRegularExpression('/^\d{8}$/', $result);
        }
    }

    public function testCompany()
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing(
            $this->companies,
            $results
        );
    }
}
