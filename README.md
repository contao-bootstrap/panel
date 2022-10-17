Contao-Bootstrap Panel
======================

[![Version](http://img.shields.io/packagist/v/contao-bootstrap/panel.svg?style=for-the-badge&label=Latest)](http://packagist.org/packages/contao-bootstrap/panel)
[![GitHub issues](https://img.shields.io/github/issues/contao-bootstrap/panel.svg?style=for-the-badge&logo=github)](https://github.com/contao-bootstrap/panel/issues)
[![License](http://img.shields.io/packagist/l/contao-bootstrap/panel.svg?style=for-the-badge&label=License)](http://packagist.org/packages/contao-bootstrap/panel)
[![Build Status](https://img.shields.io/github/workflow/status/contao-bootstrap/panel/Code%20Quality%20Diagnostics/master?style=for-the-badge)](https://github.com/contao-bootstrap/panel/actions/workflows/diagnostics.yml)
[![Downloads](http://img.shields.io/packagist/dt/contao-bootstrap/panel.svg?style=for-the-badge&label=Downloads)](http://packagist.org/packages/contao-bootstrap/panel)

This extension provides Bootstrap integration into Contao.

Contao-Bootstrap is a modular integration. This extension provides the bootstrap panel into Contao. It uses the default
accordion element of Contao and extends it with an accordeon group element.


Changelog
---------

See [changelog](CHANGELOG.md)


Requirements
------------

 - PHP ^7.4 || ^8.0
 - Contao ^4.9


Install
-------

### Managed edition

When using the managed edition it's pretty simple to install the package. Just search for the package in the
Contao Manager and install it. Alternatively you can use the CLI.

```bash
# Using the contao manager
$ php contao-manager.phar.php composer require contao-bootstrap/panel~2.0

# Using composer directly
$ php composer.phar require contao-bootstrap/panel~2.0

```

### Symfony application

If you use Contao in a symfony application without contao/manager-bundle, you have to register following bundles
manually:

```php

class AppKernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Contao\CoreBundle\HttpKernel\Bundle\ContaoModuleBundle('metapalettes', $this->getRootDir()),
            new Netzmacht\Contao\Toolkit\Bundle\NetzmachtContaoToolkitBundle(),
            new ContaoBootstrap\Core\ContaoBootstrapCoreBundle(),
            new ContaoBootstrap\Grid\ContaoBootstrapPanelBundle()
        ];
    }
}

```
