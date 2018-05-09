<?php

/**
 * BaseTeamGameParticipation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $team_id
 * @property string $team_token_id
 * @property integer $sport_game_category_id
 * @property integer $sport_game_id
 * @property string $sport_game_token_id
 * @property integer $number_of_players
 * @property integer $gender_category_id
 * @property integer $event_type
 * @property integer $player_mode
 * @property boolean $grouped_flag
 * @property boolean $confirm_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property Team $Team
 * @property GameCategory $GameCategory
 * @property SportGame $SportGame
 * @property Doctrine_Collection $teamGameParticipantPersons
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeamGameParticipation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_team_game_participation');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('sport_game_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('number_of_players', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('gender_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('event_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('player_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('grouped_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirm_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
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

        $this->hasOne('GameCategory', array(
             'local' => 'sport_game_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('SportGame', array(
             'local' => 'sport_game_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TeamMemberParticipantRole as teamGameParticipantPersons', array(
             'local' => 'id',
             'foreign' => 'team_game_participation_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}