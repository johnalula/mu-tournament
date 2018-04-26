<?php

/**
 * PairParticipantTeam form base class.
 *
 * @method PairParticipantTeam getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePairParticipantTeamForm extends TournamentMatchParticipantTeamForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('pair_participant_team[%s]');
  }

  public function getModelName()
  {
    return 'PairParticipantTeam';
  }

}
