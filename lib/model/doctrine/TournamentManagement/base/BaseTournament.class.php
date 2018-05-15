<?php

/**
 * BaseTournament
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $org_id
 * @property string $org_token_id
 * @property string $name
 * @property string $alias
 * @property string $season
 * @property string $start_date
 * @property string $effective_date
 * @property string $end_date
 * @property boolean $default_flag
 * @property boolean $active_flag
 * @property integer $status
 * @property clob $description
 * @property Organization $Organization
 * @property Doctrine_Collection $tournamentTeams
 * @property Doctrine_Collection $tournamentSportGamesGroups
 * @property Doctrine_Collection $tournamentSportGamesTeamGroups
 * @property Doctrine_Collection $tournamentMatchs
 * @property Doctrine_Collection $tournamentMedalAwards
 * @property Doctrine_Collection $tournamentTournamentNews
 * @property Doctrine_Collection $tournamentTournamentPrograms
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournament extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament');
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
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('season', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('start_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('end_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
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

        $this->hasMany('Team as tournamentTeams', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentTeamGroup as tournamentSportGamesGroups', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentGroupParticipantTeam as tournamentSportGamesTeamGroups', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentMatch as tournamentMatchs', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentMedalAwards as tournamentMedalAwards', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentNews as tournamentTournamentNews', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $this->hasMany('TournamentProgram as tournamentTournamentPrograms', array(
             'local' => 'id',
             'foreign' => 'tournament_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}