<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'PK';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s',
                str_repeat('{l}', 4),  // Bank code (letters)
                str_repeat('{d}', 16)  // Account number
            );
        }

        return parent::iban($countryCode, $format);
    }

    public function ifsc(): string
    {
        $bankCode = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 4));
        $branchCode = $this->randomizer->getInt(1000000, 9999999);

        return sprintf('%s%07d', $bankCode, $branchCode);
    }
}
