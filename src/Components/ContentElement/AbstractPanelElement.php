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

namespace ContaoBootstrap\Panel\Components\ContentElement;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\ContentModel;

/**
 * Class AbstractPanelElement
 */
abstract class AbstractPanelElement extends ContentElement
{
    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        if ($this->isBackendRequest()) {
            return $this->renderBackendView();
        }

        return parent::generate();
    }

    /**
     * Render the backend view.
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    protected function renderBackendView(): string
    {
        $template = new BackendTemplate('be_bs_panel');

        $colorRotate = static::getContainer()->get('contao_bootstrap.core.helper.color_rotate');
        $group       = $this->getPanelGroup();

        if ($group && $group !== $this->objModel) {
            $template->group = $group->bs_panel_name;
            $template->color = $colorRotate->getColor('ce:' . $group->id);
            $template->title = $this->headline;
        } else {
            $template->color = $colorRotate->getColor('ce:' . $this->id);
            $template->group = $this->type === 'bs_panel_group_start' ? $this->bs_panel_name : $this->headline;
        }

        return $template->parse();
    }

    /**
     * Check if we are in backend mode.
     *
     * @return bool
     */
    protected function isBackendRequest(): bool
    {
        $scopeMatcher   = static::getContainer()->get('contao.routing.scope_matcher');
        $currentRequest = static::getContainer()->get('request_stack')->getCurrentRequest();

        return $scopeMatcher->isBackendRequest($currentRequest);
    }

    /**
     * Get the panel group starting element.
     *
     * @return ContentModel|null
     */
    protected function getPanelGroup(): ?ContentModel
    {
        $group = ContentModel::findOneBy(
            [
                'tl_content.ptable=?',
                'tl_content.pid=?',
                '(tl_content.type = ? OR tl_content.type = ?)',
                'tl_content.sorting < ?',
            ],
            [
                $this->ptable,
                $this->pid,
                'bs_panel_group_start',
                'bs_panel_group_end',
                $this->sorting
            ],
            [
                'order' => 'tl_content.sorting DESC'
            ]
        );

        if ($group && $group->type === 'bs_panel_group_start') {
            return $group;
        }

        return null;
    }
}
