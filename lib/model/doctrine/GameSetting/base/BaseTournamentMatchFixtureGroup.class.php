<?php

/**
 * BaseTournamentMatchFixtureGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_match_fixture_id
 * @property string $tournament_match_fixture_token_id
 * @property integer $tournament_sport_game_group_id
 * @property string $tournament_match_group_number
 * @property string $match_venue
 * @property string $match_date
 * @property string $match_time
 * @property string $effective_date
 * @property boolean $qualified_flag
 * @property integer $qualification_status
 * @property boolean $confirmed_flag
 * @property boolean $active_flag
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property TournamentSportGameGroup $TournamentSportGameGroup
 * @property TournamentMatchFixture $TournamentMatchFixture
 * @property Doctrine_Collection $tournamentMatchFixtureGroupParticipantTeams
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentMatchFixtureGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_match_fixture_group');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_match_fixture_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_fixture_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_sport_game_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_group_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_venue', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_time', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('qualified_flag', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('qualification_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('confirmed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
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
        $this->hasOne('TournamentSportGameGroup', array(
             'local' => 'tournament_sport_game_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentMatchFixture', array(
             'local' => 'tournament_match_fixture_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMatchParticipantTeam as tournamentMatchFixtureGroupParticipantTeams', array(
             'local' => 'id',
             'foreign' => 'tournament_match_fixture_group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}