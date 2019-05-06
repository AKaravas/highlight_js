<?php

namespace Vendor\HighlightJs\Hooks\PageLayoutView;

use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Fluid\View\StandaloneView;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * Contains a preview rendering for the page module of CType="highlight_js"
 */
class HighlightPreviewRenderer implements PageLayoutViewDrawItemHookInterface
{
    /**
     * Preprocesses the preview rendering of a content element of type "Foundation Accordion"
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param bool $drawItem Whether to draw the item using the default functionality
     * @param string $headerContent Header content
     * @param string $itemContent Item content
     * @param array $row Record row of tt_content
     *
     * @return void
     */
    public function preProcess(
        PageLayoutView &$parentObject,
        &$drawItem,
        &$headerContent,
        &$itemContent,
        array &$row
    )
    {
        if ($row['CType'] === 'highlight_js')  {
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('highlight_js');
            $highlightInfos = $queryBuilder
                ->select('*')
                ->from('highlight_js')
                ->where(
                    $queryBuilder->expr()->eq('tt_content', $queryBuilder->createNamedParameter($row['uid'], \PDO::PARAM_INT)),
                    $queryBuilder->expr()->eq('hidden', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)),
                    $queryBuilder->expr()->eq('deleted', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)),
                )
                ->execute()
                ->fetchAll();
            $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
            $standaloneView = $objectManager->get(StandaloneView::class);
            $templatePath = GeneralUtility::getFileAbsFileName('EXT:highlight_js/Resources/Private/Templates/Backend/Backend.html');

            $standaloneView->setFormat('html');
            $standaloneView->setTemplatePathAndFilename($templatePath);
            $standaloneView->assignMultiple([
                'highlightJs' => $highlightInfos,
                'cTypeTitle' => $parentObject->CType_labels[$row['CType']],
                ]);
            $itemContent .= $standaloneView->render();

            $drawItem = false;

        }
    }
}