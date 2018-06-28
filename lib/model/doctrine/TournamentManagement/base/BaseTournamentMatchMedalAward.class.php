<?php

/**
 * BaseTournamentMatchMedalAward
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $tournament_id
 * @property integer $sport_game_category_id
 * @property string $tournament_medal_award_number
 * @property string $tournament_medal_award_full_number
 * @property boolean $completed_flag
 * @property string $effective_date
 * @property string $start_date
 * @property string $end_date
 * @property boolean $active_flag
 * @property integer $process_status
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property Organization $Organization
 * @property Tournament $Tournament
 * @property GameCategory $GameCategory
 * @property Doctrine_Collection $tournamentMatchMedalAwardTeamAwards
 * @property Doctrine_Collection $tournamentMatchTeamMedalAwardParticipants
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentMatchMedalAward extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_match_medal_award');
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
        $this->hasColumn('sport_game_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_medal_award_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_medal_award_full_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('completed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('start_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('end_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
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
        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Tournament', array(
             'local' => 'tournament_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('GameCategory', array(
             'local' => 'sport_game_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMatchTeamMedalAward as tournamentMatchMedalAwardTeamAwards', array(
             'local' => 'id',
             'foreign' => 'tournament_match_medal_award_id'));

        $this->hasMany('TournamentMatchTeamMedalAwardParticipant as tournamentMatchTeamMedalAwardParticipants', array(
             'local' => 'id',
             'foreign' => 'tournament_match_medal_award_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}