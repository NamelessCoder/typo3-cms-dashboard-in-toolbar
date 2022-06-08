<?php
$EM_CONF['dashboard_in_toolbar'] = [
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
      'typo3' => '10.3.99-11.5.99',
      'php' => '7.1.0-8.1.99',
    ],
    'conflicts' => 
    [
    ],
    'suggests' => 
    [
    ],
  ],
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
