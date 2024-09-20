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
                'example_sentence' => 'Es hängt von dir ab.',
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
                'verb' => 'anfangen',
                'preposition' => 'mit',
                'example_sentence' => 'Wir fangen mit der Arbeit an.',
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
                'example_sentence' => 'Ich antworte auf die Frage.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'arbeiten',
                'preposition' => 'an',
                'example_sentence' => 'Er arbeitet an einem Projekt.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'bestehen',
                'preposition' => 'aus',
                'example_sentence' => 'Das Team besteht aus Experten.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'bitten',
                'preposition' => 'um',
                'example_sentence' => 'Ich bitte um Hilfe.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'denken',
                'preposition' => 'an',
                'example_sentence' => 'Ich denke an dich.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'diskutieren',
                'preposition' => 'über',
                'example_sentence' => 'Wir diskutieren über das Problem.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'einladen',
                'preposition' => 'zu',
                'example_sentence' => 'Ich lade dich zu meiner Party ein.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'erinnern',
                'preposition' => 'an',
                'example_sentence' => 'Erinnere dich an das Treffen.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'fragen',
                'preposition' => 'nach',
                'example_sentence' => 'Ich frage nach dem Weg.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'gehören',
                'preposition' => 'zu',
                'example_sentence' => 'Das Buch gehört zu mir.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'glauben',
                'preposition' => 'an',
                'example_sentence' => 'Ich glaube an dich.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'hoffen',
                'preposition' => 'auf',
                'example_sentence' => 'Ich hoffe auf gute Nachrichten.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'lachen',
                'preposition' => 'über',
                'example_sentence' => 'Wir lachen über den Witz.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'sich konzentrieren',
                'preposition' => 'auf',
                'example_sentence' => 'Er konzentriert sich auf die Arbeit.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'sich kümmern',
                'preposition' => 'um',
                'example_sentence' => 'Ich kümmere mich um die Kinder.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'sich freuen',
                'preposition' => 'auf',
                'example_sentence' => 'Ich freue mich auf die Ferien.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'sich ärgern',
                'preposition' => 'über',
                'example_sentence' => 'Er ärgert sich über den Lärm.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'sprechen',
                'preposition' => 'mit',
                'example_sentence' => 'Ich spreche mit ihm über das Projekt.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'teilnehmen',
                'preposition' => 'an',
                'example_sentence' => 'Ich nehme an der Besprechung teil.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'warten',
                'preposition' => 'auf',
                'example_sentence' => 'Ich warte auf den Bus.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'verb' => 'zweifeln',
                'preposition' => 'an',
                'example_sentence' => 'Ich zweifle an deiner Ehrlichkeit.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
