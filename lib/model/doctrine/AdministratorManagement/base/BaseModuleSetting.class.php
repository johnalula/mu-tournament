<?php

/**
 * BaseModuleSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $module_type_id
 * @property string $module_name
 * @property string $alias
 * @property integer $default_access_level_type_id
 * @property boolean $enabled_flag
 * @property boolean $applicable_flag
 * @property boolean $active_flag
 * @property boolean $default_flag
 * @property boolean $trashed_flag
 * @property string $trashed_on
 * @property clob $description
 * @property Organization $Organization
 * @property Doctrine_Collection $moduleUserRoleAccessPermissions
 * @property Doctrine_Collection $moduleSettingLogFiles
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseModuleSetting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_module_setting');
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
        $this->hasColumn('module_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module_name', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('alias', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('default_access_level_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('enabled_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('applicable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
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

        $this->hasMany('AccessLevelPermission as moduleUserRoleAccessPermissions', array(
             'local' => 'id',
             'foreign' => 'module_setting_id'));

        $this->hasMany('SystemLogFile as moduleSettingLogFiles', array(
             'local' => 'id',
             'foreign' => 'module_setting_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}