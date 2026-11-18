<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+92';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'en_PK';
    }

    protected array $landlineFormats = [
        '21{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '42{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '51{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '61{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '91{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
    ];

    protected array $cellFormats = [
        '30{d}{separator}{d}{d}{d}{d}{d}{d}{d}',
        '31{d}{separator}{d}{d}{d}{d}{d}{d}{d}',
        '32{d}{separator}{d}{d}{d}{d}{d}{d}{d}',
        '33{d}{separator}{d}{d}{d}{d}{d}{d}{d}',
        '34{d}{separator}{d}{d}{d}{d}{d}{d}{d}',
    ];

    /**
     * Generate a phone number, keeping a separator between the indicator and the number.
     *
     * @param string|null $format
     * @param string      $separator
     * @param string|null $prefix
     *
     * @return string
     */
    public function phoneNumber(?string $format = null, string $separator = '', ?string $prefix = null): string
    {
        if ($prefix === $this->indicator) {
            $prefix .= $separator;
        }

        return parent::phoneNumber($format, $separator, $prefix);
    }
}
