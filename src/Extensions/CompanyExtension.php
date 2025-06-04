<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    private array $companies = [
        "Engro Corporation", "MCB Bank", "Habib Bank Limited",
        "United Bank Limited", "Pakistan State Oil", "Lucky Cement",
        "Fauji Fertilizer", "Meezan Bank", "Askari Bank",
        "Pakistan Telecommunication Company", "National Bank of Pakistan", "Dawood Hercules Corporation",
        "K-Electric", "Gul Ahmed Textile Mills", "Nishat Mills",
        "Sui Southern Gas Company", "Attock Petroleum", "Pak Suzuki Motors",
        "Millat Tractors", "Indus Motor Company", "Honda Atlas Cars Pakistan",
        "Cherat Cement", "D.G. Khan Cement", "Maple Leaf Cement",
        "Ferozsons Laboratories", "GlaxoSmithKline Pakistan", "The Searle Company",
        "Pakistan Tobacco Company", "Colgate-Palmolive Pakistan", "Unilever Pakistan",
        "Nestlé Pakistan", "Engro Foods", "Packages Limited",
        "Avanceon Limited", "TPL Corp", "Zong Pakistan",
        "Jazz Pakistan", "Telenor Pakistan", "Ufone Pakistan",
        "Careem Pakistan", "Foodpanda Pakistan", "Daraz Pakistan",
        "Bykea", "Airlift Express", "Pakistan Cables",
        "Pak Elektron Limited", "Tri-Pack Films Limited", "Hub Power Company"
    ];

    public function ntn(): string
    {
        return sprintf('%08d', $this->randomizer->getInt(1, 99999999));
    }

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
