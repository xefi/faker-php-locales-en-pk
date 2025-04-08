<?php

namespace Xefi\Faker\EnPk\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\EnPk\Extensions\AddressExtension;

final class AddressExtensionTest extends TestCase
{
    protected array $provinces = [];
    protected array $streetNames = [];
    protected array $streetSuffixes = [];
    protected array $cities = [];

    protected function setUp(): void
    {
        parent::setUp();

        $addressExtension = new AddressExtension(new Randomizer());
        $this->cities = (new ReflectionClass($addressExtension))->getProperty('cities')->getValue($addressExtension);
        $this->provinces = (new ReflectionClass($addressExtension))->getProperty('provinces')->getValue($addressExtension);
        $this->streetNames = (new ReflectionClass($addressExtension))->getProperty('streetNames')->getValue($addressExtension);
        $this->streetSuffixes = (new ReflectionClass($addressExtension))->getProperty('streetSuffixes')->getValue($addressExtension);
    }

    public function testProvince(): void
    {
        $results = [];
        for ($i = 0; $i < count(array_keys($this->provinces)); $i++) {
            $results[] = $this->faker->unique()->province();
        }

        $this->assertEqualsCanonicalizing(array_keys($this->provinces), $results);
    }

    public function testProvinceCode(): void
    {
        $results = [];
        for ($i = 0; $i < count(array_values($this->provinces)); $i++) {
            $results[] = $this->faker->unique()->provinceCode();
        }

        $this->assertEqualsCanonicalizing(array_values($this->provinces), $results);
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $houseNumber = $this->faker->unique()->houseNumber();
            $this->assertIsInt($houseNumber);
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(500, $houseNumber);
        }
    }

    public function testStreetName(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetName();

            [$streetName, $streetSuffix] = explode(' ', $result);
            $this->assertContains($streetName, $this->streetNames);
            $this->assertContains($streetSuffix, $this->streetSuffixes);
        }
    }

    public function testSectorBlock() {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->sectorBlock();

            $this->assertMatchesRegularExpression('/^[A-G]-\d{1,2}$/', $result);
        }
    }

    public function testStreetAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetAddress();

            [$sectorBlock, $streetName, $streetSuffix] = explode(' ', $result);

            $this->assertMatchesRegularExpression('/^[A-G]-\d{1,2}$/', $sectorBlock);

            $this->assertContains($streetName, $this->streetNames);
            $this->assertContains($streetSuffix, $this->streetSuffixes);
        }
    }

    public function testPostalCode(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $postalCode = $this->faker->unique()->postalCode();

            $this->assertMatchesRegularExpression('/^\d{5}$/', $postalCode);
        }
    }

    public function testCity(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cities); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing($this->cities, $results);
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $address = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression('/^[A-Z]-\d{1,2} [\w -]+, [\w -]+ \w{2,3}$/', $address);
        }
    }
}
