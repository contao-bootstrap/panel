<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Bootstrap\Panel;

use Netzmacht\Bootstrap\Core\Bootstrap;

/**
 * Class Helper provides helper functionality for panels.
 *
 * @package Netzmacht\Bootstrap\Panel\Panel
 */
class Helper
{
    /**
     * Get current accordion group.
     *
     * @return string
     */
    public static function getGroup()
    {
        return Bootstrap::getConfigVar('runtime.accordion-group');
    }

    /**
     * Prepare the panel.
     *
     * @param \Template $template Panel template.
     *
     * @return string
     */
    public static function preparePanel(\Template $template)
    {
        self::setAccordionState($template);
        self::setPanelClass($template);

        return static::getGroup();
    }

    /**
     * Set the accordion state.
     *
     * @param \Template $template Panel template.
     *
     * @return void
     */
    public static function setAccordionState(\Template $template)
    {
        if ($template->accordion === 'accordion') {
            $template->accordion = 'collapse';
        }

        if ($template->bootstrap_collapseIn) {
            if (strpos($template->accordion, 'collapse') == false) {
                $template->accordion .= ' collapse';
            }

            $template->accordion .= ' in';
        }
    }

    /**
     * Set panel class if no class is set.
     *
     * @param \Template $template Panel template.
     *
     * @return void
     */
    public static function setPanelClass(\Template $template)
    {
        if (strpos($template->class, 'panel-') === false) {
            $template->class = 'panel-default';
        }
    }
}
