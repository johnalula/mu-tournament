<?php

/**
 * SystemConfigTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SystemConfigTable extends PluginSystemConfigTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SystemConfigTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SystemConfig');
    }
}