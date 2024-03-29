<?php
namespace Nucleus;

class Module
{
    /**
     * load the dependencies for the module.
     */
    public function loadDependencies()
    {
        $config = [];
        $files  = glob(dirname(__DIR__).'/config/*.config.php', GLOB_BRACE);
        foreach ($files as $file) {
            $config = array_merge($config, (require $file));
        }

        foreach ($config['slim-api']['modules'] as $moduleNamespace) {
            $moduleClass = '\\'.$moduleNamespace.'\\Module';
            $module = new $moduleClass;
            $config = array_merge($config, $module->loadDependencies());
        }

        return $config;
    }
}
