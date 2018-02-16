<?php

/**
 * BasePartyRelationship
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $party_id
 * @property integer $relationship_type
 * @property integer $position_role_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $status
 * @property boolean $default_flag
 * @property boolean $active_flag
 * @property clob $description
 * @property Party $Party
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePartyRelationship extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_party_relationship');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('party_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('relationship_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('position_role_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('from_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('to_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
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
        $this->hasOne('Party', array(
             'local' => 'party_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}