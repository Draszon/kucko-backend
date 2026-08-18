<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use App\Models\WaitingForItem;
use Illuminate\Database\Seeder;

class ApplyHomepageContentUpdateSeeder extends Seeder
{
    public function run(): void
    {
        WaitingForItem::query()
            ->where('type', 'block')
            ->whereIn('title', [
                'Házi feladat elkészítése',
                'Pihenés és játék',
            ])
            ->update(['is_active' => false]);

        $includedFeatures = [
            'Házi feladat segítség',
            'Szóbeli kikérdezés',
            'Játék és pihenő idő',
            'Tanszer tárolás',
            'Gyakorlás',
            'Kiemelt figyelem',
        ];

        PricingPlan::query()->update(['features' => $includedFeatures]);
    }
}