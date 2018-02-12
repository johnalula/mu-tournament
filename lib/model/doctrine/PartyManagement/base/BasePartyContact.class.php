<?php

/**
 * BasePartyContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $party_id
 * @property string $party_token_id
 * @property string $address_one
 * @property string $address_two
 * @property integer $country
 * @property integer $identification_type
 * @property string $identification_number
 * @property string $mobile_number
 * @property string $home_phone_number
 * @property string $pobox
 * @property string $email
 * @property string $website
 * @property string $photo
 * @property string $photo_file_path
 * @property boolean $default_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property string $type
 * @property Party $Party
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePartyContact extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('musms_tbl_party_contact_address');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('from_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('to_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('party_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('party_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('address_one', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('address_two', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('country', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('identification_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('identification_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('mobile_number', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('home_phone_number', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('pobox', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('website', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('photo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('photo_file_path', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('default_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->setSubClasses(array(
             'PersonalContact' => 
             array(
              'type' => 1,
             ),
             'CompanyContact' => 
             array(
              'type' => 3,
             ),
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