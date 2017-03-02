<?php namespace Kitrix\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller
{
    public function supports($packageType)
    {
        return ($packageType === 'kitrix-plugin');
    }

    public function getInstallPath(PackageInterface $package)
    {
        return 'local/kitrix/plugins/'.$package->getPrettyName();
    }
}