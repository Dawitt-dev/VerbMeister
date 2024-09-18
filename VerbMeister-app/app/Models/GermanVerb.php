<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GermanVerb extends Model
{
    use HasFactory;

    protected $fillable = ['verb', 'preposition', 'example_sentence'];
}
