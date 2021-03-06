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

use Contao\StringUtil;
use function is_string;

/**
 * Class AbstractPanelStartElement
 */
abstract class AbstractPanelStartElement extends AbstractPanelElement
{
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
        if (is_string($cssID[0]) && $cssID[0] !== '') {
            return $cssID[0];
        }

        return 'panel-group-' . $group->id;
    }
}
