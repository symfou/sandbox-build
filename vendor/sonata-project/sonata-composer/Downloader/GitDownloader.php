<?php

namespace Sonata\Composer\Downloader;

use Composer\Package\PackageInterface;

class GitDownloader extends \Composer\Downloader\GitDownloader
{
    /**
     * {@inheritDoc}
     */
    public function doUpdate(PackageInterface $initial, PackageInterface $target, $path, $url)
    {
        if (!is_dir($path . '/.git')) {
            $this->io->writeError("    Missing .git directory. Don't worry ;)");
            $this->io->writeError("      => See https://github.com/sonata-project/sonata-composer");

            $this->doDownload($initial, $path, $url);
        }

        return parent::doUpdate($initial, $target, $path, $url);
    }
}