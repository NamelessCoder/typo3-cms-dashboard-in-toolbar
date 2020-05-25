<?php

$EM_CONF['typo3-cms-dashboard-in-toolbar'] = [
    'title' => 'Dashboard In Toolbar',
    'description' => 'Moves the Dashboard module to the toolbar.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '1.0.0',
    'dependencies' => 'cms',
    'conflicts' => '',
    'priority' => 'bottom',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Claus Due',
    'author_email' => 'claus@namelesscoder.net',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '10.3.99-10.4.99',
                    'php' => '7.1.0-7.4.99',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
    '_md5_values_when_last_written' => '',
    'suggests' =>
        [
        ],
    'autoload' =>
        [
            'psr-4' =>
                [
                    'NamelessCoder\\DashboardInToolbar\\' => 'Classes/',
                ],
        ]
];
