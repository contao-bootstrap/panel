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
use Netzmacht\Bootstrap\Core\Contao\ContentElement\Wrapper;

/**
 * Accordion group content element.
 *
 * @package Netzmacht\Bootstrapgegeg
 */
class AccordionGroup extends Wrapper
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $strTemplate = 'ce_accordion_group';

    /**
     * Compile accordion group.
     *
     * @return void
     */
    protected function compile()
    {
        if ($this->wrapper->isTypeOf(Wrapper\Helper::TYPE_START)) {
            Bootstrap::setConfigVar('runtime.accordion-group', 'accordion-group-' . $this->id);

            $this->Template->groupId = Bootstrap::getConfigVar('runtime.accordion-group');
        } else {
            Bootstrap::setConfigVar('runtime.accordion-group', null);
        }
    }
}
