<?php

/**
 * Contao Bootstrap panel.
 *
 * @package    contao-bootstrap
 * @subpackage Panel
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @author     Alexander Kehr <info@kehr-solutions.de>
 * @copyright  2014-2018 netzmacht David Molineus. All rights reserved.
 * @license    https://github.com/contao-bootstrap/panel/blob/master/LICENSE LGPL 3.0-or-later
 * @filesource
 */

declare(strict_types=1);

namespace ContaoBootstrap\Panel\Components\ContentElement;

/**
 * Class PanelGroupStartElement
 */
final class PanelGroupStartElement extends AbstractPanelElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $templateName = 'ce_bs_panel_group_start';

    /**
     * {@inheritdoc}
     */
    protected function prepareTemplateData(array $data): array
    {
        $data = parent::prepareTemplateData($data);

        if ($data['cssID'] == '') {
            $data['cssID'] = ' id="panel-group-' . $this->get('id') . '"';
        }

        return $data;
    }
}
