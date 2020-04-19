<?php
namespace NamelessCoder\DashboardInToolbar;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Backend\Toolbar\ToolbarItemInterface;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class DashboardToolbarItem implements ToolbarItemInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $pageRenderer = $this->getPageRenderer();
        $pageRenderer->addJsFooterInlineCode('dashboard-toolbar-item', 'define(["require","exports","jquery","TYPO3/CMS/Backend/ModuleMenu"],(function(e,i,t,o){"use strict";return new class{constructor(){this.selector=".toolbar-item-dashboard-link",t(()=>{this.initialize()})}initialize(){t(document).on("click",this.selector,e=>{o.App.showModule("dashboard_dashboard")})}}}));');
    }

    /**
     * @inheritDoc
     */
    public function checkAccess()
    {
        return $this->getBackendUserAuthentication()->check('modules', 'dashboard_dashboard');
    }

    /**
     * @inheritDoc
     */
    public function getItem()
    {
        return $this->getFluidTemplateObject('DashboardToolbarItem.html')->render();
    }

    /**
     * @inheritDoc
     */
    public function hasDropDown()
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function getDropDown()
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getAdditionalAttributes()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getIndex()
    {
        return 10;
    }

    /**
     * Returns a new standalone view, shorthand function
     *
     * @param string $filename Which templateFile should be used.
     * @return StandaloneView
     */
    protected function getFluidTemplateObject(string $filename): StandaloneView
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setLayoutRootPaths(['EXT:dashboard/Resources/Private/Layouts']);
        $view->setPartialRootPaths(['EXT:dashboard/Resources/Private/Partials/ToolbarItems']);
        $view->setTemplateRootPaths(['EXT:dashboard_in_toolbar/Resources/Private/Templates']);

        $view->setTemplate($filename);

        $view->getRequest()->setControllerExtensionName('Dashboard');
        return $view;
    }

    /**
     * Returns current PageRenderer
     *
     * @return PageRenderer
     */
    protected function getPageRenderer()
    {
        return GeneralUtility::makeInstance(PageRenderer::class);
    }

    /**
     * Returns the current BE user.
     *
     * @return \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
     */
    protected function getBackendUserAuthentication()
    {
        return $GLOBALS['BE_USER'];
    }
}
