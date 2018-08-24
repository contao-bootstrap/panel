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

use Contao\StringUtil;

/**
 * Class PanelStartElement
 */
final class PanelStartElement extends AbstractPanelElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $templateName = 'ce_bs_panel_start';

    /**
     * {@inheritDoc}
     */
    protected function prepareTemplateData(array $data): array
    {
        $data  = parent::prepareTemplateData($data);
        $cssId = $data['cssId'] ?: 'panel-' . $this->get('id');

        $data['expanded']   = (bool) $this->get('bs_expanded');
        $data['headingId']  = $cssId . '-heading';
        $data['collapseId'] = $cssId . '-collapse';
        $data['groupId']    = $this->getGroupId();

        return $data;
    }

    /**
     * Get the panel group id.
     *
     * @return string
     */
    private function getGroupId(): ?string
    {
        $group = $this->getPanelGroup();
        if (!$group) {
            return null;
        }

        $cssID = StringUtil::deserialize($group->cssID, true);
        if ($cssID[0] != '') {
            return (string) $cssID[0];
        }

        return 'panel-group-' . $group->id;
    }
}
