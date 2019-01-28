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

namespace ContaoBootstrap\Panel\Components\ContentElement;

use Contao\ContentModel;
use Contao\Database\Result;
use ContaoBootstrap\Core\Helper\ColorRotate;
use Netzmacht\Contao\Toolkit\Component\Component;
use Netzmacht\Contao\Toolkit\Component\ComponentFactory;
use Netzmacht\Contao\Toolkit\Component\Exception\ComponentNotFound;
use Netzmacht\Contao\Toolkit\Routing\RequestScopeMatcher;
use Symfony\Component\Templating\EngineInterface as TemplateEngine;

/**
 * Class PanelElementFactory
 *
 * @package ContaoBootstrap\Panel\Components\ContentElement
 */
final class PanelElementFactory implements ComponentFactory
{
    /**
     * Panel element types.
     *
     * @var array
     */
    private $panelElementTypes = [
        'bs_panel_group_start' => PanelGroupStartElement::class,
        'bs_panel_group_end'   => PanelGroupEndElement::class,
        'bs_panel_start'       => PanelStartElement::class,
        'bs_panel_end'         => PanelEndElement::class,
        'bs_panel_single'      => PanelSingleElement::class,
    ];

    /**
     * Template engine.
     *
     * @var TemplateEngine
     */
    private $templateEngine;

    /**
     * Color rotate.
     *
     * @var ColorRotate
     */
    private $colorRotate;

    /**
     * Request scope matcher.
     *
     * @var RequestScopeMatcher
     */
    private $scopeMatcher;

    /**
     * PanelElementFactory constructor.
     *
     * @param TemplateEngine      $templateEngine The template engine.
     * @param ColorRotate         $colorRotate    Color rotate service.
     * @param RequestScopeMatcher $scopeMatcher   Request scope matcher.
     */
    public function __construct(
        TemplateEngine $templateEngine,
        ColorRotate $colorRotate,
        RequestScopeMatcher $scopeMatcher
    ) {
        $this->templateEngine = $templateEngine;
        $this->colorRotate    = $colorRotate;
        $this->scopeMatcher   = $scopeMatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($model): bool
    {
        if (!$model instanceof ContentModel && !($model instanceof Result)) {
            return false;
        }

        return isset($this->panelElementTypes[$model->type]);
    }

    /**
     * {@inheritdoc}
     *
     * @throws ComponentNotFound If an unsupported element type is given.
     */
    public function create($model, string $column): Component
    {
        if (!isset($this->panelElementTypes[$model->type])) {
            throw ComponentNotFound::forModel($model);
        }

        $className = $this->panelElementTypes[$model->type];

        return new $className(
            $model,
            $this->templateEngine,
            $this->colorRotate,
            $this->scopeMatcher,
            $column
        );
    }
}
