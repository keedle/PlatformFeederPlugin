<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\GPM\Response;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class PlatformFeederPlugin
 * @package Grav\Plugin
 */
class PlatformFeederPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/PlatformFeedTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new PlatformFeedTwigExtension());
    }
}
