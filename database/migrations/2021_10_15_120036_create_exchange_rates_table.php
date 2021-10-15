<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currency_from');
            $table->unsignedBigInteger('currency_to');
            $table->decimal('exchange_rate', $precision = 12, $scale = 6);
            $table->timestamps();

            $table->unique(['currency_from', 'currency_to']);
            $table->foreign('currency_from')->references('id')->on('currencies');
            $table->foreign('currency_to')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_rates');
    }
}
