<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('german_verbs')->insert([
            [
                'verb' => 'abhängen',
                'preposition' => 'von',
                'example_sentence' => 'Ich hänge von dir ab.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'achten',
                'preposition' => 'auf',
                'example_sentence' => 'Ich achte auf dich.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'ankommen',
                'preposition' => 'auf',
                'example_sentence' => 'Es kommt auf dich an.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'antworten',
                'preposition' => 'auf',
                'example_sentence' => 'Ich antworte auf deine Frage.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'arbeiten',
                'preposition' => 'an',
                'example_sentence' => 'Ich arbeite an einem Projekt.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
