<?php

/**
 * BaseSystemLogFile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $user_id
 * @property integer $module_id
 * @property string $action_date
 * @property string $action_time
 * @property clob $action_data
 * @property integer $action_type_id
 * @property string $host_name
 * @property string $document_root
 * @property string $php_self
 * @property string $pc_ip_address
 * @property string $browser_type
 * @property string $effective_date
 * @property clob $description
 * @property User $User
 * @property Organization $Organization
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSystemLogFile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_system_log_file');
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
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('action_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('action_time', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('action_data', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('action_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('host_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('document_root', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('php_self', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('pc_ip_address', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('browser_type', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
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
        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Organization', array(
             'local' => 'org_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}