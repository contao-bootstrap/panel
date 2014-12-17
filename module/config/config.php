<?php

// Content elements
$GLOBALS['TL_CTE']['accordion']['bootstrap_accordionGroupStart'] = 'Netzmacht\Bootstrap\PanelAccordionGroup';
$GLOBALS['TL_CTE']['accordion']['bootstrap_accordionGroupEnd']   = 'Netzmacht\Bootstrap\Panel\AccordionGroup';

$GLOBALS['TL_WRAPPERS']['start'][] = 'bootstrap_accordionGroupStart';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'bootstrap_accordionGroupEnd';
