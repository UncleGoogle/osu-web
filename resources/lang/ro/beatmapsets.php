<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Acest beatmap nu poate fi descărcat momentan.',
        'parts-removed' => 'Unele porțiuni din acest beatmap au fost eliminate la cererea creatorului sau al unui deținător de drepturi de autor.',
        'more-info' => 'Vezi aici pentru mai multe informații.',
    ],

    'index' => [
        'title' => 'Listarea beatmapurilor',
        'guest_title' => 'Beatmaps',
    ],

    'show' => [
        'discussion' => 'Discuție',

        'details' => [
            'favourite' => 'Adaugă acest beatmapset la favorite',
            'logged-out' => 'Trebuie să te autentifici înainte de a descărca vreun beatmap!',
            'mapped_by' => 'mapat de :mapper',
            'unfavourite' => 'Elimină acest beatmapset de la favorite',
            'updated_timeago' => 'ultima dată actualizat :timeago',

            'download' => [
                '_' => 'Descarcă',
                'direct' => '',
                'no-video' => 'fără videoclip',
                'video' => 'cu videoclip',
            ],

            'login_required' => [
                'bottom' => 'pentru a accesa mai multe avantaje',
                'top' => 'Autentificare',
            ],
        ],

        'details_date' => [
            'approved' => '',
            'loved' => '',
            'qualified' => '',
            'ranked' => '',
            'submitted' => '',
            'updated' => '',
        ],

        'favourites' => [
            'limit_reached' => 'Ai prea multe beatmaps favorite! Te rugăm să mai elimini câteva înainte de a încerca din nou.',
        ],

        'hype' => [
            'action' => 'Hype această mapă dacă ți-a plăcut să o joci, astfel încât să progreseze la stadiul de <strong>Clasat</strong>.',

            'current' => [
                '_' => 'Această mapă este în prezent :status.',

                'status' => [
                    'pending' => 'în așteptare',
                    'qualified' => 'calificată',
                    'wip' => 'muncă în desfășurare',
                ],
            ],

            'disqualify' => [
                '_' => 'Dacă găsești o problemă cu acest beatmap, vă rugăm descalificați-o :link.',
                'button_title' => 'Descalifică un beatmap calificat.',
            ],

            'report' => [
                '_' => 'Dacă găsești o problemă cu acest beatmap, vă rugăm raportați-o :link ca să alertați echipa.',
                'button' => 'Raportează problemă',
                'button_title' => 'Raportează o problemă pe un beatmap calificat.',
                'link' => 'aici',
            ],
        ],

        'info' => [
            'description' => 'Descriere',
            'genre' => 'Gen',
            'language' => 'Limbă',
            'no_scores' => 'Încă se calculează datele...',
            'points-of-failure' => 'Puncte de eșec',
            'source' => 'Sursă',
            'success-rate' => 'Rata de succes',
            'tags' => 'Tag-uri',
            'unranked' => 'Beatmap neclasificat',
        ],

        'scoreboard' => [
            'achieved' => 'realizat :when',
            'country' => 'Clasament pe țară',
            'friend' => 'Clasamentul prietenilor',
            'global' => 'Clasament global',
            'supporter-link' => 'Click <a href=":link">aici</a> pentru a vedea toate avantajele pe care le poți obține!',
            'supporter-only' => 'Trebuie să fii un suporter pentru a accesa clasamentul prietenilor și pe țară!',
            'title' => 'Tabela de scor',

            'headers' => [
                'accuracy' => 'Precizie',
                'combo' => 'Combo maxim',
                'miss' => 'Ratări',
                'mods' => 'Moduri',
                'player' => 'Jucător',
                'pp' => '',
                'rank' => 'Rang',
                'score_total' => 'Scor total',
                'score' => 'Scor',
            ],

            'no_scores' => [
                'country' => 'Nimeni din țara ta nu a stabilit un scor pe această mapă încă!',
                'friend' => 'Nimeni din prietenii tăi nu a stabilit un scor pe această mapă încă!',
                'global' => 'Niciun scor încă. Poate ar trebui să încerci să obții câteva?',
                'loading' => 'Se încarcă scorurile...',
                'unranked' => 'Beatmap neclasificat.',
            ],
            'score' => [
                'first' => 'În top',
                'own' => 'Cel mai bun',
            ],
        ],

        'stats' => [
            'cs' => 'Dimensiunea cercului',
            'cs-mania' => 'Numărul de taste',
            'drain' => 'Scurgere HP',
            'accuracy' => 'Precizie',
            'ar' => 'Viteza de apropiere',
            'stars' => 'Dificultatea de stele',
            'total_length' => 'Durată',
            'bpm' => 'BPM',
            'count_circles' => 'Numărul de cercuri',
            'count_sliders' => 'Numărul de glisări',
            'user-rating' => 'Evaluarea jucătorului',
            'rating-spread' => 'Clasament grafic',
            'nominations' => 'Nominalizări',
            'playcount' => 'Numărul de jocuri',
        ],

        'status' => [
            'ranked' => 'Clasat',
            'approved' => 'Aprobat',
            'loved' => 'Iubit',
            'qualified' => 'Calificat',
            'wip' => 'WIP',
            'pending' => 'În Așteptare',
            'graveyard' => 'Cimitir',
        ],
    ],
];
