<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    protected array $safeColorNames = [
        'Black', 'White', 'Red', 'Blue', 'Yellow',
        'Green', 'Orange', 'Brown', 'Purple', 'Pink',
        'Gray', 'Maroon', 'Cyan', 'Teal', 'Lime',
    ];

    protected array $colorNames = [
        'Black', 'White', 'Red', 'Blue', 'Yellow',
        'Green', 'Orange', 'Brown', 'Purple', 'Pink',
        'Gray', 'Maroon', 'Cyan', 'Teal', 'Lime',
        'MehndiGreen', 'Saffron', 'Indigo', 'Turquoise',
        'Vermilion', 'JadeGreen', 'DesertSand', 'Ivory',
        'CharcoalGray', 'BrickRed', 'LotusPink', 'CoconutWhite',
        'MangoYellow', 'RubyRed', 'EmeraldGreen', 'RoyalBlue',
        'Copper', 'Bronze', 'Silver', 'Gold',
        'Burgundy', 'Terracotta', 'MustardYellow', 'ClayBrown',
        'DeepMagenta', 'Peach', 'Coral', 'Lavender', 'Aqua', 'Periwinkle',
    ];
}
