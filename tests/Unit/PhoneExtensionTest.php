<?php

namespace Xefi\Faker\EnPk\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0((21|42)\d{8}|(51|61|91)\d{7}|3[0-4]\d{8})$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0((21|42)-\d{4}-\d{4}|(51|61|91)-\d{3}-\d{4})$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^03[0-4]\d \d{7}$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+92((21|42)\d{8}|(51|61|91)\d{7}|3[0-4]\d{8})$/', $this->faker->indicatoredPhoneNumber());
        }
    }

    public function testIndicatorIsSeparatedFromTheNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertStringStartsWith('+92 ', $this->faker->spacedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+92-', $this->faker->dashedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+92.', $this->faker->dottedIndicatoredPhoneNumber());
            $this->assertMatchesRegularExpression('/^\+92\d+$/', $this->faker->indicatoredPhoneNumber());
        }
    }
}
