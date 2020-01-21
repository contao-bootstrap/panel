<?php

/**
 * Contao Bootstrap panel.
 *
 * @package    contao-bootstrap
 * @subpackage Panel
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2020 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0-or-later https://github.com/contao-bootstrap/panel/blob/master/LICENSE
 * @filesource
 */

declare(strict_types=1);

namespace ContaoBootstrap\Panel\Components\ContentElement;

/**
 * Class PanelGroupStopElement
 */
final class PanelGroupEndElement extends AbstractPanelElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $templateName = 'ce_bs_panel_group_end';

    /**
     * {@inheritdoc}
     */
    protected function renderBackendView(): string
    {
        return '';
    }
}
