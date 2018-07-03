<?php

/**
 * BaseTournamentMatchParticipantTeam
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $tournament_match_id
 * @property integer $tournament_match_fixture_id
 * @property string $tournament_match_fixture_token_id
 * @property integer $tournament_match_fixture_group_id
 * @property string $tournament_match_fixture_group_token_id
 * @property integer $tournament_sport_game_group_id
 * @property integer $group_participant_team_id
 * @property string $group_participant_team_token_id
 * @property integer $match_result_point
 * @property integer $match_result_score
 * @property datetime $match_result_time
 * @property integer $red_card_number
 * @property integer $yellow_card_number
 * @property integer $match_result_winner_point
 * @property integer $match_result_loser_point
 * @property integer $standing_rank
 * @property integer $gold_medal
 * @property integer $silver_medal
 * @property integer $bronze_medal
 * @property integer $total_medal_award
 * @property string $effective_date
 * @property boolean $qualified_flag
 * @property boolean $confirmed_flag
 * @property boolean $active_flag
 * @property boolean $competition_flag
 * @property boolean $medal_award_flag
 * @property integer $qualification_status
 * @property integer $competition_status
 * @property integer $process_status
 * @property integer $approval_status
 * @property integer $status
 * @property clob $description
 * @property string $type
 * @property TournamentMatch $TournamentMatch
 * @property TournamentGroupParticipantTeam $TournamentGroupParticipantTeam
 * @property TournamentMatchFixture $TournamentMatchFixture
 * @property TournamentMatchFixtureGroup $TournamentMatchFixtureGroup
 * @property TournamentSportGameGroup $TournamentSportGameGroup
 * @property Doctrine_Collection $tournamentMatchParticipantTeamMemberParticipants
 * @property Doctrine_Collection $tournamentMatchParticipantTeamMedalAwards
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTournamentMatchParticipantTeam extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mutms_tbl_tournament_match_participant_team');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_match_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_fixture_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_fixture_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_match_fixture_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tournament_match_fixture_group_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('tournament_sport_game_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('group_participant_team_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('group_participant_team_token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('match_result_point', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_result_score', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_result_time', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('red_card_number', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('yellow_card_number', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_result_winner_point', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('match_result_loser_point', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('standing_rank', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('gold_medal', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('silver_medal', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('bronze_medal', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('total_medal_award', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('qualified_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('confirmed_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('active_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('competition_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('medal_award_flag', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('qualification_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('competition_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('process_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('approval_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->setSubClasses(array(
             'MultipleParticipantTeam' => 
             array(
              'type' => 1,
             ),
             'PairParticipantTeam' => 
             array(
              'type' => 2,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TournamentMatch', array(
             'local' => 'tournament_match_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentGroupParticipantTeam', array(
             'local' => 'group_participant_team_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentMatchFixture', array(
             'local' => 'tournament_match_fixture_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentMatchFixtureGroup', array(
             'local' => 'tournament_match_fixture_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TournamentSportGameGroup', array(
             'local' => 'tournament_sport_game_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('TournamentMatchTeamMemberParticipant as tournamentMatchParticipantTeamMemberParticipants', array(
             'local' => 'id',
             'foreign' => 'tournament_match_participant_team_id'));

        $this->hasMany('TournamentMatchTeamMedalAward as tournamentMatchParticipantTeamMedalAwards', array(
             'local' => 'id',
             'foreign' => 'tournament_match_participant_team_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}