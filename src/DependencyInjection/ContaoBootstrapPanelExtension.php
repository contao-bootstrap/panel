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

namespace ContaoBootstrap\Panel\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class ContaoBootstrapPanelExtension.
 *
 * @package ContaoBootstrap\Panel\DependencyInjection
 */
class ContaoBootstrapPanelExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('listener.xml');
    }
}
