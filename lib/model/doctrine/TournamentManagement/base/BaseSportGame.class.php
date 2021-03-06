<?php

/**
 * BaseSportGame
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $sport_game_category_id
 * @property integer $distance_type
 * @property string $name
 * @property string $alias
 * @property integer $game_distance
 * @property integer $game_distance_measurement
 * @property string $sport_game_number
 * @property integer $sport_game_type_mode
 * @property integer $contestant_mode
 * @property integer $team_contestants_per_game_mode
 * @property integer $contestant_team_mode
 * @property integer $jump_type_mode
 * @property integer $throw_type_mode
 * @property integer $win_result_table_point
 * @property integer $draw_result_table_point
 * @property integer $loose_result_table_point
 * @property integer $result_ranking_mode
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property integer $number_of_contestants_per_track_mode
 * @property boolean $enable_fixed_contestant_per_track_flag
 * @property boolean $enable_player_mode_flag
 * @property boolean $roundable_flag
 * @property boolean $default_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property GameCategory $GameCategory
 * @property Organization $Organization
 * @property Doctrine_Collection $sportGameTeamPartcipation
 * @property Doctrine_Collection $sportGameSportGameGroups
 * @property Doctrine_Collection $sportGameMatchFixtures
 * @property Doctrine_Collection $sportGameParticipantTeamStandingDetails
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSportGame extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_sport_game');
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
        $this->hasColumn('sport_game_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('distance_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('game_distance', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('game_distance_measurement', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sport_game_number', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('sport_game_type_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('contestant_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_contestants_per_game_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('contestant_team_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('jump_type_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('throw_type_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('win_result_table_point', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('draw_result_table_point', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('loose_result_table_point', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('result_ranking_mode', 'integer', null, array(
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
        $this->hasColumn('number_of_contestants_per_track_mode', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enable_fixed_contestant_per_track_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('enable_player_mode_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('roundable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
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
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('GameCategory', array(
             'local' => 'sport_game_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TeamGameParticipation as sportGameTeamPartcipation', array(
             'local' => 'id',
             'foreign' => 'sport_game_id'));

        $this->hasMany('SportGameGroup as sportGameSportGameGroups', array(
             'local' => 'id',
             'foreign' => 'sport_game_id'));

        $this->hasMany('TournamentMatchFixture as sportGameMatchFixtures', array(
             'local' => 'id',
             'foreign' => 'sport_game_id'));

        $this->hasMany('TournamentParticipantTeamMedalStandingDetail as sportGameParticipantTeamStandingDetails', array(
             'local' => 'id',
             'foreign' => 'sport_game_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}