<?php

/**
 * BaseTournamentTeamGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_id
 * @property integer $sport_game_category_id
 * @property string $sport_game_category_token_id
 * @property string $group_full_code
 * @property string $group_code
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $complete_flag
 * @property boolean $active_flag
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property Tournament $Tournament
 * @property GameCategory $GameCategory
 * @property Doctrine_Collection $tournamentGroupSportGameGroups
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentTeamGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_team_group');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_category_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('group_full_code', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('group_code', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
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
        $this->hasColumn('complete_flag', 'boolean', null, array(
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
        $this->hasOne('Tournament', array(
             'local' => 'tournament_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('GameCategory', array(
             'local' => 'sport_game_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('SportGameGroup as tournamentGroupSportGameGroups', array(
             'local' => 'id',
             'foreign' => 'tournament_team_group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}