<?php

/**
 * TournamentTeamGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentTeamGroupTable extends PluginTournamentTeamGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentTeamGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentTeamGroup');
    }
}