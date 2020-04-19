TYPO3 CMS: Move Dashboard link to toolbar
=========================================

This package fixes a conceptual blunder in the TYPO3 core, where the newly added "dashboard"
feature is wrongfully given a prominent placement which:

* Breaks the expected use of "Page" module as default module.
* Breaks the visual layout of the module navigation frame.

Installing this package fixes all of the above by:

* Moving the Dashboard module link to the toolbar the way it was originally intended.
