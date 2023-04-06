<?php return [
    'plugin' => [
        'name' => 'Tudástár',
        'description' => 'Tudástár plugin az RMCSSZ CSATÁR alkalmazás számára',
        'permissions' => [
            'manageKnowledgeRepository' => 'Tudástár kezelése',
        ],
        'admin' => [
            'menu' => [
                'knowledgeRepository' => [
                    'knowledgeRepository' => 'Tudástár',
                    'testSystem' => 'Próbarendszer',
                    'games' => 'Játékok',
                    'songs' => 'Énekek',
                    'workPlans' => 'Munkatervek',
                    'methodologies' => 'Módszertan',
                ],
                'knowledgeRepositoryParameters' => [
                    'knowledgeRepositoryParameters' => 'Tudástár Paraméterek',
                    'gameDevelopmentGoals' => 'Játék fejlesztési célok',
                    'gameDevelopmentGoal' => 'Játék fejlesztési cél',
                    'accidentRiskLevels' => 'Baleseti kockázat szintek',
                    'accidentRiskLevel' => 'Baleseti kockázat szint',
                    'tools' => 'Kellékek',
                    'tool' => 'Kellék',
                    'headCounts' => 'Létszámok',
                    'headCount' => 'Létszám',
                    'durations' => 'Időtartamok',
                    'duration' => 'Időtartam',
                    'locations' => 'Helyszínek',
                    'location' => 'Helyszín',
                    'gameTypes' => 'Játék típusok',
                    'gameType' => 'Játék típus',
                    'methodologyType' => 'Módszertan típus',
                    'methodologyTypes' => 'Módszertan típusok',
                    'methodologyName' => 'Módszer neve',
                    'methodology' => 'Módszertan',
                    'ageGroup' => 'Korosztály',
                ],
            ],
            'general' => [
                'name' => 'Megnevezés',
                'note' => 'Megjegyzés',
                'order' => 'Sorrend',
                'description' => 'Leírás',
                'approverCsatarCode' => 'Jóváhagyó - igazolványszám',
                'proposerCsatarCode' => 'Felterjesztő - igazolványszám',
                'isApproved' => 'Jóváhagyva',
                'minute' => 'perc',
                'link' => 'Link',
                'Attachment' => 'Csatolmány',
                'sortOrder' => 'Sorszám',
                'version' => 'Verzió',
                'created_at' => 'Feltöltés Dátuma',
                'forms' => 'Űrlapok',
                'obligatory' => 'Kötelező',
            ],
            'game' => [
                'game' => 'Játék',
                'name' => 'Játék neve',
                'uploader' => 'Feltöltő',
                'approver' => 'Jóváhagyó',
                'otherTools' => 'Egyéb kellékek',
                'attachements' => 'Csatolmányok',
                'uploadedAt' => 'Feltöltés dátuma',
                'approvedAt' => 'Jóváhagyás dátuma',
                'version' => 'Verzió',
                'ageGroupsComment' => 'A korosztályok csak a szövetség kiválasztása után választhatók ki.',
            ],
            'trialSystem' => [
                'trialSystem' => 'Próbarendszer',
                'trialSystems' => 'Próbarendszerek',
                'idString' => 'Azonosító',
                'ageGroup' => 'Korosztály',
                'trialSystemCategory' => 'Kategória',
                'trialSystemCategories' => 'Próbarendszer kategóriák',
                'trialSystemTopic' => 'Téma',
                'trialSystemTopics' => 'Próbarendszer témák',
                'trialSystemSubTopic' => 'Altéma',
                'trialSystemSubTopics' => 'Próbarendszer altémák',
                'trialSystemType' => 'Típus',
                'trialSystemTypes' => 'Próbarendszer típusok',
                'trialSystemTrialType' => 'Próba típus',
                'trialSystemTrialTypes' => 'Próbarendszer próba típusok',
                'forPatrols' => 'Őrsi',
                'individual' => 'Egyéni',
                'details' => 'Részletek',
                'task' => 'Foglalkozás',
            ],
        ],
        'components' => [
            'gameForm' => [
                'name' => 'Játék űrlap',
                'description' => 'Játék űrlap komponens',
            ],
            'methodologyForm' => [
                'name' => 'Módszertan űrlap',
                'description' => 'Módszertan űrlap komponens'
            ]
        ],
    ],
];
