<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VerbSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('german_verbs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $now = Carbon::now();

        $verbs = [
            // an
            ['verb' => 'arbeiten', 'preposition' => 'an', 'example_sentence' => 'Er arbeitet an einem Projekt.', 'english_translation' => 'to work (on)'],
            ['verb' => 'denken', 'preposition' => 'an', 'example_sentence' => 'Ich denke an dich.', 'english_translation' => 'to think (of/about)'],
            ['verb' => 'erinnern', 'preposition' => 'an', 'example_sentence' => 'Erinnere dich an das Treffen.', 'english_translation' => 'to remember / remind (of)'],
            ['verb' => 'glauben', 'preposition' => 'an', 'example_sentence' => 'Ich glaube an dich.', 'english_translation' => 'to believe (in)'],
            ['verb' => 'teilnehmen', 'preposition' => 'an', 'example_sentence' => 'Ich nehme an der Besprechung teil.', 'english_translation' => 'to participate (in)'],
            ['verb' => 'zweifeln', 'preposition' => 'an', 'example_sentence' => 'Ich zweifle an deiner Ehrlichkeit.', 'english_translation' => 'to doubt'],
            ['verb' => 'sich gewöhnen', 'preposition' => 'an', 'example_sentence' => 'Sie gewöhnt sich an das Klima.', 'english_translation' => 'to get used (to)'],
            ['verb' => 'sich erinnern', 'preposition' => 'an', 'example_sentence' => 'Ich erinnere mich an den Urlaub.', 'english_translation' => 'to remember'],
            ['verb' => 'sich wenden', 'preposition' => 'an', 'example_sentence' => 'Er wendet sich an den Arzt.', 'english_translation' => 'to turn (to) / contact'],
            ['verb' => 'scheitern', 'preposition' => 'an', 'example_sentence' => 'Das Projekt scheitert an den Kosten.', 'english_translation' => 'to fail (because of)'],
            ['verb' => 'liegen', 'preposition' => 'an', 'example_sentence' => 'Es liegt an dir.', 'english_translation' => 'to be due to'],
            ['verb' => 'sich beteiligen', 'preposition' => 'an', 'example_sentence' => 'Er beteiligt sich an der Diskussion.', 'english_translation' => 'to take part (in)'],
            ['verb' => 'mangeln', 'preposition' => 'an', 'example_sentence' => 'Es mangelt an Zeit.', 'english_translation' => 'to lack'],
            ['verb' => 'leiden', 'preposition' => 'an', 'example_sentence' => 'Sie leidet an Schlaflosigkeit.', 'english_translation' => 'to suffer (from)'],
            ['verb' => 'sterben', 'preposition' => 'an', 'example_sentence' => 'Er ist an einer Krankheit gestorben.', 'english_translation' => 'to die (of)'],

            // auf
            ['verb' => 'achten', 'preposition' => 'auf', 'example_sentence' => 'Ich achte auf dich.', 'english_translation' => 'to pay attention (to)'],
            ['verb' => 'ankommen', 'preposition' => 'auf', 'example_sentence' => 'Es kommt auf dich an.', 'english_translation' => 'to depend (on)'],
            ['verb' => 'antworten', 'preposition' => 'auf', 'example_sentence' => 'Ich antworte auf die Frage.', 'english_translation' => 'to answer / reply (to)'],
            ['verb' => 'hoffen', 'preposition' => 'auf', 'example_sentence' => 'Ich hoffe auf gute Nachrichten.', 'english_translation' => 'to hope (for)'],
            ['verb' => 'sich freuen', 'preposition' => 'auf', 'example_sentence' => 'Ich freue mich auf die Ferien.', 'english_translation' => 'to look forward (to)'],
            ['verb' => 'sich konzentrieren', 'preposition' => 'auf', 'example_sentence' => 'Er konzentriert sich auf die Arbeit.', 'english_translation' => 'to concentrate (on)'],
            ['verb' => 'verzichten', 'preposition' => 'auf', 'example_sentence' => 'Er verzichtet auf Zucker.', 'english_translation' => 'to give up / forgo'],
            ['verb' => 'warten', 'preposition' => 'auf', 'example_sentence' => 'Ich warte auf den Bus.', 'english_translation' => 'to wait (for)'],
            ['verb' => 'zeigen', 'preposition' => 'auf', 'example_sentence' => 'Sie zeigt auf die Karte.', 'english_translation' => 'to point (at)'],
            ['verb' => 'bestehen', 'preposition' => 'auf', 'example_sentence' => 'Er besteht auf einer Erklärung.', 'english_translation' => 'to insist (on)'],
            ['verb' => 'reagieren', 'preposition' => 'auf', 'example_sentence' => 'Sie reagiert auf die Nachricht.', 'english_translation' => 'to react (to)'],
            ['verb' => 'sich vorbereiten', 'preposition' => 'auf', 'example_sentence' => 'Ich bereite mich auf die Prüfung vor.', 'english_translation' => 'to prepare (for)'],
            ['verb' => 'stolz sein', 'preposition' => 'auf', 'example_sentence' => 'Ich bin stolz auf dich.', 'english_translation' => 'to be proud (of)'],
            ['verb' => 'aufpassen', 'preposition' => 'auf', 'example_sentence' => 'Pass auf dich auf!', 'english_translation' => 'to look out (for) / take care (of)'],
            ['verb' => 'hinweisen', 'preposition' => 'auf', 'example_sentence' => 'Er weist auf den Fehler hin.', 'english_translation' => 'to point out'],

            // aus
            ['verb' => 'bestehen', 'preposition' => 'aus', 'example_sentence' => 'Das Team besteht aus Experten.', 'english_translation' => 'to consist (of)'],
            ['verb' => 'sich ergeben', 'preposition' => 'aus', 'example_sentence' => 'Das ergibt sich aus den Daten.', 'english_translation' => 'to result (from)'],
            ['verb' => 'schließen', 'preposition' => 'aus', 'example_sentence' => 'Ich schließe daraus, dass er kommt.', 'english_translation' => 'to conclude (from)'],
            ['verb' => 'stammen', 'preposition' => 'aus', 'example_sentence' => 'Er stammt aus Deutschland.', 'english_translation' => 'to come from / originate (from)'],

            // bei
            ['verb' => 'sich bedanken', 'preposition' => 'bei', 'example_sentence' => 'Ich bedanke mich bei ihm.', 'english_translation' => 'to thank'],
            ['verb' => 'sich entschuldigen', 'preposition' => 'bei', 'example_sentence' => 'Er entschuldigt sich bei ihr.', 'english_translation' => 'to apologize (to)'],
            ['verb' => 'bleiben', 'preposition' => 'bei', 'example_sentence' => 'Ich bleibe bei meiner Meinung.', 'english_translation' => 'to stick (to) / stay with'],
            ['verb' => 'helfen', 'preposition' => 'bei', 'example_sentence' => 'Er hilft mir bei den Hausaufgaben.', 'english_translation' => 'to help (with)'],

            // für
            ['verb' => 'sich entscheiden', 'preposition' => 'für', 'example_sentence' => 'Ich entscheide mich für diesen Weg.', 'english_translation' => 'to decide (on / for)'],
            ['verb' => 'sich interessieren', 'preposition' => 'für', 'example_sentence' => 'Sie interessiert sich für Kunst.', 'english_translation' => 'to be interested (in)'],
            ['verb' => 'sorgen', 'preposition' => 'für', 'example_sentence' => 'Er sorgt für seine Familie.', 'english_translation' => 'to care (for) / provide (for)'],
            ['verb' => 'danken', 'preposition' => 'für', 'example_sentence' => 'Ich danke dir für die Hilfe.', 'english_translation' => 'to thank (for)'],
            ['verb' => 'kämpfen', 'preposition' => 'für', 'example_sentence' => 'Sie kämpft für ihre Rechte.', 'english_translation' => 'to fight (for)'],
            ['verb' => 'bezahlen', 'preposition' => 'für', 'example_sentence' => 'Er bezahlt für das Essen.', 'english_translation' => 'to pay (for)'],
            ['verb' => 'gelten', 'preposition' => 'für', 'example_sentence' => 'Das gilt für alle.', 'english_translation' => 'to apply (to) / be valid (for)'],
            ['verb' => 'sich schämen', 'preposition' => 'für', 'example_sentence' => 'Er schämt sich für sein Verhalten.', 'english_translation' => 'to be ashamed (of/for)'],
            ['verb' => 'sich einsetzen', 'preposition' => 'für', 'example_sentence' => 'Sie setzt sich für die Umwelt ein.', 'english_translation' => 'to advocate (for) / stand up (for)'],

            // gegen
            ['verb' => 'kämpfen', 'preposition' => 'gegen', 'example_sentence' => 'Er kämpft gegen die Krankheit.', 'english_translation' => 'to fight (against)'],
            ['verb' => 'protestieren', 'preposition' => 'gegen', 'example_sentence' => 'Sie protestieren gegen das Gesetz.', 'english_translation' => 'to protest (against)'],
            ['verb' => 'sich wehren', 'preposition' => 'gegen', 'example_sentence' => 'Er wehrt sich gegen die Anschuldigungen.', 'english_translation' => 'to defend oneself (against)'],
            ['verb' => 'verstoßen', 'preposition' => 'gegen', 'example_sentence' => 'Das verstößt gegen die Regeln.', 'english_translation' => 'to violate / go against'],

            // in
            ['verb' => 'sich verlieben', 'preposition' => 'in', 'example_sentence' => 'Er verliebt sich in sie.', 'english_translation' => 'to fall in love (with)'],
            ['verb' => 'investieren', 'preposition' => 'in', 'example_sentence' => 'Sie investiert in Aktien.', 'english_translation' => 'to invest (in)'],
            ['verb' => 'sich irren', 'preposition' => 'in', 'example_sentence' => 'Er irrt sich in dir.', 'english_translation' => 'to be mistaken (about)'],
            ['verb' => 'einteilen', 'preposition' => 'in', 'example_sentence' => 'Wir teilen die Arbeit in Phasen ein.', 'english_translation' => 'to divide (into)'],

            // mit
            ['verb' => 'anfangen', 'preposition' => 'mit', 'example_sentence' => 'Wir fangen mit der Arbeit an.', 'english_translation' => 'to begin / start (with)'],
            ['verb' => 'aufhören', 'preposition' => 'mit', 'example_sentence' => 'Er hört mit dem Rauchen auf.', 'english_translation' => 'to stop (doing something)'],
            ['verb' => 'sprechen', 'preposition' => 'mit', 'example_sentence' => 'Ich spreche mit ihm über das Projekt.', 'english_translation' => 'to speak (with)'],
            ['verb' => 'sich beschäftigen', 'preposition' => 'mit', 'example_sentence' => 'Sie beschäftigt sich mit Musik.', 'english_translation' => 'to deal with / occupy oneself (with)'],
            ['verb' => 'sich treffen', 'preposition' => 'mit', 'example_sentence' => 'Ich treffe mich mit Freunden.', 'english_translation' => 'to meet (with)'],
            ['verb' => 'vergleichen', 'preposition' => 'mit', 'example_sentence' => 'Er vergleicht sich mit anderen.', 'english_translation' => 'to compare (with)'],
            ['verb' => 'rechnen', 'preposition' => 'mit', 'example_sentence' => 'Ich rechne mit Problemen.', 'english_translation' => 'to expect / count (on)'],
            ['verb' => 'umgehen', 'preposition' => 'mit', 'example_sentence' => 'Sie geht gut mit Stress um.', 'english_translation' => 'to deal (with) / handle'],
            ['verb' => 'sich einigen', 'preposition' => 'mit', 'example_sentence' => 'Wir einigen uns mit ihnen.', 'english_translation' => 'to agree (with)'],
            ['verb' => 'zusammenhängen', 'preposition' => 'mit', 'example_sentence' => 'Das hängt mit dem Problem zusammen.', 'english_translation' => 'to be related (to) / connected (with)'],

            // nach
            ['verb' => 'fragen', 'preposition' => 'nach', 'example_sentence' => 'Ich frage nach dem Weg.', 'english_translation' => 'to ask (for/about)'],
            ['verb' => 'suchen', 'preposition' => 'nach', 'example_sentence' => 'Er sucht nach einer Lösung.', 'english_translation' => 'to search (for) / look (for)'],
            ['verb' => 'riechen', 'preposition' => 'nach', 'example_sentence' => 'Es riecht nach Regen.', 'english_translation' => 'to smell (of)'],
            ['verb' => 'sich sehnen', 'preposition' => 'nach', 'example_sentence' => 'Sie sehnt sich nach Hause.', 'english_translation' => 'to long (for)'],
            ['verb' => 'streben', 'preposition' => 'nach', 'example_sentence' => 'Er strebt nach Erfolg.', 'english_translation' => 'to strive (for)'],
            ['verb' => 'greifen', 'preposition' => 'nach', 'example_sentence' => 'Sie greift nach dem Glas.', 'english_translation' => 'to reach (for) / grab'],

            // über
            ['verb' => 'diskutieren', 'preposition' => 'über', 'example_sentence' => 'Wir diskutieren über das Problem.', 'english_translation' => 'to discuss'],
            ['verb' => 'lachen', 'preposition' => 'über', 'example_sentence' => 'Wir lachen über den Witz.', 'english_translation' => 'to laugh (about)'],
            ['verb' => 'nachdenken', 'preposition' => 'über', 'example_sentence' => 'Ich denke über die Frage nach.', 'english_translation' => 'to think (about) / reflect (on)'],
            ['verb' => 'sich ärgern', 'preposition' => 'über', 'example_sentence' => 'Er ärgert sich über den Lärm.', 'english_translation' => 'to be annoyed (about)'],
            ['verb' => 'sich beschweren', 'preposition' => 'über', 'example_sentence' => 'Sie beschwert sich über den Service.', 'english_translation' => 'to complain (about)'],
            ['verb' => 'sich freuen', 'preposition' => 'über', 'example_sentence' => 'Ich freue mich über das Geschenk.', 'english_translation' => 'to be happy (about)'],
            ['verb' => 'staunen', 'preposition' => 'über', 'example_sentence' => 'Wir staunen über seine Leistung.', 'english_translation' => 'to be amazed (at)'],
            ['verb' => 'berichten', 'preposition' => 'über', 'example_sentence' => 'Die Zeitung berichtet über den Unfall.', 'english_translation' => 'to report (on)'],
            ['verb' => 'sprechen', 'preposition' => 'über', 'example_sentence' => 'Wir sprechen über das Wetter.', 'english_translation' => 'to talk (about)'],
            ['verb' => 'urteilen', 'preposition' => 'über', 'example_sentence' => 'Man sollte nicht über andere urteilen.', 'english_translation' => 'to judge'],
            ['verb' => 'klagen', 'preposition' => 'über', 'example_sentence' => 'Er klagt über Rückenschmerzen.', 'english_translation' => 'to complain / lament (about)'],
            ['verb' => 'verfügen', 'preposition' => 'über', 'example_sentence' => 'Sie verfügt über viel Erfahrung.', 'english_translation' => 'to have at one\'s disposal'],

            // um
            ['verb' => 'bitten', 'preposition' => 'um', 'example_sentence' => 'Ich bitte um Hilfe.', 'english_translation' => 'to ask (for)'],
            ['verb' => 'sich kümmern', 'preposition' => 'um', 'example_sentence' => 'Ich kümmere mich um die Kinder.', 'english_translation' => 'to take care (of)'],
            ['verb' => 'sich bewerben', 'preposition' => 'um', 'example_sentence' => 'Er bewirbt sich um die Stelle.', 'english_translation' => 'to apply (for)'],
            ['verb' => 'sich handeln', 'preposition' => 'um', 'example_sentence' => 'Es handelt sich um einen Fehler.', 'english_translation' => 'to be about / concern'],
            ['verb' => 'kämpfen', 'preposition' => 'um', 'example_sentence' => 'Sie kämpfen um den ersten Platz.', 'english_translation' => 'to compete (for) / fight (over)'],
            ['verb' => 'sich sorgen', 'preposition' => 'um', 'example_sentence' => 'Er sorgt sich um seine Gesundheit.', 'english_translation' => 'to worry (about)'],
            ['verb' => 'beneiden', 'preposition' => 'um', 'example_sentence' => 'Ich beneide ihn um seinen Erfolg.', 'english_translation' => 'to envy (for)'],
            ['verb' => 'trauern', 'preposition' => 'um', 'example_sentence' => 'Sie trauert um ihren Vater.', 'english_translation' => 'to mourn (for)'],

            // von
            ['verb' => 'abhängen', 'preposition' => 'von', 'example_sentence' => 'Es hängt von dir ab.', 'english_translation' => 'to depend (on)'],
            ['verb' => 'erzählen', 'preposition' => 'von', 'example_sentence' => 'Er erzählt von seiner Reise.', 'english_translation' => 'to tell (about)'],
            ['verb' => 'handeln', 'preposition' => 'von', 'example_sentence' => 'Das Buch handelt von der Liebe.', 'english_translation' => 'to be about'],
            ['verb' => 'träumen', 'preposition' => 'von', 'example_sentence' => 'Sie träumt von einer Weltreise.', 'english_translation' => 'to dream (of)'],
            ['verb' => 'sich erholen', 'preposition' => 'von', 'example_sentence' => 'Er erholt sich von der Arbeit.', 'english_translation' => 'to recover (from)'],
            ['verb' => 'überzeugen', 'preposition' => 'von', 'example_sentence' => 'Ich überzeuge ihn von meiner Idee.', 'english_translation' => 'to convince (of)'],
            ['verb' => 'wissen', 'preposition' => 'von', 'example_sentence' => 'Ich weiß nichts von dem Plan.', 'english_translation' => 'to know (about)'],
            ['verb' => 'profitieren', 'preposition' => 'von', 'example_sentence' => 'Sie profitiert von der Erfahrung.', 'english_translation' => 'to benefit (from)'],
            ['verb' => 'sich verabschieden', 'preposition' => 'von', 'example_sentence' => 'Er verabschiedet sich von ihr.', 'english_translation' => 'to say goodbye (to)'],
            ['verb' => 'abraten', 'preposition' => 'von', 'example_sentence' => 'Ich rate dir davon ab.', 'english_translation' => 'to advise against'],

            // vor
            ['verb' => 'sich fürchten', 'preposition' => 'vor', 'example_sentence' => 'Sie fürchtet sich vor Spinnen.', 'english_translation' => 'to be afraid (of)'],
            ['verb' => 'sich schützen', 'preposition' => 'vor', 'example_sentence' => 'Er schützt sich vor der Kälte.', 'english_translation' => 'to protect oneself (from)'],
            ['verb' => 'warnen', 'preposition' => 'vor', 'example_sentence' => 'Ich warne dich vor ihm.', 'english_translation' => 'to warn (about)'],
            ['verb' => 'Angst haben', 'preposition' => 'vor', 'example_sentence' => 'Er hat Angst vor dem Hund.', 'english_translation' => 'to be afraid (of)'],
            ['verb' => 'sich ekeln', 'preposition' => 'vor', 'example_sentence' => 'Sie ekelt sich vor Schlangen.', 'english_translation' => 'to be disgusted (by)'],
            ['verb' => 'retten', 'preposition' => 'vor', 'example_sentence' => 'Er rettet sie vor dem Ertrinken.', 'english_translation' => 'to rescue / save (from)'],

            // zu
            ['verb' => 'einladen', 'preposition' => 'zu', 'example_sentence' => 'Ich lade dich zu meiner Party ein.', 'english_translation' => 'to invite (to)'],
            ['verb' => 'gehören', 'preposition' => 'zu', 'example_sentence' => 'Das Buch gehört zu mir.', 'english_translation' => 'to belong (to)'],
            ['verb' => 'führen', 'preposition' => 'zu', 'example_sentence' => 'Das führt zu Problemen.', 'english_translation' => 'to lead (to)'],
            ['verb' => 'beitragen', 'preposition' => 'zu', 'example_sentence' => 'Er trägt zur Lösung bei.', 'english_translation' => 'to contribute (to)'],
            ['verb' => 'neigen', 'preposition' => 'zu', 'example_sentence' => 'Sie neigt zu Übertreibungen.', 'english_translation' => 'to tend (to)'],
            ['verb' => 'passen', 'preposition' => 'zu', 'example_sentence' => 'Das Hemd passt zu der Hose.', 'english_translation' => 'to match / go (with)'],
            ['verb' => 'raten', 'preposition' => 'zu', 'example_sentence' => 'Ich rate dir zu mehr Sport.', 'english_translation' => 'to advise / recommend'],
            ['verb' => 'zwingen', 'preposition' => 'zu', 'example_sentence' => 'Er zwingt mich zur Arbeit.', 'english_translation' => 'to force (to)'],
            ['verb' => 'sich entschließen', 'preposition' => 'zu', 'example_sentence' => 'Sie entschließt sich zum Umzug.', 'english_translation' => 'to decide (to do)'],
            ['verb' => 'gratulieren', 'preposition' => 'zu', 'example_sentence' => 'Ich gratuliere dir zum Geburtstag.', 'english_translation' => 'to congratulate (on)'],
            ['verb' => 'gehören', 'preposition' => 'zu', 'example_sentence' => 'Mut gehört zu seinen Eigenschaften.', 'english_translation' => 'to be part of'],
        ];

        foreach ($verbs as &$verb) {
            $verb['created_at'] = $now;
            $verb['updated_at'] = $now;
        }

        DB::table('german_verbs')->insert($verbs);
    }
}
