<?php

(function() {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1587299983] = \NamelessCoder\DashboardInToolbar\DashboardToolbarItem::class;

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)->registerIcon(
        'dashboard-toolbar-item',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => 'EXT:dashboard_in_toolbar/Resources/Public/Icons/DashboardToolbarItem.svg'
        ]
    );

    if ($GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUC']['startModule'] === 'dashboard') {
        unset($GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUC']['startModule']);
    }
})();
