<?php

/**
 * BaseUserRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property string $user_role_name
 * @property integer $user_role_type_id
 * @property string $alias
 * @property boolean $active_flag
 * @property boolean $default_flag
 * @property boolean $trashed_flag
 * @property string $trashed_on
 * @property clob $description
 * @property Organization $Organization
 * @property Doctrine_Collection $userRoleUsers
 * @property Doctrine_Collection $userRoleUserGroups
 * @property Doctrine_Collection $userRoleAccessPermissions
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserRole extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('musms_tbl_user_role');
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
        $this->hasColumn('user_role_name', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('user_role_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('alias', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
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
        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('User as userRoleUsers', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $this->hasMany('UserGroup as userRoleUserGroups', array(
             'local' => 'id',
             'foreign' => 'user_group_role_id'));

        $this->hasMany('AccessLevelPermission as userRoleAccessPermissions', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}