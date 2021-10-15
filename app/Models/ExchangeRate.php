<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'currency_from',
        'currency_to',
        'exchange_rate',
    ];

    public function currencyFrom() {
        return $this->belongsTo(Currency::class, 'currency_from');
    }

    public function currencyTo() {
        return $this->belongsTo(Currency::class, 'currency_to');
    }
}
