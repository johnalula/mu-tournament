<?php

/**
 * SystemLogFileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SystemLogFileTable extends PluginSystemLogFileTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SystemLogFileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SystemLogFile');
    }
}