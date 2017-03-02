<?php namespace Kitrix\Installer;

use Composer\Composer;
use Composer\Installer\InstallationManager;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);

        /** @var $manager InstallationManager */
        $manager = $composer->getInstallationManager();
        $manager->addInstaller($installer);
    }
}