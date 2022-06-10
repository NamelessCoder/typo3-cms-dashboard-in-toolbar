<?php

(function() {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1587299983] = \NamelessCoder\DashboardInToolbar\DashboardToolbarItem::class;

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)->registerIcon(
        'dashboard-toolbar-item',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:dashboard_in_toolbar/Resources/Public/Icons/DashboardToolbarItem.svg']
    );


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:dashboard_in_toolbar/Configuration/TsConfig/User/HideDashboard.tsconfig">');


})();

