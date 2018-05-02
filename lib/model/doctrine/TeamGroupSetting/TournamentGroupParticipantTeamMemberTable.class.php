<?php

/**
 * TournamentGroupParticipantTeamMemberTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentGroupParticipantTeamMemberTable extends PluginTournamentGroupParticipantTeamMemberTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentGroupParticipantTeamMemberTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentGroupParticipantTeamMember');
    }
    //
   public static function processNew ( $_orgID, $_orgTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_memberTeamID, $_memberTeamTokenID, $_partcipantID, $_partcipantTokenID, $_partcipantRoleID, $_memberTeamName, $_participantName, $_participantRoleID, $_entryDate, $_participantStatus, $_description, $_userID, $_userTokenID)
	{
			$_groupMemberTeamParticipant = self::processSave ( $_sportGameGroupID, $_sportGameGroupTokenID, $_memberTeamID, $_memberTeamTokenID, $_partcipantID, $_partcipantTokenID, $_partcipantRoleID, $_memberTeamName, $_participantName, $_participantRoleID, $_entryDate, $_participantStatus, $_description );
		
		return $_groupMemberTeamParticipant;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_sportGameGroupID, $_sportGameGroupTokenID, $_memberTeamID, $_memberTeamTokenID, $_partcipantID, $_partcipantTokenID, $_partcipantRoleID, $_memberTeamName, $_participantName, $_participantRoleID, $_entryDate, $_participantStatus, $_description )
	{
    
		//try {
			//if(!$_orgID || !$_name) return false;
    
			$_token = trim($_partcipantTokenID).trim($_sportGameGroupID).trim($_sportGameGroupTokenID).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TournamentGroupParticipantTeamMember (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->sport_game_group_id = trim($_sportGameGroupID); 
			$_nw->sport_game_group_token_id = sha1(md5(trim($_sportGameGroupTokenID))); 
			$_nw->group_participant_team_id = trim($_memberTeamID); 
			$_nw->group_participant_team_token_id = sha1(md5(trim($_memberTeamTokenID))); 
			$_nw->team_member_participant_id = trim($_partcipantID); 
			$_nw->team_member_participant_token_id = sha1(md5(trim($_partcipantTokenID))); 
			$_nw->team_member_participant_role_id = trim($_partcipantRoleID); 
			$_nw->start_date = $_entryDate ? trim($_entryDate):trim($_startDate);
			$_nw->active_flag = false;  
			$_nw->approval_status = $_approvalStatus ? trim($_approvalStatus):TournamentCore::$_INITIATED;   
			$_nw->status = $_participantStatus ? trim($_participantStatus):TournamentCore::$_PENDING;   
			$_nw->description = SystemCore::processDescription ( (trim($_memberParticipantName).' - '.trim(TournamentCore::processGenderValue($_memberTeamName))), trim($_description) );
			$_nw->save(); 
			
			return $_nw; 
		//} catch ( Exception $e) {
	    //  return false; 
		//}
	} 
	public static function processEdit ( )
	{
		
	} 
	//
	public static function processUpdate ( )
	{
		   
	} 
	//
	public static function processDelete( ) 
   {	
		 
	}
	//
	public static function appendPartialQueryFields ( ) 
	{		
		 
	}
	//
	public static function appendCandidateQueryFields ( ) 
	{		
		 
	}
	public static function appendQueryFields ( ) 
	{		
		 $_queryFileds = "tmGrpMbrPrt.id, tmGrpMbrPrt.active_flag as activeFlag,
		 
								gmGrpMbr.id, 
								trmnTmGrp.id, 
								tmMbrPrt.id, tmMbrPrt.member_role_id as memberRoleID, 
								sprtGmGrp.id, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as contestantTeamMode, sprtGmGrp.active_flag as groupActiveFlag, sprtGmGrp.gender_category_id as groupGenderCategoryID, sprtGmGrp.start_date as matchDate,
								
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName,  sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								
								tmPrt.team_name as teamName, tmPrt.alias as teamAlias, tmPrt.country_id as teamCountry, tmPrt.team_city as teamCity, tmPrt.team_number as teamNumber, tmPrt.confirm_flag as confirmFlag,
								org.id, 
								prsn.id as personID, prsn.name as memberName, prsn.middle_name as memberMiddleName, prsn.last_name as memberLastName, prsn.full_name as memberFullName,
								
							 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember tmGrpMbrPrt") 
				->innerJoin("tmGrpMbrPrt.TournamentSportGameGroup sprtGmGrp on tmGrpMbrPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("tmGrpMbrPrt.TournamentGroupParticipantTeam gmGrpMbr on tmGrpMbrPrt.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("tmGrpMbrPrt.TeamMemberParticipant tmMbrPrt on tmGrpMbrPrt.team_member_participant_id = tmMbrPrt.id ") 
				->innerJoin("tmMbrPrt.Person prsn on tmMbrPrt.person_id = prsn.id ")  
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tmGrpMbrPrt.id DESC")
				->where("tmGrpMbrPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_teamGroupID, $_teamGroupTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("sprtGmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_gameTypeID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember tmGrpMbrPrt") 
				->innerJoin("tmGrpMbrPrt.SportGameTeamGroup gmGrpMbr on tmGrpMbrPrt.group_member_team_id = gmGrpMbr.id ") 
				->innerJoin("tmGrpMbrPrt.TeamMemberParticipant tmMbrPrt on tmGrpMbrPrt.team_member_participant_id = tmMbrPrt.id ") 
				->innerJoin("tmMbrPrt.Person prsn on tmMbrPrt.person_id = prsn.id ")  
				->innerJoin("gmGrpMbr.SportGameGroup sprtGmGrp on gmGrpMbr.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("tmGrpMbrPrt.id DESC")
				->where("tmGrpMbrPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("sprtGmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_gameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  


		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates (  $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_gameTypeID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember gmGrpMbr") 
				->innerJoin("gmGrpMbr.SportGameGroup sprtGmGrp on gmGrpMbr.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("sprtGmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_gameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 


		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	public static function processCandidateParticipants ( $_orgID=null, $_tournamentID=null, $_teamGroupID=null, $_teamID=null, $_teamTokenID=null, $_sportGameID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember tmGrpMbrPrt") 
				->innerJoin("tmGrpMbrPrt.SportGameTeamGroup gmGrpMbr on tmGrpMbrPrt.group_member_team_id = gmGrpMbr.id ") 
				->innerJoin("tmGrpMbrPrt.TeamMemberParticipant tmMbrPrt on tmGrpMbrPrt.team_member_participant_id = tmMbrPrt.id ") 
				->innerJoin("tmMbrPrt.Person prsn on tmMbrPrt.person_id = prsn.id ")  
				->innerJoin("gmGrpMbr.SportGameGroup sprtGmGrp on gmGrpMbr.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("tmGrpMbrPrt.id DESC")
				->where("tmGrpMbrPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("tmPrt.id = ? AND tmPrt.token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_teamGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);     
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("tmGrpMbrPrt.id ", $_exclusion );          
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  


		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	//
	public static function processCandidateTournamentParticipants ($_tournamentID=null, $_teamGroupID=null, $_teamID=null, $_teamTokenID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember tmGrpMbrPrt") 
				->innerJoin("tmGrpMbrPrt.SportGameTeamGroup gmGrpMbr on tmGrpMbrPrt.group_member_team_id = gmGrpMbr.id ") 
				->innerJoin("tmGrpMbrPrt.TeamMemberParticipant tmMbrPrt on tmGrpMbrPrt.team_member_participant_id = tmMbrPrt.id ") 
				->innerJoin("tmMbrPrt.Person prsn on tmMbrPrt.person_id = prsn.id ")  
				->innerJoin("gmGrpMbr.SportGameGroup sprtGmGrp on gmGrpMbr.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tmGrpMbrPrt.id DESC")
				->where("tmGrpMbrPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("tmPrt.id = ? AND tmPrt.token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("gmGrpMbr.id = ?", $_teamGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("tmGrpMbrPrt.id ", $_exclusion );          
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  


		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_teamGroupID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember tmGrpMbrPrt") 
				->innerJoin("tmGrpMbrPrt.SportGameTeamGroup gmGrpMbr on tmGrpMbrPrt.group_member_team_id = gmGrpMbr.id ") 
				->innerJoin("tmGrpMbrPrt.TeamMemberParticipant tmMbrPrt on tmGrpMbrPrt.team_member_participant_id = tmMbrPrt.id ") 
				->innerJoin("tmMbrPrt.Person prsn on tmMbrPrt.person_id = prsn.id ")  
				->innerJoin("gmGrpMbr.SportGameGroup sprtGmGrp on gmGrpMbr.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")      
				->where("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_teamGroupID, $_tokenID ));
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("trnmt.org_id = ? AND trnmt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_matchID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ") 
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeamMember sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ") 
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("sprtGmGrp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("sprtGmGrp.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	
}
