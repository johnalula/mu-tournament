<?php

/**
 * PairParticipantTeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PairParticipantTeamTable extends PluginPairParticipantTeamTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PairParticipantTeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PairParticipantTeam');
    }
}