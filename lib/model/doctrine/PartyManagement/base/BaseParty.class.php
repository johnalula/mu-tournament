<?php

/**
 * BaseParty
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property integer $parent_id
 * @property string $name
 * @property string $alias
 * @property string $party_code_number
 * @property boolean $parent_flag
 * @property boolean $super_parent_flag
 * @property boolean $default_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property boolean $trashed_flag
 * @property string $trashed_on
 * @property clob $description
 * @property string $type
 * @property integer $representative_id
 * @property string $title
 * @property string $middle_name
 * @property string $last_name
 * @property string $full_name
 * @property integer $gender
 * @property string $date_of_birth
 * @property string $place_of_birth
 * @property integer $religion
 * @property integer $ethnicity
 * @property integer $nationality
 * @property string $access_activation_key
 * @property Party $Party
 * @property Doctrine_Collection $parentPartys
 * @property Doctrine_Collection $partyRoles
 * @property Doctrine_Collection $partyRelationships
 * @property Doctrine_Collection $partyContactAddresses
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParty extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_party');
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
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('party_code_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('parent_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('super_parent_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
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
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('representative_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('middle_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('last_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('full_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('gender', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('date_of_birth', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('place_of_birth', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('religion', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('ethnicity', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nationality', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('access_activation_key', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));

        $this->setSubClasses(array(
             'Organization' => 
             array(
              'type' => 1,
             ),
             'Person' => 
             array(
              'type' => 2,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Party', array(
             'local' => 'parent_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Party as parentPartys', array(
             'local' => 'id',
             'foreign' => 'parent_id'));

        $this->hasMany('PartyRole as partyRoles', array(
             'local' => 'id',
             'foreign' => 'party_id'));

        $this->hasMany('PartyRelationship as partyRelationships', array(
             'local' => 'id',
             'foreign' => 'party_id'));

        $this->hasMany('PartyContact as partyContactAddresses', array(
             'local' => 'id',
             'foreign' => 'party_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}