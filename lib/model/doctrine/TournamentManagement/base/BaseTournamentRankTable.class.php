<?php

/**
 * BaseTournamentRankTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $team_id
 * @property integer $person_id
 * @property integer $rank
 * @property integer $total_medal_award
 * @property integer $game_win
 * @property integer $game_draw
 * @property integer $game_lost
 * @property integer $goal_for
 * @property integer $goal_againest
 * @property integer $goal_difference
 * @property integer $points
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property Team $Team
 * @property Person $Person
 * @property Doctrine_Collection $tournamentRankTableMedalAwards
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentRankTable extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_rank_table');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('person_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('rank', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('total_medal_award', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('game_win', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('game_draw', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('game_lost', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('goal_for', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('goal_againest', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('goal_difference', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('points', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
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
        $this->hasOne('Team', array(
             'local' => 'team_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Person', array(
             'local' => 'person_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMedalAwards as tournamentRankTableMedalAwards', array(
             'local' => 'id',
             'foreign' => 'tournament_award_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}