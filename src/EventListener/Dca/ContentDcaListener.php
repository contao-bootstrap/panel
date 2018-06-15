<?php

/**
 * Contao Bootstrap panel.
 *
 * @package    contao-bootstrap
 * @subpackage Panel
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2018 netzmacht David Molineus. All rights reserved.
 * @license    https://github.com/contao-bootstrap/panel/blob/master/LICENSE LGPL 3.0-or-later
 * @filesource
 */

declare(strict_types=1);

namespace ContaoBootstrap\Panel\EventListener\Dca;

use Contao\ContentModel;
use Contao\CoreBundle\Framework\Adapter;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface as ContaoFramework;
use Contao\DataContainer;

/**
 * Class ContentDcaListener
 *
 * @package ContaoBootstrap\Panel\EventListener\Dca
 */
class ContentDcaListener
{
    /**
     * Contao framework.
     *
     * @var ContaoFramework
     */
    private $framework;

    /**
     * Content repository.
     *
     * @var Adapter|ContentModel
     */
    private $repository;

    /**
     * ContentDcaListener constructor.
     *
     * @param ContaoFramework $framework Contao framework.
     */
    public function __construct(ContaoFramework $framework)
    {
        $this->framework  = $framework;
        $this->repository = $this->framework->getAdapter(ContentModel::class);
    }

    /**
     * Get the panel group options.
     *
     * @param DataContainer|null $dataContainer Data container driver.
     *
     * @return array
     */
    public function panelGroupOptions($dataContainer = null): array
    {
        $columns[] = 'tl_content.type = ?';
        $values[]  = 'bs_panel_group_start';

        if ($dataContainer) {
            $columns[] = 'tl_content.pid = ?';
            $columns[] = 'tl_content.ptable = ?';
            $columns[] = 'tl_content.sorting < ?';

            $values[] = $dataContainer->activeRecord->pid;
            $values[] = $dataContainer->activeRecord->ptable;
            $values[] = $dataContainer->activeRecord->sorting;
        }

        $collection = $this->repository->findBy($columns, $values, ['order' => 'tl_content.sorting ASC']);
        $options    = [];

        if ($collection) {
            foreach ($collection as $model) {
                $options[$model->id] = sprintf(
                    '%s [%s]',
                    $model->bs_panel_name,
                    $model->id
                );
            }
        }

        return $options;
    }

    /**
     * Generate a panel name if not given.
     *
     * @param string        $value         Panel name.
     * @param DataContainer $dataContainer Data container driver.
     *
     * @return string
     */
    public function generatePanelName($value, $dataContainer): string
    {
        if (!$value) {
            $value = 'panel_' . $dataContainer->activeRecord->id;
        }

        return $value;
    }
}
