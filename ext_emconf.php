<?php
$EM_CONF[$_EXTKEY] = array (
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
  array (
    'depends' => 
    array (
      'typo3' => '10.3.99-10.4.99',
      'php' => '7.1.0-7.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => '',
  'suggests' => 
  array (
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'NamelessCoder\\DashboardInToolbar\\' => 'Classes/',
    ),
  )
);
