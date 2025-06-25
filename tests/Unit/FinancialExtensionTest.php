<?php

namespace Xefi\Faker\EnPk\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        for ($i = 0; $i < 100; $i++) {
            $iban = $this->faker->iban();

            $this->assertEquals(28, strlen($iban));
            $this->assertStringStartsWith('PK', $iban);
            $this->assertTrue(Iban::isValid($iban));
        }
    }

    public function testIfsc()
    {
        for ($i = 0; $i < 100; $i++) {
            $ifsc = $this->faker->ifsc();

            $this->assertEquals(11, strlen($ifsc));
            $this->assertMatchesRegularExpression('/^[a-zA-Z]{4}\d{7}$/', $ifsc);
        }
    }
}
