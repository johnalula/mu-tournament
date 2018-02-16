<?php

/**
 * BaseCodeGenerator
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property string $prefix_code
 * @property string $alias
 * @property string $initial_number
 * @property string $last_code
 * @property string $deleted_code
 * @property boolean $can_recreate_deleted
 * @property integer $code_type
 * @property boolean $has_deleted
 * @property boolean $default_flag
 * @property boolean $applicable_flag
 * @property boolean $active_flag
 * @property string $description
 * @property Organization $Organization
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCodeGenerator extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_code_generator');
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
        $this->hasColumn('prefix_code', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('alias', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('initial_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('last_code', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('deleted_code', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('can_recreate_deleted', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('code_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('has_deleted', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('applicable_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
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

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}