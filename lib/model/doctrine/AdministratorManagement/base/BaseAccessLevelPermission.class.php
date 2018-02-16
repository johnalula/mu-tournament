<?php

/**
 * BaseAccessLevelPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $user_role_id
 * @property integer $module_setting_id
 * @property integer $access_level
 * @property boolean $can_add
 * @property boolean $can_delete
 * @property boolean $can_edit
 * @property boolean $can_view
 * @property boolean $can_approve
 * @property clob $description
 * @property UserRole $UserRole
 * @property ModuleSetting $ModuleSetting
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAccessLevelPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_access_level_permission');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('user_role_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module_setting_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('access_level', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('can_add', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('can_delete', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('can_edit', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('can_view', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('can_approve', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserRole', array(
             'local' => 'user_role_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ModuleSetting', array(
             'local' => 'module_setting_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}