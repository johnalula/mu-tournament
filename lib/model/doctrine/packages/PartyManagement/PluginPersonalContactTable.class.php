<?php

/**
 * PluginPersonalContactTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginPersonalContactTable extends PartyContactTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginPersonalContactTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginPersonalContact');
    }
}