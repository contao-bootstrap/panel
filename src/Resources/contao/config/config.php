<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */
// Content elements
$GLOBALS['TL_CTE']['accordion']['bootstrap_accordionGroupStart'] = 'Netzmacht\Bootstrap\Panel\AccordionGroup';
$GLOBALS['TL_CTE']['accordion']['bootstrap_accordionGroupEnd']   = 'Netzmacht\Bootstrap\Panel\AccordionGroup';

$GLOBALS['TL_WRAPPERS']['start'][] = 'bootstrap_accordionGroupStart';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'bootstrap_accordionGroupEnd';
