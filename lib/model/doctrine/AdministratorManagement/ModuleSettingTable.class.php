<?php

/**
 * ModuleSettingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ModuleSettingTable extends PluginModuleSettingTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ModuleSettingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ModuleSetting');
    }
}