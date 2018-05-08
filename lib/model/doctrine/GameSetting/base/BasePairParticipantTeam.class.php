<?php

/**
 * BasePairParticipantTeam
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property TournamentGroupParticipantTeam $TournamentGroupParticipantTeam
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePairParticipantTeam extends TournamentMatchParticipantTeam
{
    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TournamentGroupParticipantTeam', array(
             'local' => 'opponent_group_participant_team_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}