<?php

/**
 * BaseGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_id
 * @property string $group_name
 * @property string $alias
 * @property integer $total_group_numbers
 * @property string $start_date
 * @property string $end_date
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property Tournament $Tournament
 * @property Doctrine_Collection $groupGroupMembers
 * @property Doctrine_Collection $groupMatchParticipants
 * @property Doctrine_Collection $MatchResult
 * @property Doctrine_Collection $groupMatchTables
 * @property Doctrine_Collection $User
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('musms_tbl_groups');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('group_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('total_group_numbers', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasMany('GroupMembers as groupGroupMembers', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('MatchParticipants as groupMatchParticipants', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('MatchResult', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('MatchTable as groupMatchTables', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('User', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}