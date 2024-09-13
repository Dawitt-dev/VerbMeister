<?php

use Illuminate\Support\Facades\DB;

Route::get('/test-verbs', function () {
    $verbs = DB::table('german_verbs')->get();
    return response()->json($verbs);
});
