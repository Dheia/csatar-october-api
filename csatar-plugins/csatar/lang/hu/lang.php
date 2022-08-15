<?php return [
    'frontEnd' => [
        'authException' => 'Az e-mail cím, az ECSET kód vagy a jelszó téves!'
    ],
    'plugin' => [
        'name' => 'CSATÁR',
        'description' => 'Plugin az RMCSSZ CSATÁR alkalmazás számára',
        'author' => 'CSATÁR csapat',
        'admin' => [
            'general' => [
                'name' => 'Név',
                'name_abbreviation' => 'Név rövidítése',
                'email' => 'E-mail cím',
                'contactEmail' => 'Kapcsolattartó e-mail címe',
                'phone' => 'Telefonszám',
                'address' => 'Cím',
                'comment' => 'Megjegyzés',
                'id' => 'Azonosító',
                'createdAt' => 'Létrehozás ideje',
                'updatedAt' => 'Módosítás ideje',
                'deletedAt' => 'Törlés ideje',
                'select' => 'Válassz...',
                'logo' => 'Logó',
                'coordinates' => 'Koordináták',
                'ecsetCode' => 'ECSET kód',
                'date' => 'Dátum',
                'location' => 'Helyszín',
                'qualificationCertificateNumber' => 'Képesítési Igazolás Száma',
                'training' => 'Képzés',
                'qualification' => 'Képzés',
                'qualificationLeader' => 'Képzésvezető',
                'relations' => 'Kapcsolatok',
                'password' => 'Jelszó',
                'password_confirmation' => 'Jelszó megerősítés',
                'organizationUnitNameWarning' => 'A szervezeti egység neve nem tartalmazhatja a szervezeti egység megnevezését.',
                'note' => 'Megjegyzés',
                'sortOrder' => 'Sorszám',
            ],
            'ageGroups' => [
                'ageGroups' => 'Korosztályok',
                'numberOfPatrolsInAgeGroup' => 'Őrsök száma a korosztályban'
            ],
            'scout' => [
                'scout' => 'Cserkész',
                'scouts' => 'Cserkészek',
                'scoutData' => 'Cserkész adatai',
                'userId' => 'Felhasználó azonosítója',
                'namePrefix' => 'Név előtag',
                'familyName' => 'Családnév',
                'givenName' => 'Keresztnév',
                'nickname' => 'Becenév',
                'personalIdentificationNumber' => 'Személyi szám',
                'gender' => [
                    'gender' => 'Nem',
                    'male' => 'Férfi',
                    'female' => 'Nő',
                ],
                'isActive' => 'Aktív',
                'allergy' => 'Allergia',
                'foodSensitivity' => 'Ételérzékenység',
                'legalRelationship' => 'Jogviszony',
                'chronicIllnesses' => 'Krónikus betegségek',
                'specialDiet' => 'Különleges étrend',
                'religion' => 'Vallás',
                'nationality' => 'Nemzetiség',
                'tShirtSize' => 'Póló mérete',
                'birthdate' => 'Születési dátum',
                'nameday' => 'Névnap',
                'maidenName' => 'Születési/leánykori név',
                'birthplace' => 'Születési hely',
                'addressCountry' => 'Cím - ország',
                'addressZipcode' => 'Cím - irányítószám',
                'addressCounty' => 'Cím - megye',
                'addressLocation' => 'Cím - település',
                'addressStreet' => 'Cím - utca',
                'addressNumber' => 'Cím - házszám',
                'mothersName' => 'Anyja neve',
                'mothersPhone' => 'Anyja telefonszáma',
                'mothersEmail' => 'Anyja e-mail címe',
                'fathersName' => 'Apja neve',
                'fathersPhone' => 'Apja telefonszáma',
                'fathersEmail' => 'Apja e-mail címe',
                'legalRepresentativeName' => 'Törvényes képviselő neve',
                'legalRepresentativePhone' => 'Törvényes képviselő telefonszáma',
                'legalRepresentativeEmail' => 'Törvényes képviselő e-mail címe',
                'elementarySchool' => 'Elemi iskola',
                'primarySchool' => 'Általános iskola',
                'secondarySchool' => 'Középiskola',
                'postSecondarySchool' => 'Posztliceális iskola',
                'college' => 'Főiskola',
                'university' => 'Egyetem',
                'otherTrainings' => 'Egyéb képzések',
                'foreignLanguageKnowledge' => 'Idegen nyelvismeret',
                'occupation' => 'Foglalkozás',
                'workplace' => 'Munkahely',
                'comment' => 'Megjegyzés',
                'registrationForm' => 'Bejelentkezési és nyilvántartási lap',
                'promise' => 'Fogadalom, ígéret',
                'test' => 'Próba',
                'specialTest' => 'Különpróba',
                'professionalQualification' => 'Szakági képesítés',
                'specialQualification' => 'Szakági különpróba',
                'leadershipQualification' => 'Vezetői képesítés',
                'trainingQualification' => 'Kiképzői képesítés',
                'allergies' => 'Allergiák',
                'promises' => 'Fogadalmak, ígéretek',
                'tests' => 'Próbák',
                'specialTests' => 'Különpróbák',
                'professionalQualifications' => 'Szakági képesítések',
                'specialQualifications' => 'Szakági különpróbák',
                'leadershipQualifications' => 'Vezetői képesítések',
                'trainingQualifications' => 'Kiképzői képesítések',
                'foodSensitivities' => 'Ételérzékenységekek',
                'additionalDetailsInfo' => 'Allergák, Ételérékenységek, Fogadalmak, Próbák, Különpróbák, Szakági képesítések, Szakági különpróbák, Vezetői képesítések, Kiképzői képesítések és Megbízatások hozzáadása a Cserkész létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'breadcrumb' => 'Cserkészek',
                'team' => 'Csapat',
                'troop' => 'Raj',
                'patrol' => 'Őrs',
                'profile_image' => 'Profilkép',
                'sections' => [
                    'birthData' => 'Születési adatok',
                    'addressData' => 'Cím',
                    'mothersData' => 'Anyja adatai',
                    'fathersData' => 'Apja adatai',
                    'legalRepresentativeData' => 'Törvényes képviselő adatai',
                    'schoolData' => 'Tanulmányok',
                    'occupation' => 'Foglalkozás',
                    'otherData' => 'Egyéb adatok',
                ],
                'validationExceptions' => [
                    'noTeamSelected' => 'Válassz egy csapatot!',
                    'troopNotInTheTeam' => 'A kiválasztott Raj nem tartózik a kiválasztott Csapathoz.',
                    'troopNotInTheTeamOrTroop' => 'A kiválasztott Őrs nem tartózik a kiválasztott Csapathoz vagy Rajhoz.',
                    'dateInTheFuture' => 'A Dátum nem lehet a jövőben.',
                    'endDateBeforeStartDate' => 'A végső időpont nem lehet a kezdeti időpont előtt.',
                    'registrationFormRequired' => 'A Bejelentkezési és nyilvántartási lap kötelező.',
                    'dateRequiredError' => 'A Dátum megadása a %name %category esetén kötelező.',
                    'locationRequiredError' => 'A Helyszín megadása a %name %category esetén kötelező.',
                    'qualificationCertificateNumberRequiredError' => 'A Képesítési Igazolás Számának megadása a %name %category esetén kötelező.',
                    'qualificationRequiredError' => 'A Képzés megadása a %name %category esetén kötelező.',
                    'qualificationLeaderRequiredError' => 'A Képzésvezető megadása a %name %category esetén kötelező.',
                    'mandateEndDateBeforeStartDate' => 'A végső időpont nem lehet a kezdeti időpont előtt a %name megbízatás esetén.',
                    'dateInTheFutureError' => 'A Dátum a %name %category esetén nem lehet a jövőben.',
                ]
            ],
            'admin' => [
                'menu' => [
                    'scout' => 'Cserkész',
                    'scoutSystemData' => [
                        'scoutSystemData' => 'Cserkész rendszeradatok',
                        'legalRelationshipCategories' => 'Jogviszony típusok',
                        'chronicIllnessCategories' => 'Krónikus betegségek',
                        'allergyCategories' => 'Allergiák',
                        'foodSensitivityCategories' => 'Ételérzékenység típusok',
                        'specialDietCategories' => 'Különleges étrendek',
                        'religionCategories' => 'Vallások',
                        'tShirtSizeCategories' => 'Póló méretek',
                        'promiseCategories' => 'Fogadalom, ígéret típusok',
                        'testCategories' => 'Próba típusok',
                        'specialTestCategories' => 'Különpróba típusok',
                        'professionalQualificationCategories' => 'Szakági képesítés típusok',
                        'specialQualificationCategories' => 'Szakági különpróba típusok',
                        'leadershipQualificationCategories' => 'Vezetői képesítés típusok',
                        'trainingQualificationCategories' => 'Kiképzői képesítés típusok',
                        'trainings' => 'Képzések',
                    ],
                    'organizationSystemData' => [
                        'organizationSystemData' => 'Szervezeti rendszeradatok',
                        'hierarchy' => 'Hierarchia',
                    ],
                    'seederData' => [
                        'data' => 'Adatok',
                        'seederData' => 'Alapértelmezett adatok',
                        'testData' => 'Teszt adatok',
                    ],
                ],
                'seederData' => [
                    'seederData' => 'Alapértelmezett adatok',
                    'testData' => 'Teszt adatok',
                    'seederDataConfirmMessage' => 'Szeretnéd frissíteni az alapértelmezett adatokat?',
                    'testDataConfirmMessage' => 'Szeretnéd frissíteni a teszt adatokat?',
                    'dataToBeAdded' => 'A következő adatok lesznek hozzáadva (ha már nem voltak felvéve):',
                    'updateData' => 'Adatok frissítése',
                    'updateDataSuccess' => 'Az adatok frissítve lettek.',
                ],
            ],
            'allergy' => [
                'allergy' => 'Allergia',
                'allergies' => 'Allergiák',
                'breadcrumb' => 'Allergiák',
            ],
            'foodSensitivity' => [
                'foodSensitivity' => 'Ételérzékenység',
                'foodSensitivities' => 'Ételérzékenységek',
                'breadcrumb' => 'Ételérzékenységek',
            ],
            'chronicIllness' => [
                'chronicIllness' => 'Krónikus betegség',
                'chronicIllnesses' => 'Krónikus betegségek',
                'breadcrumb' => 'Krónikus betegségek',
            ],
            'legalRelationship' => [
                'legalRelationship' => 'Jogviszony',
                'legalRelationships' => 'Jogviszonyok',
                'sortOrder' => 'Sorrend',
                'breadcrumb' => 'Jogviszonyok',
            ],
            'religion' => [
                'religion' => 'Vallás',
                'religions' => 'Vallások',
                'breadcrumb' => 'Vallások',
            ],
            'specialDiet' => [
                'specialDiet' => 'Különleges étrend',
                'specialDiets' => 'Különleges étrendek',
                'breadcrumb' => 'Különleges étrendek',
            ],
            'tShirtSize' => [
                'tShirtSize' => 'Pólóméret',
                'tShirtSizes' => 'Pólóméretek',
                'breadcrumb' => 'Pólóméretek',
            ],
            'form' => [
                'form' => 'Űrlap',
            ],
            'promise' => [
                'promise' => 'Fogadalom, ígéret',
                'promises' => 'Fogadalmak, ígéretek',
                'breadcrumb' => 'Fogadalmak, ígéretek',
            ],
            'test' => [
                'test' => 'Próba',
                'tests' => 'Próbák',
                'breadcrumb' => 'Próbák',
            ],
            'specialTest' => [
                'specialTest' => 'Különpróba',
                'specialTests' => 'Különpróbák',
                'breadcrumb' => 'Különpróbák',
            ],
            'professionalQualification' => [
                'professionalQualification' => 'Szakági képesítés',
                'professionalQualifications' => 'Szakági képesítések',
                'breadcrumb' => 'Szakági képesítések',
            ],
            'specialQualification' => [
                'specialQualification' => 'Szakági különpróba',
                'specialQualifications' => 'Szakági különpróbák',
                'breadcrumb' => 'Szakági különpróbák',
            ],
            'leadershipQualification' => [
                'leadershipQualification' => 'Vezetői képesítés',
                'leadershipQualifications' => 'Vezetői képesítések',
                'breadcrumb' => 'Vezetői képesítések',
            ],
            'trainingQualification' => [
                'trainingQualification' => 'Kiképzői képesítés',
                'trainingQualifications' => 'Kiképzői képesítések',
                'breadcrumb' => 'Kiképzői képesítések',
            ],
            'hierarchy' => [
                'hierarchy' => 'Hierarchia',
                'parent' => 'Szülő',
                'sortOrder' => 'Sorrend',
                'breadcrumb' => 'Hierarchia',
            ],
            'association' => [
                'association' => 'Szövetség',
                'associations' => 'Szövetségek',
                'contactName' => 'Kapcsolattartó neve',
                'bankAccount' => 'Bankszámla',
                'leadershipPresentation' => 'Vezetőség bemutatása',
                'additionalDetailsInfo' => 'Körzetek, Pénznemek és Megbízatások hozzáadása a Szövetség létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'breadcrumb' => 'Szövetségek',
                'ecsetCode' => [
                    'suffix' => 'ECSET kód utótag',
                ],
                'teamFee' => 'Csapat fenntartói díj',
                'membershipFee' => 'Tagdíj értéke',
                'currency' => 'Pénznem',
            ],
            'district' => [
                'district' => 'Körzet',
                'districts' => 'Körzetek',
                'nameSuffix' => 'körzet',
                'website' => 'Weboldal',
                'description' => 'Leírás',
                'facebookPage' => 'Facebook oldal',
                'contactName' => 'Kapcsolattartó neve',
                'leadershipPresentation' => 'Vezetőség bemutatása',
                'bankAccount' => 'Bankszámla',
                'breadcrumb' => 'Körzetek',
                'teamsInfo' => 'Csapatok és Megbízatások hozzáadása a Körzet létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'association' => 'Szövetség',
                'organizationUnitNameWarning' => 'A körzet neve nem tartalmazhatja a "körzet" szót.',
                'filterOrganizationUnitNameForWords' => 'körzet, korzet',
            ],
            'team' => [
                'team' => 'Csapat',
                'teams' => 'Csapatok',
                'nameSuffix' => 'cserkészcsapat',
                'teamNumber' => 'Csapatszám',
                'foundationDate' => 'Alapítás dátuma',
                'website' => 'Weboldal',
                'facebookPage' => 'Facebook oldal',
                'contactName' => 'Kapcsolattartó neve',
                'history' => 'Csapat története',
                'leadershipPresentation' => 'Vezetőség bemutatása',
                'description' => 'Leírás',
                'juridicalPersonName' => 'Jogi személy neve',
                'juridicalPersonAddress' => 'Jogi személy címe',
                'juridicalPersonTaxNumber' => 'Jogi személy adószáma',
                'juridicalPersonBankAccount' => 'Jogi személy bankszámlája',
                'homeSupplierName' => 'Otthoni beszállító neve',
                'district' => 'Körzet',
                'troopsPatrolsScoutsInfo' => 'Rajok, Őrsök, Cserkészek és Megbízatások hozzáadása a Csapat létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'breadcrumb' => 'Csapatok',
                'teamNumberTakenError' => 'Ez a csapatszám már foglalt.',
                'dateInTheFutureError' => 'A dátum nem lehet a jövőben.',
                'organizationUnitNameWarning' => 'A csapat neve nem tartalmazhatja a "csapat" szót.',
                'filterOrganizationUnitNameForWords' => 'cserkészcsapat, csapat',
            ],
            'troop' => [
                'troop' => 'Raj',
                'troops' => 'Rajok',
                'nameSuffix' => 'raj',
                'website' => 'Weboldal',
                'facebookPage' => 'Facebook oldal',
                'troopLeaderName' => 'Rajvezető neve',
                'troopLeaderPhone' => 'Rajvezető telefonszáma',
                'troopLeaderEmail' => 'Rajvezető e-mail címe',
                'team' => 'Csapat',
                'patrolsInfo' => 'Őrsök és Megbízatások hozzáadása a Raj létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'breadcrumb' => 'Rajok',
                'organizationUnitNameWarning' => 'A raj neve nem tartalmazhatja a "raj" szót.',
                'filterOrganizationUnitNameForWords' => 'raj',
            ],
            'patrol' => [
                'patrol' => 'Őrs',
                'patrols' => 'Őrsök',
                'nameSuffix' => 'őrs',
                'website' => 'Weboldal',
                'facebookPage' => 'Facebook oldal',
                'patrolLeaderName' => 'Őrsvezető neve',
                'patrolLeaderPhone' => 'Őrsvezető telefonszáma',
                'patrolLeaderEmail' => 'Őrsvezető e-mail címe',
                'ageGroup' => 'Korosztály',
                'team' => 'Csapat',
                'troop' => 'Raj',
                'breadcrumb' => 'Őrsök',
                'mandatesInfo' => 'Megbízatások hozzáadása az Őrs létrehozása után lehetséges. Miután a többi adatot kitöltötted, kattints a Létrehozás gombra.',
                'troopNotInTheTeamError' => 'A kiválasztott Raj nem tartózik a kiválasztott Csapathoz.',
                'organizationUnitNameWarning' => 'Az őrs neve nem tartalmazhatja az "őrs" szót.',
                'filterOrganizationUnitNameForWords' => 'őrs, örs, ors',
            ],
            'currency' => [
                'currency' => 'Pénznem',
                'currencies' => 'Pénznemek',
                'breadcrumb' => 'Pénznemek',
                'code' => 'Kód',
            ],
            'teamReport' => [
                'teamReport' => 'Csapatjelentés',
                'teamReports' => 'Csapatjelentések',
                'team' => 'Csapat',
                'year' => 'Év',
                'number_of_adult_patrols' => 'Felnőtt őrsök száma',
                'number_of_explorer_patrols' => 'Felfedező őrsök száma',
                'number_of_scout_patrols' => 'Cserkész őrsök száma',
                'number_of_cub_scout_patrols' => 'Kiscserkész őrsök száma',
                'number_of_mixed_patrols' => 'Vegyes őrsök száma',
                'scouting_year_report_team_camp' => 'Előző cserkérkészév beszámoló (csapat tábor)',
                'scouting_year_report_homesteading' => 'Előző cserkérkészév beszámoló (tanyázás)',
                'scouting_year_report_programs' => 'Előző cserkészév beszámoló (programok)',
                'scouting_year_team_applications' => 'Előző cserkészév csapat pályázatai',
                'spiritual_leader_name' => 'Csapat lelki vezetője',
                'spiritual_leader_religion_id' => 'Csapat lelki vezetőjének felekezete',
                'spiritual_leader_occupation' => 'Csapat lelki vezetőjének foglalkozás',
                'team_fee' => 'Csapatfenntartói járulék',
                'total_amount' => 'Befizetendő összeg',
                'currency' => 'Pénznem',
                'name' => 'Név',
                'legalRelationship' => "Jogviszony",
                'leadershipQualification' => 'Vezetői képesítés',
                'membershipFee' => 'Tagdíj értéke',
                'submittedAt' => 'Beküldés ideje',
                'approvedAt' => 'Elfogadás ideje',
                'breadcrumb' => 'Csapatjelentések',
                'scoutsInfo' => 'A Csapatjelentés létrehozása után, a csapathoz tartózó cserkészek is láthatóak lesznek. Töltsd ki a kötelező mezőket, majd kattints a Létrehozás gombra.',
                'statuses' => [
                    'notCreated' => 'Nincs létrehozva',
                    'created' => 'Szerkesztés alatt',
                    'submitted' => 'Elfogadásra vár',
                    'approved' => 'Elfogadva',
                ],
                'validationExceptions' => [
                    'dateInTheFuture' => 'A Dátum nem lehet a jövőben.',
                    'submissionDateAfterApprovalDate' => 'A Beküldés ideje nem lehet az Elfogadás ideje után.',
                ],
            ],
            'mandateType' => [
                'mandateType' => 'Megbízatás típus',
                'mandateTypes' => 'Megbízatás típusok',
                'mandateModels' => 'Megbízatás modellek',
                'association' => 'Szövetség',
                'parent' => 'Szülő',
                'organizationTypeModelName' => 'Szervezeti egység',
                'required' => 'Kötelező',
                'overlapAllowed' => 'Átfedés megengedett',
                'scout' => 'Tag',
                'startDate' => 'Kezdete',
                'endDate' => 'Vége',
                'breadcrumb' => 'Megbízatás típusok',
            ],
            'mandate' => [
                'mandate' => 'Megbízatás',
                'mandates' => 'Megbízatások',
                'overlappingMandateError' => 'Már létezik Megbízatás a megadott periódusra.',
                'requiredMandateError' => 'Jelenleg nincs %name Megbízatás beállítva.',
            ],
            'trainings' => [
                'trainings' => 'Képzések',
            ],
        ],
        'component' => [
            'general' => [
                'validationExceptions'=> [
                    'emailAlreadyAssigned' => 'Ez az e-mail cím már felhasználói fiókhoz van rendelve.',
                    'passwordRegex' => 'A jelszó kell tartalmazzon legalább 8 karaktert, kis-, és nagybetűt, valamint számot vagy szimbólumot.',
                ]
            ],
            'resetPassword' => [
                'name' => 'Jelszó visszaállítása',
                'description' => 'A felhasználó jelszavának a visszaállítását teszi lehetővé.',
            ],
            'structure' => [
                'name' => 'Szervezeti struktúra',
                'description' => 'Fa nézetben jeleníti meg a szervezeti struktúrát.',
                'properties' => [
                    'level' => [
                        'title' => 'Szint',
                        'description' => 'Struktúra kezdő szintje.',
                    ],
                    'model_name' => [
                        'title' => 'Model neve',
                        'description' => 'Kezdő model név.',
                    ],
                    'model_id' => [
                        'title' => 'Model Id',
                        'description' => 'Kezdő model id.',
                    ],
                ]
            ],
            'logos' => [
                'name' => 'Logók',
                'description' => 'Logók és a hozzájuk tartózó hivatkozások rács-nézetben való megjelenítése.',
                'sponsors' => [
                    'title' => 'Támogatók listája',
                    'hungarianGovernment' => 'Magyar Kormány',
                    'harghitaCountyCouncil' => 'Hargita Megye Tanácsa',
                    'communitasFoundation' => 'Communitas Alapítvány',
                    'toyota' => 'Toyota',
                ],
               'discounts' => [
                    'title' => 'Kedvezményeket kínáló cégek',
                    'mormotaLand' => 'Mormota Land',
                    'tiboo' => 'Tiboo',
                    'giftyShop' => 'Gifty Shop',
                    'zergeSpecialtyStore' => 'Zerge Szakbolt',
                ],
                'partners' => [
                    'title' => 'Partnerek',
                    'forumOfHungarianScoutAssociations' => 'Magyar Cserkészszövetségek Fóruma',
                    'transcarpathianHungarianScoutAssociation' => 'Kárpátaljai Magyar Cserkészszövetség',
                    'hungarianScoutAssociationInExteris' => 'Külföldi Magyar Cserkészszövetség',
                    'hungarianScoutAssociation' => 'Magyar Cserkészszövetség',
                    'slovakHungarianScoutAssociation' => 'Szlovákiai Magyar Cserkészszövetség',
                    'hungarianScoutAssociationOfVojvodina' => 'Vajdasági Magyar Cserkészszövetség',
                    'archdiocesanYouthHeadquarters' => 'Főegyházmegyei Ifjúsági Főlelkészség',
                    'marySWayTransylvania' => 'Mária út - Erdély',
                    'proEducatione' => 'Pro Educatione',
                    'scoutsOfRomania' => 'Románia Cserkészei',
                ],
            ],
            'teamReport' => [
                'name' => 'Csapatjelentés',
                'description' => 'Éves csapatjelentés létrehozását teszi lehetővé a csapatok számára.',
                'validationExceptions' => [
                    'teamReportAlreadyExists' => 'Már létezik csapatjelentés e csapat számára, erre az évre.',
                    'teamReportCannotBeFound' => 'A csapatjelentés nem található.',
                    'teamCannotBeFound' => 'A csapat nem található.',
                ],
            ],
            'teamReports' => [
                'name' => 'Csapatjelentések',
                'description' => 'Csapat csapatjelentéseinek listázása.',
                'edit' => 'Módosítás',
                'view' => 'Megtekintés',
            ],
            'checkScoutStatus' => [
                'name' => 'Cserkész állapotának ellenőrzése',
                'description' => 'A cserkész állapotát téríti vissza a Kérésből származó cserkészazonosító alapján.',
                'scoutCode' => [
                    'title' => 'Cserkész azonosítója',
                    'description' => 'Egyedi cserkész azonosító'
                ],
                'json' => [
                    'title' => 'JSON formátum',
                    'description' => 'Ha a JSON formátum értéke \'json\', akkor a választ JSON formátumban téríti vissza.'
                ],
            ],
            'createFrontendAccounts' => [
                'name' => 'Frontend felhasználó létrehozása',
                'description' => 'Lehetővé teszi frontend felhasználó létrehozását.',
                'currentPage' => '- jelenlegi oldal -',
                'validationExceptions' => [
                        'invalidEcsetCode' => 'Érvénytelen ECSET kód',
                    'emailEcsetCodeMissMatch' => 'Ha nincs email címed, vagy nem egyezik meg a rendszerben levővel, vedd fel a kapcsolatot az őrsvezetőddel.',
                    'noScoutIsSelected' => 'Nincs tag kiválasztva!',
                ],
                'messages' => [
                    'scoutHasNoEmail' => ':name nem rendelkezik e-mail címmel!',
                    'scoutAlreadyHasUserAccount' => ':name már rendelkezik felhasználói fiókkal!',
                    'userAccountCreated' => ':name cserkésznek létrejött a felhasználói fiókja!',
                ]
            ],
            'organizationUnitFrontend' => [
                'name' => 'Szervezeti Egység Frontend',
                'description' => 'Megyjeleníti egy szerevezeti egyszég frontend oldalát.'
            ],
        ],
        'oauth' => [
            'onlyExistingUsersCanLogin'         => 'Jelenleg csak létező felhasználók léphetnek be oAuth-al!',
            'canNotRegisterLoginWithoutEmail'   => 'Nincs e-mail cím a visszatérített adatok között!',
            'canNotFindScoutWithEmail'          => 'Nem található cserkész a visszatérített e-mail címmel!',
            'scoutAlreadyHasUserAccount'        => 'A cserkész már rendelkezik felhasználói fiókkal!',
            'canNotFindUser'                    => 'A felhasználói fiók nem található!',
            'userIdAndScoutUserIdMismatch'      => 'A cserkészhez csatolt- és a visszatérített felhasználói fiók nem egyezik!',
        ],
    ]
];
