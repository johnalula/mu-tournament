<?php

/**
 * BaseTournamentGroupParticipantTeam
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_id
 * @property integer $tournament_sport_game_group_id
 * @property string $tournament_sport_game_group_token_id
 * @property integer $team_game_participation_id
 * @property integer $team_id
 * @property string $team_token_id
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $confirmed_flag
 * @property boolean $active_flag
 * @property boolean $completed_flag
 * @property boolean $qualified_flag
 * @property integer $qualification_status
 * @property integer $confirmed_status
 * @property integer $process_status
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property Tournament $Tournament
 * @property TeamGameParticipation $TeamGameParticipation
 * @property Team $Team
 * @property TournamentSportGameGroup $TournamentSportGameGroup
 * @property Doctrine_Collection $sportGameTeamGroupMatchTeamParticipantTeams
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentGroupParticipantTeam extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_group_participant_team');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_sport_game_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_sport_game_group_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_game_participation_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('start_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('end_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('confirmed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('completed_flag', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('qualified_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('qualification_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('confirmed_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('process_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('approval_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tournament', array(
             'local' => 'tournament_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TeamGameParticipation', array(
             'local' => 'team_game_participation_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Team', array(
             'local' => 'team_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentSportGameGroup', array(
             'local' => 'tournament_sport_game_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMatchParticipantTeam as sportGameTeamGroupMatchTeamParticipantTeams', array(
             'local' => 'id',
             'foreign' => 'group_participant_team_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}