<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    /**
     * Text in format => Paragraphs => Sentences => Words.
     *
     * @var array|array[]
     */
    protected array $paragraphs = [
        [
            ['Innovation', 'drives', 'progress', 'in', 'Pakistan’s', 'growing', 'industries', 'and', 'services.'],
            ['Collaboration', 'between', 'diverse', 'teams', 'leads', 'to', 'efficient', 'outcomes.'],
            ['Effective', 'communication', 'bridges', 'gaps', 'across', 'Pakistan’s', 'multilingual', 'workforce.'],
            ['Flexibility', 'and', 'adaptability', 'are', 'key', 'in', 'Pakistan’s', 'dynamic', 'market.'],
        ],
        [
            ['Resource', 'management', 'optimizes', 'Pakistan’s', 'large-scale', 'operations.'],
            ['Continuous', 'improvement', 'drives', 'competitiveness', 'in', 'Pakistan’s', 'fast-paced', 'economy.'],
            ['Leveraging', 'technology', 'enhances', 'efficiency', 'in', 'urban', 'and', 'rural', 'areas.'],
            ['Strategic', 'planning', 'supports', 'long-term', 'growth', 'in', 'Pakistani', 'enterprises.'],
        ],
        [
            ['Customer', 'satisfaction', 'remains', 'central', 'to', 'Pakistan’s', 'business', 'success.'],
            ['Monitoring', 'trends', 'helps', 'identify', 'new', 'growth', 'opportunities.'],
            ['Daily', 'challenges', 'are', 'tackled', 'through', 'teamwork', 'and', 'innovation.'],
            ['Regular', 'evaluations', 'ensure', 'alignment', 'with', 'business', 'goals.'],
        ],
        [
            ['Professional', 'development', 'empowers', 'Pakistan’s', 'workforce', 'for', 'global', 'competitiveness.'],
            ['Training', 'programs', 'enhance', 'individual', 'and', 'organizational', 'growth.'],
            ['Continuous', 'learning', 'fosters', 'adaptation', 'to', 'changing', 'market', 'needs.'],
            ['Customized', 'approaches', 'improve', 'engagement', 'and', 'employee', 'retention.'],
        ],
        [
            ['Data', 'analytics', 'provides', 'insights', 'into', 'Pakistan’s', 'emerging', 'markets.'],
            ['Goals', 'are', 'refined', 'to', 'align', 'with', 'shifting', 'consumer', 'preferences.'],
            ['Regular', 'reviews', 'enable', 'quick', 'adaptation', 'to', 'economic', 'trends.'],
            ['Decisions', 'are', 'backed', 'by', 'data', 'and', 'well-defined', 'strategies.'],
            ['Ongoing', 'assessments', 'drive', 'sustainable', 'growth', 'and', 'development.'],
        ],
    ];
}
