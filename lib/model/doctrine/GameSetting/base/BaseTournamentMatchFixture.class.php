<?php

/**
 * BaseTournamentMatchFixture
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_match_id
 * @property string $tournament_match_token_id
 * @property integer $parent_match_fixture_id
 * @property string $parent_match_fixture_token_id
 * @property integer $sport_game_id
 * @property string $sport_game_token_id
 * @property integer $tournament_sport_game_group_id
 * @property string $tournament_sport_game_group_token_id
 * @property integer $match_round_type_id
 * @property integer $gender_category_id
 * @property integer $match_fixture_round_mode
 * @property integer $event_type
 * @property integer $contestant_mode
 * @property integer $contestant_team_mode
 * @property string $match_venue
 * @property string $tournament_match_number
 * @property string $match_date
 * @property string $match_time
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $parent_flag
 * @property boolean $inheritable_flag
 * @property boolean $roundable_flag
 * @property boolean $active_flag
 * @property boolean $complete_flag
 * @property integer $approval_status
 * @property integer $status
 * @property string $description
 * @property TournamentMatch $TournamentMatch
 * @property SportGame $SportGame
 * @property RoundType $RoundType
 * @property TournamentMatchFixture $TournamentMatchFixture
 * @property TournamentSportGameGroup $TournamentSportGameGroup
 * @property Doctrine_Collection $matchFixtureParentFixtures
 * @property Doctrine_Collection $matchFixtureParticipants
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentMatchFixture extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_match_fixture');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_match_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('parent_match_fixture_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('parent_match_fixture_token_id', 'string', 100, array(
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
        $this->hasColumn('tournament_sport_game_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_sport_game_group_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_round_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('gender_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_fixture_round_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('event_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('contestant_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('contestant_team_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_venue', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_match_number', 'string', 100, array(
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
        $this->hasColumn('parent_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('inheritable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('roundable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('complete_flag', 'boolean', null, array(
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
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TournamentMatch', array(
             'local' => 'tournament_match_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('SportGame', array(
             'local' => 'sport_game_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('RoundType', array(
             'local' => 'match_round_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentMatchFixture', array(
             'local' => 'parent_match_fixture_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentSportGameGroup', array(
             'local' => 'tournament_sport_game_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMatchFixture as matchFixtureParentFixtures', array(
             'local' => 'id',
             'foreign' => 'parent_match_fixture_id'));

        $this->hasMany('TournamentMatchParticipantTeam as matchFixtureParticipants', array(
             'local' => 'id',
             'foreign' => 'tournament_match_fixture_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}