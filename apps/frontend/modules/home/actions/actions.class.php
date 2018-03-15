<?php

/**
 * home actions.
 *
 * @package    mu-TMS
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{
		//$this->_manusctiptJournals = ArticleJournalTable::processCandidates ( $_authorID, $_manuscriptCode, $_status );
		//$this->_manusctiptJournals = ArticleJournalTable::processActiveCandidates ( $_authorID, ManuscriptJournalCore::$_ACTIVE);
		$this->_tournamentMatchs = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  );
		$this->_participantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		$this->_tournamentGames = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		$this->_matchFixtures = MatchFixtureTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  ) ;
	}
	
}
