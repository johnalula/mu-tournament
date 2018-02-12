<?php

/**
 * BaseTeamDetail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $team_id
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property Team $Team
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeamDetail extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('musms_tbl_team_detail');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_id', 'integer', null, array(
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

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}