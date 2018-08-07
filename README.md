Contao-Bootstrap Panel
===========================

[![Build Status](http://img.shields.io/travis/contao-bootstrap/panel/master.svg?style=flat-square)](https://travis-ci.org/contao-bootstrap/panel)
[![Version](http://img.shields.io/packagist/v/contao-bootstrap/panel.svg?style=flat-square)](http://packagist.org/packages/contao-bootstrap/panel)
[![License](http://img.shields.io/packagist/l/contao-bootstrap/panel.svg?style=flat-square)](http://packagist.org/packages/contao-bootstrap/panel)
[![Downloads](http://img.shields.io/packagist/dt/contao-bootstrap/panel.svg?style=flat-square)](http://packagist.org/packages/contao-bootstrap/panel)
[![Contao Community Alliance coding standard](http://img.shields.io/badge/cca-coding_standard-red.svg?style=flat-square)](https://github.com/contao-community-alliance/coding-standard)

This extension provides Bootstrap integration into Contao. 

Contao-Bootstrap is a modular integration. This extension provides the bootstrap panel into Contao. It uses the default
accordeon element of Contao and extends it with an accordeon group element.


Changelog
---------

See [changelog](CHANGELOG.md)


Requirements
------------

 - PHP 7.1
 - Contao ~4.4


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
