<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;
use App\Models\ExchangeRate;

class ExchangeRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gbp = Currency::where('code', '=', 'GBP')->first();
        $usd = Currency::where('code', '=', 'USD')->first();
        $eur = Currency::where('code', '=', 'EUR')->first();

        // GBP -> USD
        ExchangeRate::create([
            'currency_from' => $gbp->id,
            'currency_to' => $usd->id,
            'exchange_rate' => 1.3,
        ]);

        // GBP -> EUR
        ExchangeRate::create([
            'currency_from' => $gbp->id,
            'currency_to' => $eur->id,
            'exchange_rate' => 1.1,
        ]);

        // EUR -> GBP
        ExchangeRate::create([
            'currency_from' => $eur->id,
            'currency_to' => $gbp->id,
            'exchange_rate' => 0.9,
        ]);

        // EUR -> USD
        ExchangeRate::create([
            'currency_from' => $eur->id,
            'currency_to' => $usd->id,
            'exchange_rate' => 1.2,
        ]);

        // USD -> GBP
        ExchangeRate::create([
            'currency_from' => $usd->id,
            'currency_to' => $gbp->id,
            'exchange_rate' => 0.7,
        ]);

        // USD -> EUR
        ExchangeRate::create([
            'currency_from' => $usd->id,
            'currency_to' => $eur->id,
            'exchange_rate' => 0.8,
        ]);
    }
}
