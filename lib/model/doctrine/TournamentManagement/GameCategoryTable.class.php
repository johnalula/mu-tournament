<?php

/**
 * GameCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GameCategoryTable extends PluginGameCategoryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object GameCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GameCategory');
    }
}