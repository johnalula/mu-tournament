<?php

/**
 * TeamGameParticipationTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TeamGameParticipationTable extends PluginTeamGameParticipationTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TeamGameParticipationTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TeamGameParticipation');
    }
}