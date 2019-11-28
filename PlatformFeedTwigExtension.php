<?php
namespace Grav\Plugin;

use Grav\Common\GPM\Response;

class PlatformFeedTwigExtension extends \Twig_Extension
{
        public function getName()
        {
                return 'PlatformFeedTwigExtension';
        }
        public function getFunctions()
        {
                return [
                        new \Twig_SimpleFunction('get_feed', [$this, 'getPlatformFeed'])
                ];
        }
        public function getPlatformFeed()
        {
                $json = Response::get('https://www.crowdproperty.com/api/stats');
                $obj = json_decode($json);
                return $json;

        }
         
}