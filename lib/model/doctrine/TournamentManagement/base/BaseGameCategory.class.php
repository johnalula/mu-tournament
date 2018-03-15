<?php

/**
 * BaseGameCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property integer $category_type
 * @property string $category_name
 * @property string $alias
 * @property boolean $measurement_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property string $description
 * @property Organization $Organization
 * @property Doctrine_Collection $categorySportGames
 * @property Doctrine_Collection $gameCategoryTeamPartcipation
 * @property Doctrine_Collection $gameCategoryTournamentMatch
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGameCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_game_category');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('org_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('category_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('category_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('measurement_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasMany('SportGame as categorySportGames', array(
             'local' => 'id',
             'foreign' => 'sport_game_category_id'));

        $this->hasMany('TeamGameParticipation as gameCategoryTeamPartcipation', array(
             'local' => 'id',
             'foreign' => 'sport_game_category_id'));

        $this->hasMany('TournamentMatch as gameCategoryTournamentMatch', array(
             'local' => 'id',
             'foreign' => 'sport_game_category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}