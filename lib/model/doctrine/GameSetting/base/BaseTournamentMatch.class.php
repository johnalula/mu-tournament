<?php

/**
 * BaseTournamentMatch
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $tournament_id
 * @property string $tournament_token_id
 * @property integer $sport_game_category_id
 * @property string $match_number
 * @property string $match_season
 * @property integer $participant_team_mode
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $roundable_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property string $description
 * @property Organization $Organization
 * @property Tournament $Tournament
 * @property GameCategory $GameCategory
 * @property Doctrine_Collection $tournamentMatchMatchFixtures
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentMatch extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_match');
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
        $this->hasColumn('sport_game_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_season', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('participant_team_mode', 'integer', null, array(
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
        $this->hasColumn('roundable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
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

        $this->hasMany('MatchFixture as tournamentMatchMatchFixtures', array(
             'local' => 'id',
             'foreign' => 'tournament_match_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}