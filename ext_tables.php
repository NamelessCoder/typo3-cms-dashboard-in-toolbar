<?php

if (\TYPO3\CMS\Core\Utility\GeneralUtility::_GET('route') !== '/module/dashboard') {
    unset($GLOBALS['TBE_MODULES']['dashboard']);

}
