<?php

/**
 * TournamentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentTable extends PluginTournamentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Tournament');
    }
}