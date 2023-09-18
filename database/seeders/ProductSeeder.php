<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Sku;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
        ->has(
            Sku::factory()
            ->hasAttached(
                Feature::factory()
                    ->count(3),
                    ['value' => '1']
            )
            ->count(1)
        )
        ->count(5)
        ->create([
            'brand_id' => Brand::first()->id,
            'category_id' => Category::first()->id,
        ]);
    }
}
