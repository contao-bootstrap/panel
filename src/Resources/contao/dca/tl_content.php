<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

/*
 * Palettes
 */

// buttons palette
// panel palettes
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bootstrap_accordionGroupStart extends _bootstrap_default_'] = array();
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bootstrap_accordionGroupEnd extends _bootstrap_default_'] = array();

\MetaPalettes::appendFields('tl_content', 'accordionStart', 'moo', array('bootstrap_collapseIn'));
\MetaPalettes::appendFields('tl_content', 'accordionStop', 'moo', array('bootstrap_collapseIn'));

/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['bootstrap_collapseIn'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_collapseIn'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'default'   => false,
    'eval'      => array('tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default ''",
);
