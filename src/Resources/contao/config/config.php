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

use ContaoBootstrap\Panel\Components\ContentElement\PanelGroupStartElement;
use ContaoBootstrap\Panel\Components\ContentElement\PanelGroupEndElement;
use ContaoBootstrap\Panel\Components\ContentElement\PanelStartElement;
use ContaoBootstrap\Panel\Components\ContentElement\PanelEndElement;

/*
 * Content elements
 */

$GLOBALS['TL_CTE']['bs_panel']['bs_panel_group_start'] = PanelGroupStartElement::class;
$GLOBALS['TL_CTE']['bs_panel']['bs_panel_group_end']   = PanelGroupEndElement::class;
$GLOBALS['TL_CTE']['bs_panel']['bs_panel_start']       = PanelStartElement::class;
$GLOBALS['TL_CTE']['bs_panel']['bs_panel_end']         = PanelEndElement::class;


/*
 * Wrappers
 */

$GLOBALS['TL_WRAPPERS']['start'][] = 'bs_panel_group_start';
$GLOBALS['TL_WRAPPERS']['start'][] = 'bs_panel_start';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'bs_panel_group_end';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'bs_panel_end';
