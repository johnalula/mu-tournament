<?php

/**
 * BaseUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $user_group_role_id
 * @property string $name
 * @property integer $ui_theme_color_setting
 * @property integer $ui_language_setting
 * @property boolean $active_flag
 * @property integer $status
 * @property boolean $trashed_flag
 * @property string $trashed_on
 * @property clob $description
 * @property UserRole $UserRole
 * @property Organization $Organization
 * @property Doctrine_Collection $userGroupUsers
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_user_group');
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
        $this->hasColumn('user_group_role_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('ui_theme_color_setting', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('ui_language_setting', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('trashed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('trashed_on', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserRole', array(
             'local' => 'user_group_role_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('User as userGroupUsers', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}