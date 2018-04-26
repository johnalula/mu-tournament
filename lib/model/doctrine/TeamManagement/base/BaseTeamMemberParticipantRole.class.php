<?php

/**
 * BaseTeamMemberParticipantRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $team_game_participation_id
 * @property string $team_game_participation_token_id
 * @property integer $team_member_participant_id
 * @property string $team_member_participant_token_id
 * @property integer $member_role_id
 * @property integer $gender_category_id
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property TeamGameParticipation $TeamGameParticipation
 * @property TeamMemberParticipant $TeamMemberParticipant
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeamMemberParticipantRole extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_team_member_participant_role');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_game_participation_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_game_participation_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('team_member_participant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('team_member_participant_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('member_role_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('gender_category_id', 'integer', null, array(
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
        $this->hasOne('TeamGameParticipation', array(
             'local' => 'team_game_participation_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TeamMemberParticipant', array(
             'local' => 'team_member_participant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}