<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerbStat extends Model
{
    protected $fillable = ['user_id', 'german_verb_id', 'correct_count', 'incorrect_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function germanVerb()
    {
        return $this->belongsTo(GermanVerb::class);
    }
}
