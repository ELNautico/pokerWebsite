<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'buy_in',
        'payed_out',
        'date_of_transaction',
    ];

    protected $casts = ['date_of_transaction' => 'datetime'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
