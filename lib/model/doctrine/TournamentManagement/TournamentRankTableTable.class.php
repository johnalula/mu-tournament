<?php

/**
 * TournamentRankTableTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentRankTableTable extends PluginTournamentRankTableTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentRankTableTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentRankTable');
    }
}