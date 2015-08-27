<?php
/**
 * User: Andreas K.
 * Date: 27.08.15 KW: 35
 */

namespace AndreasKiessling\AkFluidhtml\Controller;


class ContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @return string The rendered output
     */
    public function htmlAction()
    {
        $contentData = $this->configurationManager->getContentObject()->data;
        $source = $contentData['bodytext'];
        if (empty($source)) {
            return '';
        }

        /** @var \TYPO3\CMS\Fluid\View\StandaloneView $standaloneView */
        $standaloneView = $this->objectManager->get(
            'TYPO3\CMS\Fluid\View\StandaloneView', $this->configurationManager->getContentObject()
        );

        $standaloneView->setTemplateSource($source);
        $standaloneView->assign('page', $GLOBALS['TSFE']->page);
        $standaloneView->assign('content', $contentData);
        $standaloneView->assign('settings', $this->settings);


        return $standaloneView->render();
    }
}
