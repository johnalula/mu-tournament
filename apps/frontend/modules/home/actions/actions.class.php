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
		//$_orgID = $this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		 
		//$this->_tournamentMatchs = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  );
		$this->_participantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		$this->_candidateTeams = TeamTable::processAll ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword);
		//$this->_tournamentGames = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		$this->_tournamentMatchFixtures = TournamentMatchFixtureTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  ) ;
		$this->_gameCategorys = GameCategoryTable::processCandidates ($_orgID, $_orgTokenID, $_keyword, $_activeFlag );
		//$this->_gameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 15 );;
	}
	public function executeCandidateMatchs(sfWebRequest $request)
	{
		//$this->_manusctiptJournals = ArticleJournalTable::processCandidates ( $_authorID, $_manuscriptCode, $_status );
		//$this->_manusctiptJournals = ArticleJournalTable::processActiveCandidates ( $_authorID, ManuscriptJournalCore::$_ACTIVE);
		//$this->_tournamentMatchs = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  );
		//$this->_participantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		//$this->_tournamentGames = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		//$this->_matchFixtures = MatchFixtureTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  ) ;
	}
	
	
	public function executeSelectTournamentMatchFixtures(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		//$_orgTokenID = md5(sha1(trim($orgTokenID))); 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 15;	
		
		$_matchFixtures = TournamentMatchFixtureTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, $_offset, $_limit );
		
		return $this->renderPartial('content', array('_matchFixtures' => $_matchFixtures, '_countMatchFixtures' => $_countMatchFixtures));	  
	}
	
	
	
}
