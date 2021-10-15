<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'code',
        'name',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function fromExchangeRates() {
        return $this->hasMany(ExchangeRate::class, 'currency_from');
    }

    public function toExchangeRates() {
        return $this->hasMany(ExchangeRate::class, 'currency_to');
    }
}
