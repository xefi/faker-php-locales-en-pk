<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    protected $provinces = [
        'Punjab' => 'PB',
        'Sindh' => 'SD',
        'Khyber Pakhtunkhwa' => 'KP',
        'Balochistan' => 'BL',
        'Gilgit-Baltistan' => 'GB',
        'Azad Kashmir' => 'AJK',
        'Islamabad Capital Territory' => 'ICT',
    ];

    protected $streetSuffixes = [
        'Road', 'Street', 'Avenue', 'Lane', 'Circle', 'Park', 'Boulevard', 'Drive', 'Path', 'Gali', 'Marg',
        'Chowk', 'Nagar', 'Vihar', 'Pur', 'Bagh', 'Peth', 'Market', 'Chowraha', 'Place', 'Hills',
    ];

    protected $streetNames = [
        'Jinnah', 'Iqbal', 'Quaid-e-Azam', 'Shahrah-e-Faisal', 'Liaquat', 'Fatima', 'Gulistan', 'Shahrah-e-Pakistan',
        'Tariq', 'Abdullah', 'Garden', 'University', 'Allama', 'Tipu', 'Murree', 'Kashmir',
    ];

    protected $cities = [
        'Karachi', 'Lahore', 'Faisalabad', 'Rawalpindi', 'Multan', 'Gujranwala', 'Hyderabad', 'Peshawar', 'Islamabad', 'Quetta',
        'Bahawalpur', 'Sargodha', 'Sialkot', 'Sukkur', 'Larkana', 'Sheikhupura', 'Jhang', 'Rahim Yar Khan', 'Gujrat', 'Mardan',
    ];

    public function province(): string
    {
        return $this->pickArrayRandomKey($this->provinces);
    }

    public function provinceCode(): string
    {
        return $this->pickArrayRandomElement($this->provinces);
    }

    public function houseNumber(): int
    {
        return $this->randomizer->getInt(1, 500);
    }

    public function streetName(): string
    {
        $streetName = $this->pickArrayRandomElement($this->streetNames);
        $streetSuffix = $this->pickArrayRandomElement($this->streetSuffixes);
        return sprintf('%s %s', $streetName, $streetSuffix);
    }

    public function sectorBlock(): string
    {
        $sector = chr($this->randomizer->getInt(ord('A'), ord('G')));
        $block = $this->randomizer->getInt(1, 50);
        return sprintf('%s-%d', $sector, $block);
    }

    public function streetAddress(): string
    {
        return sprintf('%s %s', $this->sectorBlock(), $this->streetName());
    }

    public function postalCode(): string
    {
        return sprintf('%05d', $this->randomizer->getInt(10000, 99999));
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    public function fullAddress(): string
    {
        return sprintf('%s %s, %s %s', $this->sectorBlock(), $this->streetName(), $this->city(), $this->provinceCode());
    }
}
