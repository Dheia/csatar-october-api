<?php return [
    'plugin' => [
        'name' => 'Knowledge Repository',
        'description' => 'Plugin for Knowledge Repository in the RMCSSZ\'s CSATÁR project',
        'permissions' => [
            'manageKnowledgeRepository' => 'Manage Knowledge Repository',
        ],
        'admin' => [
            'menu' => [
                'knowledgeRepository' => [
                    'knowledgeRepository' => 'Knowledge Repository',
                    'testSystem' => 'Test System',
                    'games' => 'Games',
                    'songs' => 'Songs',
                    'workPlans' => 'Work Plans',
                    'methodologies' => 'Methodologies',
                    'songTypes' => 'Song types'
                ],
                'knowledgeRepositoryParameters' => [
                    'knowledgeRepositoryParameters' => 'Knowledge Repository Parameters',
                    'gameDevelopmentGoals' => 'Game Development Goals',
                    'gameDevelopmentGoal' => 'Game Development Goal',
                    'accidentRiskLevels' => 'Accident Risk Levels',
                    'accidentRiskLevel' => 'Accident Risk Level',
                    'tools' => 'Tools',
                    'tool' => 'Tool',
                    'headCounts' => 'Head Counts',
                    'headCount' => 'Head Count',
                    'durations' => 'Durations',
                    'duration' => 'Duration',
                    'locations' => 'Locations',
                    'location' => 'Location',
                    'gameTypes' => 'Game Types',
                    'gameType' => 'Game Type',
                    'methodologyType' => 'Methodology type',
                    'methodologyTypes' => 'Methodology types',
                    'methodologyName' => 'Methodology name',
                    'methodology' => 'Methodology',
                    'ageGroup' => 'Age group',
                    'songType' => 'Song type'
                ],
            ],
            'general' => [
                'name' => 'Name',
                'note' => 'Note',
                'order' => 'Order',
                'description' => 'Description',
                'approverCsatarCode' => 'Approver',
                'proposerCsatarCode' => 'Proposer',
                'isApproved' => 'Approved',
                'minute' => 'minute',
                'link' => 'Link',
                'Attachment' => 'Attachment',
                'sortOrder' => 'Sort order',
                'version' => 'Version',
                'created_at' => 'Created at',
                'forms' => 'Forms',
                'import' => 'Import',
                'row' => 'row',
                'file' => 'File',
            ],
            'game' => [
                'game' => 'Game',
                'games' => 'Games',
                'name' => 'Name',
                'uploader' => 'Uploader',
                'approver' => 'Approver',
                'otherTools' => 'Other tool(s)',
                'attachements' => 'Attachements',
                'uploadedAt' => 'Upload date',
                'approvedAt' => 'Approval date',
                'version' => 'Version',
                'ageGroupsComment' => 'Age groups can be selected only after association is selected.',
                'gameAlreadyExists' => 'Game already exists with the name: :name!',
                'overwriteExistingGames' => 'Overwrite existing games. If checked, the existing games with the same name will be overwritten with the imported one!',
            ],
            'trialSystem' => [
                'trialSystem' => 'Trial System',
                'trialSystems' => 'Trial Systems',
                'idString' => 'Id string',
                'ageGroup' => 'Age group',
                'trialSystemCategory' => 'Category',
                'trialSystemCategories' => 'Trial system categories',
                'trialSystemTopic' => 'Topic',
                'trialSystemTopics' => 'Trial system topics',
                'trialSystemSubTopic' => 'Subtopic',
                'trialSystemSubTopics' => 'Trial system subtopics',
                'trialSystemType' => 'Type',
                'trialSystemTypes' => 'Trial system types',
                'trialSystemTrialType' => 'Trial type',
                'trialSystemTrialTypes' => 'Trial system trial types',
                'forPatrols' => 'For patrols',
                'individual' => 'Individual',
                'details' => 'Details',
                'task' => 'Task',
                'obligatory' => 'Obligatory',
                'effectiveKnowledge' => 'Effective knowledge',
                'effectiveKnowledgeOnly' => 'Import only effective knowledge column. (Trial system with the same id must exist!)',
                'effectiveKnowledgeColumn' => 'The effective knowledge column is imported only if the column name is "Effektív tudás"!',
                'trialSystemAlreadyExists' => 'Trial System already exists with the id: :id!',
                'trialSystemDoesntExist' => 'Trial System doesn\'t exist with the id: :id!',
                'overwriteExistingTrialSystems' => 'Please note that existing trial systems with the same id will be overwritten with the imported one!',
                'onlyFirstSheetNote' => 'Please note that only the first sheet will be imported!',
            ],
            'messages' => [
                'cannotFindHeadcount' => 'Cannot find headcount(s): ',
                'cannotFindDuration' => 'Cannot find duration(s): ',
                'cannotFindAgeGroup' => 'Cannot find age group(s): ',
                'cannotFindLocation' => 'Cannot find age location(s): ',
                'cannotFindGameDevelopmentGoal' => 'Cannot find game development goal(s): ',
                'cannotFindGameType' => 'Cannot find game type(s): ',
                'cannotFindTool' => 'Cannot find tool(s): ',
                'cannotFindTrialSystem' => 'Cannot find trial system(s): ',
                'cannotFindTrialSystemCategory' => 'Cannot find trial system category(ies): ',
                'cannotFindTrialSystemTopic' => 'Cannot find trial system topic(s): ',
                'cannotFindTrialSystemSubTopic' => 'Cannot find trial system sub topic(s): ',
                'cannotFindTrialSystemType' => 'Cannot find trial system type(s): ',
                'cannotFindTrialSystemTrialType' => 'Cannot find trial system trial type(s): ',
                'errorsOccurred' => 'Errors occurred during import: ',
                'importSuccessful' => 'Import successful!',
            ],
            'workPlan' => [
                'workPlan' => 'Work Plan',
                'workPlans' => 'Work Plans',
                'workPlanAlreadyExistsForYear' => 'Work plan already exists for year: :year!',
                'year' => 'Year',
                'troops' => 'Active troops',
                'patrols' => 'Patrols list',
                'frameStory' => 'Frame story',
                'teamNotes' => 'Team notes',
                'teamGoals' => 'Team goals',
                'teamLeader' => 'Team leader',
                'deputyTeamLeaders' => 'Deputy team leader(s)',
            ],
        ],
        'components' => [
            'gameForm' => [
                'name' => 'Game Form',
                'description' => 'Game Form component',
            ],
        ],
    ],
];