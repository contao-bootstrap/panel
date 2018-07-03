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

/**
 * Class PanelGroupStopElement
 */
class PanelGroupEndElement extends AbstractPanelElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $strTemplate = 'ce_bs_panel_group_end';

    /**
     * {@inheritdoc}
     */
    protected function compile()
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function renderBackendView(): string
    {
        return '';
    }
}
