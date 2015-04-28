<?php

namespace Sonata\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreFileDownloadEvent;

/**
 * Class MissingSCMPlugin
 *
 * @package Sonata\Composer
 */
class MissingSCMPlugin implements PluginInterface
{
    /**
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $dm = $composer->getDownloadManager();

        // yes, it is bad
        $r = new \ReflectionObject($dm);

        $property = $r->getProperty('downloaders');
        $property->setAccessible(true);

        $downloaders = $property->getValue($dm);

        $downloaders['git'] = new \Sonata\Composer\Downloader\GitDownloader($io, $composer->getConfig());

        $property->setValue($dm, $downloaders);
    }
}