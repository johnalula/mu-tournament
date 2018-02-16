<?php

/**
 * BaseMatchResult
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $match_fixture_id
 * @property integer $group_id
 * @property integer $team_id
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property MatchFixture $MatchFixture
 * @property Group $Group
 * @property Team $Team
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMatchResult extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_match_result');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_fixture_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('group_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('team_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
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
        $this->hasOne('MatchFixture', array(
             'local' => 'match_fixture_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Group', array(
             'local' => 'group_id',
             'foreign' => 'id'));

        $this->hasOne('Team', array(
             'local' => 'team_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}