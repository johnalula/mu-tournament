<?php

/**
 * BaseTournamentSportGameGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_id
 * @property integer $tournament_team_group_id
 * @property string $tournament_team_group_token_id
 * @property integer $sport_game_id
 * @property string $sport_game_token_id
 * @property integer $gender_category_id
 * @property string $group_code
 * @property string $group_name
 * @property integer $group_number
 * @property string $alias
 * @property integer $total_group_members
 * @property integer $number_of_teams_per_group
 * @property integer $number_of_participants_per_group
 * @property integer $contestant_team_mode
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $group_team_number_mandatory_flag
 * @property boolean $complete_flag
 * @property boolean $active_flag
 * @property boolean $confirmed_flag
 * @property boolean $competition_flag
 * @property integer $confirmed_status
 * @property integer $competition_status
 * @property integer $process_status
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property string $type
 * @property Tournament $Tournament
 * @property TournamentTeamGroup $TournamentTeamGroup
 * @property SportGame $SportGame
 * @property Doctrine_Collection $tournamentSportGameTeamGroups
 * @property Doctrine_Collection $tournamentSportGameGroupMatchFixtureGroups
 * @property Doctrine_Collection $tournamentSportGameGroupMatchParticipant
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentSportGameGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_sport_game_group');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_team_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_team_group_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('sport_game_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('gender_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('group_code', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('group_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('group_number', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('total_group_members', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('number_of_teams_per_group', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('number_of_participants_per_group', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('contestant_team_mode', 'integer', null, array(
             'type' => 'integer',
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
        $this->hasColumn('group_team_number_mandatory_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('complete_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirmed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('competition_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirmed_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('competition_status', 'integer', null, array(
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
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->setSubClasses(array(
             'MultipleContestantTeamGroup' => 
             array(
              'type' => 1,
             ),
             'PairContestantTeamGroup' => 
             array(
              'type' => 2,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tournament', array(
             'local' => 'tournament_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentTeamGroup', array(
             'local' => 'tournament_team_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('SportGame', array(
             'local' => 'sport_game_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentGroupParticipantTeam as tournamentSportGameTeamGroups', array(
             'local' => 'id',
             'foreign' => 'tournament_sport_game_group_id'));

        $this->hasMany('TournamentMatchFixtureGroup as tournamentSportGameGroupMatchFixtureGroups', array(
             'local' => 'id',
             'foreign' => 'tournament_sport_game_group_id'));

        $this->hasMany('TournamentMatchParticipantTeam as tournamentSportGameGroupMatchParticipant', array(
             'local' => 'id',
             'foreign' => 'tournament_sport_game_group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}