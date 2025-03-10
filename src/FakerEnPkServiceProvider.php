<?php

namespace Xefi\Faker\EnPk;

use Xefi\Faker\EnPk\Extensions\ColorsExtension;
use Xefi\Faker\EnPk\Extensions\CompanyExtension;
use Xefi\Faker\EnPk\Extensions\FinancialExtension;
use Xefi\Faker\EnPk\Extensions\PersonExtension;
use Xefi\Faker\EnPk\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerEnPkServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            ColorsExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            TextExtension::class,
        ]);
    }
}
