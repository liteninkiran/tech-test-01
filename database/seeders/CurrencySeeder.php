<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Currency::factory(5)->create();

        // Euro
        Currency::create([
            'code' => 'EUR',
            'name' => 'Euro',
        ]);

        // US Dollar
        Currency::create([
            'code' => 'USD',
            'name' => 'US Dollar',
        ]);

        // British Pound
        Currency::create([
            'code' => 'GBP',
            'name' => 'British Pound',
        ]);
    }
}
