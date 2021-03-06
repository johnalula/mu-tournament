<?php

/**
 * BaseTeam
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $tournament_id
 * @property string $tournament_token_id
 * @property integer $country_id
 * @property string $team_number
 * @property string $team_name
 * @property string $alias
 * @property string $team_full_alias
 * @property string $team_city
 * @property string $total_member
 * @property string $team_logo_alias
 * @property string $team_logo_file_type
 * @property string $team_logo_file_name
 * @property string $team_logo_file_name_path
 * @property string $team_logo_file_full_path
 * @property string $team_country_flag_alias
 * @property string $team_country_flag_file_type
 * @property string $team_country_flag_file_name
 * @property string $team_country_flag_file_name_path
 * @property string $team_country_flag_file_full_path
 * @property integer $standing_rank
 * @property integer $gold_medal
 * @property integer $silver_medal
 * @property integer $bronze_medal
 * @property integer $total_medal_award
 * @property string $start_date
 * @property string $end_date
 * @property boolean $grouped_flag
 * @property boolean $confirmed_flag
 * @property boolean $active_flag
 * @property integer $confirmed_status
 * @property integer $status
 * @property clob $description
 * @property Organization $Organization
 * @property Tournament $Tournament
 * @property Doctrine_Collection $teamGameParticipations
 * @property Doctrine_Collection $teamMemberParticipants
 * @property Doctrine_Collection $teamsTeamDetails
 * @property Doctrine_Collection $teamGroupMembers
 * @property Doctrine_Collection $teamTournamentParticipantTeamStandings
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeam extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_participant_teams');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('org_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('org_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('country_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_number', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('team_full_alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('team_city', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('total_member', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('team_logo_alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('team_logo_file_type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_logo_file_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_logo_file_name_path', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_logo_file_full_path', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_country_flag_alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('team_country_flag_file_type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_country_flag_file_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_country_flag_file_name_path', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('team_country_flag_file_full_path', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('standing_rank', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('gold_medal', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('silver_medal', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('bronze_medal', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('total_medal_award', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('start_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('end_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('grouped_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirmed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirmed_status', 'integer', null, array(
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
        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tournament', array(
             'local' => 'tournament_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TeamGameParticipation as teamGameParticipations', array(
             'local' => 'id',
             'foreign' => 'team_id'));

        $this->hasMany('TeamMemberParticipant as teamMemberParticipants', array(
             'local' => 'id',
             'foreign' => 'team_id'));

        $this->hasMany('TeamDetail as teamsTeamDetails', array(
             'local' => 'id',
             'foreign' => 'team_id'));

        $this->hasMany('TournamentGroupParticipantTeam as teamGroupMembers', array(
             'local' => 'id',
             'foreign' => 'team_id'));

        $this->hasMany('TournamentParticipantTeamMedalStanding as teamTournamentParticipantTeamStandings', array(
             'local' => 'id',
             'foreign' => 'team_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}