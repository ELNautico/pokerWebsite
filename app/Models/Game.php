<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $casts = ['start_date' => 'datetime'];
    protected $fillable = ['start_date', 'buy_in', 'time'];

}
