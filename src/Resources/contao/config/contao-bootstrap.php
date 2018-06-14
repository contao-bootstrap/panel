<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

return array(
    'wrappers' => array(
        'accordion' => array(
            'start' => array
            (
                'name'           => 'bootstrap_accordionGroupStart',
                'auto-create'    => true,
                'auto-delete'    => true,
                'trigger-create' => true,
                'trigger-delete' => true,
            ),
            'stop'  => array
            (
                'name'           => 'bootstrap_accordionGroupEnd',
                'auto-create'    => true,
                'auto-delete'    => true,
                'trigger-create' => true,
                'trigger-delete' => true,
            ),
        ),
    )
);
