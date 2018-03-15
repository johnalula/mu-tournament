<?php

/**
 * UserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserTable extends PluginUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object UserTable
     */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('User');
	}
	//
	public static function processNew ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description, $_userID , $_userTokenID )
	{
		if(!$_orgID || !$_userRoleID || !$_userGroupID || !$_userName) { return false; }
	
		$_user = self::processCreate ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description );
		 
		/*$_actionID = SystemCore::$_CREATE; 
		$_moduleID  = ModuleCore::$_ADMINISTRATION;  
		$_actionObject  = 'User ID: '.$_user->id;  
		$_actionDesc  = 'User Account - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_ADMINISTRATION).' ]';  
		
		$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);*/
		
		return $_user ? true:false;
	}
	//
	public static function processCreate ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID,$_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description )
	{
		$_token = trim($_userName).trim($_password).trim($_orgTokenID).rand('11111', '99999');
		$_fullPassword = strtolower(trim($_userName)).md5(sha1(trim($_userPassword)));
		
		$_nw = new User ();  
		$_nw->token_id = md5(sha1($_token));  
		$_nw->org_id = trim($_orgID);
		$_nw->org_token_id = trim($_orgTokenID);
		$_nw->person_id = trim($_partyID); 
		$_nw->person_token_id = trim($_partyTokenID); 
		$_nw->username = strtolower(trim($_userName));
		$_nw->password = md5(sha1(trim($_userPassword)));
		$_nw->full_password = md5(sha1(trim($_fullPassword)));
		$_nw->user_role_id = trim($_userRoleID); 
		if($_userGroupID) {
			$_nw->group_id = trim($_userGroupID);  
		}
		$_nw->permission_mode = trim(UserCore::$_USER_PERMISSION); 
		$_nw->access_activation_key = trim($_activationKey); 
		$_nw->status = $_userStatus ? trim($_userStatus):UserCore::$_ACTIVE; 
		$_nw->ui_theme_color_setting = $_userStatus ? trim($_userThemeColor):UserCore::$_ACTIVE; 
		$_nw->active_flag = ($_userStatus == UserCore::$_ACTIVE || $_userStatus == UserCore::$_PENDING) ? true:false; 
		$_nw->blocked_flag = $_userStatus == UserCore::$_BLOCKED ? true:false; 
		$_nw->has_activation_key_flag = $_activationKey ? true:false; 
		$_nw->has_logged_in = false; 
		$_nw->super_admin_flag = (($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR) || $_userRoleTypeID == UserCore::$_ADMINISTRATOR ) ? true:false;
		$_nw->default_super_admin_flag = ($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR ) ? true:false;
		$_nw->default_flag = ($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR ) ? true:false; 
		$_nw->description = $_description ? trim(ucfirst($_userName).' user account ('.ucfirst($_description).' )'):(ucfirst($_userName).' user account');
		$_nw->save();  
		
		return $_nw;
	} 
	//
	public static function processUpdate ( $_orgID, $_orgTokenID, $_userAccountID, $_userAccountTokenID, $_userName, $_userPassword, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userUIThemeID, $_userStatus, $_description, $_userID, $_userTokenID )
	{
		$_user = self::processObject( $_orgID, $_orgTokenID, $_userAccountID, $_userAccountTokenID );
		$_userPassword = (trim($_user->password) == trim($_userPassword)) ? trim($_userPassword):md5(sha1(trim($_userPassword)));
		$_fullPassword = md5(sha1(strtolower(trim($_userName)).trim($_userPassword)));
		
		$_qry = Doctrine_Query::create( )
				->update('User usr')  
				->set('usr.username', '?', trim($_userName)) 
				->set('usr.password', '?', trim($_userPassword)) 
				->set('usr.full_password', '?', trim($_fullPassword)) 
				->set('usr.group_id', '?', trim($_userGroupID))   
				->set('usr.status', '?', trim($_userStatus))  
				->set('usr.active_flag', '?', ($_userStatus == UserCore::$_ACTIVE) ? true:false)  
				->set('usr.ui_theme_color_setting', '?', trim($_userUIThemeID))  
				->set('usr.super_admin_flag', '?', ((($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR) || $_userRoleTypeID == UserCore::$_ADMINISTRATOR ) ? true:false))  
				->set('usr.default_super_admin_flag', '?', (($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR ) ? true:false))  
				->set('usr.default_flag', '?', (($_userRoleTypeID == UserCore::$_SUPER_ADMINISTRATOR ) ? true:false))  
				->set('usr.description', '?', trim($_description))  
				->where('usr.id = ? AND usr.token_id = ? AND usr.org_id = ? AND usr.org_token_id = ?', array($_userAccountID, $_userAccountTokenID, $_orgID, $_orgTokenID))
				->execute();	
 
		$_actionID = SystemCore::$_UPDATE; 
		$_moduleID  = ModuleCore::$_ADMINISTRATION;  
		$_actionObject  = 'User ID: '.$_userAccountID;  
		$_actionDesc  = 'User Account - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_ADMINISTRATION).' ]';  
		
		$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
		
		return ( $_qry > 0 );   
	} 
	//
	public static function processDelete( $_orgID, $_orgTokenID, $userID, $userTokenID, $_userID, $_userTokenID, $_parentID, $_parentTokenID ) 
   {	
		$q = Doctrine_Query::create ()
			->delete ('usr.*')
			->from ('User usr')
			->where('usr.id = ? AND usr.token_id = ?', array($user_id, $token_id))
			->execute ( );	
			
		$_actionID = SystemCore::$DELETE;
		$_moduleName  = ModuleCore::processModuleValue(ModuleCore::$USER_MANAGEMENT); 
		$_moduleID  = ModuleCore::$USER_MANAGEMENT;  
		$_modulePartyType  = 'Delete user ID: '.$userID;  
		
		$_flag1 = SystemLogFileTable::processCreate($_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_modulePartyType);
		
		return ( $q	> 0  );    
	}
	//
	public static function appendPartialQueryFields ( ) 
	{		
		$_queryFileds = "usr.id as userID, usr.token_id as tokenID, usr.username as userName";
		
		return $_queryFileds;
	}
	//
	public static function appendCandidateQueryFields ( ) 
	{		
		$_queryFileds = "usr.id as userID 
						";
		return $_queryFileds;
	}
	public static function appendQueryFields ( ) 
	{		
		$_queryFileds = "usr.id as userID, usr.token_id as tokenID, usr.username as userName, usr.password as password,
						usr.group_id as groupID, usr.user_role_id as userRoleID, usr.super_admin_flag as isSuperAdmin, usr.default_super_admin_flag as isDefaultSuperAdmin, usr.access_activation_key as accessActivationKey, usr.org_id as orgID, usr.org_token_id as orgTokenID, usr.person_id as personID, usr.person_token_id as personTokenID, usr.status as userStatus, usr.permission_mode as permissionMode, usr.created_at as createdAt, usr.updated_at as updatedAt, usr.active_flag as activeFlag, usr.blocked_flag as blockedFlag, usr.default_flag as defaultFlag, usr.has_logged_in as hasLoggedIn, usr.last_login_date as lastLoginDate,
						grp.name as userGroupName, grp.name as groupName, grp.id as userGroupID,
						prt.full_name as personFullName, prt.id as partyPersonID, prt.token_id as partyPersonTokenID, prt.status as personStatus, 
						org.name as organizationName, org.alias as organizationAlias,
						(prt.status=".PartyCore::$_ACTIVE.") as activePerson,
						(usr.status=".UserCore::$_ACTIVE." AND usr.active_flag=true AND usr.blocked_flag=false) as activeUser,
						(usr.status=".UserCore::$_BLOCKED." AND usr.blocked_flag=true) as blockedUser,
						(usr.status=".UserCore::$_TERMINATED." AND usr.active_flag=false AND usr.blocked_flag=true) as terminatedUser,
						(usr.super_admin_flag=true AND usr.default_flag=true AND usr.user_role_id=".UserCore::$_SUPER_ADMINISTRATOR.") as defaultSuperAdmin,
						(usr.super_admin_flag=true AND usr.default_flag=false AND usr.user_role_id=".UserCore::$_SUPER_ADMINISTRATOR.") as domainSuperAdmin,
						(usr.super_admin_flag=false AND usr.default_flag=false AND usr.user_role_id !=".UserCore::$_SUPER_ADMINISTRATOR.") as normalUser,
						(usr.user_role_id=".UserCore::$_ADMINISTRATOR.") as isAdmin,  
						usrRole.user_role_name as userRoleName, usrRole.user_role_type_id as userRoleTypeID,
						";
		return $_queryFileds;
	}
	//
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_groupID=null, $_userRole=null, $_status=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("User usr")   
				->leftJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
				->innerJoin("usr.Organization org on usr.org_id = org.id ")   
				->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
				->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ") 
				->offset($_offset)
				->limit($_limit) 
				->orderBy("usr.created_at ASC, usr.username ASC")
				->where("usr.id IS NOT NULL AND usr.trashed_flag IS NOT TRUE ");
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("usr.org_id = ? AND usr.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_userRole)) $_qry = $_qry->andWhere("usr.user_role_id = ? ", $_userRole);
				if(!is_null($_groupID)) $_qry = $_qry->andWhere("usr.group_id = ? ", $_groupID);
				if(!is_null($_status)) $_qry = $_qry->andWhere("usr.status = ? ", $_status); 
				if(!is_null($_exclusion)) { $_qry = $_qry->andWhereNotIn("usr.id", $_exclusion ); } 
				if(!is_null($_keyword))
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry=$_qry->andWhere("usr.username LIKE ? OR usr.description LIKE ? OR prt.name LIKE ?", array($_keyword,$_keyword,$_keyword));
				$_qry=$_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	//
   public static function processAll ( $_orgID, $_orgTokenID, $_groupID=null, $_userRole=null, $_status=null, $_inclusion=null, $_exclusion=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("User usr")   
				->innerJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
				->innerJoin("usr.Organization org on usr.org_id = org.id ")   
				->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
				->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ")
				->orderBy("usr.id DESC")
				->where("usr.trashed_flag IS NOT TRUE AND usr.org_id = ? AND usr.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_userRole)) $_qry = $_qry->andWhere("usr.user_role_id = ? ", $_userRole);
				if(!is_null($_groupID)) $_qry = $_qry->andWhere("usr.group_id = ? ", $_groupID);
				if(!is_null($_status)) $_qry = $_qry->andWhere("usr.status=?", $_status); 
				if(!is_null($_inclusion)) { $_qry = $_qry->andWhereIn("usr.id", $_inclusion ); } 
				if(!is_null($_exclusion)) { $_qry = $_qry->andWhereNotIn("usr.id", $_exclusion ); } 
				if(!is_null($_keyword))
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry=$_qry->andWhere("usr.username LIKE ? OR usr.description LIKE ? OR prt.name LIKE ?", array($_keyword,$_keyword,$_keyword));
				$_qry=$_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	//
   public static function processCandidates ( $_orgID, $_orgTokenID=null,  $_userRole=null, $_status=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("User usr")   
				->innerJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
				->innerJoin("usr.Organization org on usr.org_id = org.id ")   
				->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
				->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ")
				->orderBy("usr.id DESC")
				->where("usr.trashed_flag IS NOT TRUE AND usr.org_id = ? AND usr.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_userRole)) $_qry = $_qry->andWhere("usr.user_role_id = ? ", $_userRole);
				if(!is_null($_status)) $_qry = $_qry->andWhere("usr.status=?", $_status);  
				$_qry=$_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	//
   public static function processObject( $_orgID, $_orgTokenID, $_userID, $_userTokenID ) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("User usr")   
			->innerJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
			->innerJoin("usr.Organization org on usr.org_id = org.id ")   
			->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
			->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ") 
			->where("usr.id=? AND usr.token_id=? AND usr.org_id = ? AND usr.org_token_id = ?", array($_userID, $_userTokenID, $_orgID, $_orgTokenID))
			->fetchOne (array(), Doctrine_Core::HYDRATE_RECORD);
		return ( !$_qry ? null:$_qry ); 
	} 
	//
   public static function processUserObject($_orgID, $_orgTokenID, $_personID, $_personTokenID ) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("User usr")   
			->innerJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
			->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
			->where("usr.person_id=? AND usr.person_token_id=? AND usr.org_id = ? AND usr.org_token_id = ?", array($_personID, $_personTokenID, $_orgID, $_orgTokenID))
			->fetchOne (array(), Doctrine_Core::HYDRATE_RECORD);
		return ( !$_qry ? null:$_qry ); 
	} 
	//
   public static function makeObject ( $_userID, $_userTokenID ) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendPartialQueryFields())
			->from("User usr")   
			->innerJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
			->innerJoin("usr.Organization org on usr.org_id = org.id ")   
			->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
			->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ") 
			->where("usr.id=? AND usr.token_id=?", array( $_userID, $_userTokenID ))
			->fetchOne (array(), Doctrine_Core::HYDRATE_RECORD);
		return ( !$_qry ? null:$_qry ); 
	} 
	//
	public static function processLogin ( $_userName, $_password )
	{
		$_fullPassword = md5(sha1(strtolower(trim($_userName)).md5(sha1(trim($_password))))); 
		$_password = md5(sha1($_password));
		$_userName = trim($_userName); 
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("User usr")   
				->leftJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
				->innerJoin("usr.Organization org on usr.org_id = org.id ")   
				->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
				->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ") 
				->where("usr.username = ? AND usr.password = ? AND usr.full_password = ?", array($_userName, $_password, $_fullPassword))
				->andWhere("usr.active_flag IS TRUE AND usr.blocked_flag IS NOT TRUE")
				->fetchOne (array(), Doctrine_Core::HYDRATE_RECORD);
		
		return ( ! $_qry ? null : $_qry ); 
	} 
	
	//
   public static function processSystemUsers ( $_orgID=null, $_orgTokenID=null, $_groupID=null, $_status=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendCandidateQueryFields())
				->from("User usr")   
				->leftJoin("usr.UserGroup grp on usr.group_id = grp.id ")   
				->innerJoin("usr.Organization org on usr.org_id = org.id ")   
				->innerJoin("usr.Person prt on usr.person_id = prt.id ")   
				->innerJoin("usr.UserRole usrRole on usr.user_role_id = usrRole.id ") 
				->offset($_offset)
				->limit($_limit) 
				->orderBy("usr.username ASC")
				->where("usr.id IS NOT NULL AND usr.trashed_flag IS NOT TRUE ");
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("usr.org_id = ? AND usr.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_userRole)) $_qry = $_qry->andWhere("usrRole.user_role_type_id != ?", UserCore::$_STUDENT);
				//if(!is_null($_userRole)) $_qry = $_qry->andWhere("usrRole.user_role_type_id != ? AND usrRole.user_role_type_id != ? AND usrRole.user_role_type_id != ? AND usrRole.user_role_type_id != ? ", array(UserCore::$_STUDENT, UserCore::$_CLASS_TEACHER_INSTRUCTOR, UserCore::$_UNIT_LEADER_INSTRUCTOR, serCore::$_INSTRUCTOR));
				if(!is_null($_groupID)) $_qry = $_qry->andWhere("usr.group_id = ? ", $_groupID);
				if(!is_null($_status)) $_qry = $_qry->andWhere("usr.status=?", $_status); 
				if(!is_null($_exclusion)) { $_qry = $_qry->andWhereNotIn("usr.id", $_exclusion ); } 
				if(!is_null($_keyword))
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry=$_qry->andWhere("usr.username LIKE ? OR usr.description LIKE ? OR prt.name LIKE ?", array($_keyword,$_keyword,$_keyword));
				$_qry=$_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	//
   public static function processCandidateSystemUsers ( $_orgID=null, $_orgTokenID=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		
		$_exclusion = array();   
		$_candidates = self::processAll (  $_orgID, $_orgTokenID, $_groupID, $_userRole, $_status, $_inclusion, $_exclusion, $_keyword ); 
		foreach($_candidates as $_candidate) {  
			if($_candidate->grade_value_id < $_lastSchoolGradeID) {
				$_exclusion[] = $_candidate->id;  
			}
		} 
		
		return SchoolGradeTable::processSelection ( $_orgID, $_orgTokenID, $_campusID, $_exclusion, true, $_keyword, $_offset, $_limit );
		 
	}
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	
	public static function processCandidatePersonSelection ( $_orgID=null, $_orgTokenID=null, $_partyRole=null, $_exclusion=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   { 
		/*$_exclusion = array();   
		$_candidates = SchoolCoursePeriodProgramTable::processCandidateSelection ( $_orgID, $_schoolGradeClassID, $_schoolGradeCourseID, $_periodTypeValueID, $_periodProgramDayID, $_academicYearID); 
		foreach($_candidates as $_candidate) {   
			$_exclusion[] = $_candidate->school_period_type_id;   
		} */

		return PersonTable::processCandidateSelection ( $_orgID, $_orgTokenID, $_partyRole, $_exclusion, $_status, $_keyword, $_offset, $_limit );
	} 
	public static function processCandidateUserRoleSelection ( $_orgID=null, $_orgTokenID=null, $_userRoleTypeID=null, $_activeFlag=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   { 
		/*$_exclusion = array();   
		$_candidates = SchoolCoursePeriodProgramTable::processCandidateSelection ( $_orgID, $_schoolGradeClassID, $_schoolGradeCourseID, $_periodTypeValueID, $_periodProgramDayID, $_academicYearID); 
		foreach($_candidates as $_candidate) {   
			$_exclusion[] = $_candidate->school_period_type_id;   
		} */

		return UserRoleTable::processSelection ( $_orgID, md5(sha1($_orgTokenID)), $_applicableFlag, $_activeFlag, $_exclusion, $_keyword, $_offset, $_limit );
	} 
	public static function processCandidateUserGroupSelection ( $_orgID=null, $_orgTokenID=null, $_groupRoleID=null, $_activeFlag=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   { 
		/*$_exclusion = array();   
		$_candidates = SchoolCoursePeriodProgramTable::processCandidateSelection ( $_orgID, $_schoolGradeClassID, $_schoolGradeCourseID, $_periodTypeValueID, $_periodProgramDayID, $_academicYearID); 
		foreach($_candidates as $_candidate) {   
			$_exclusion[] = $_candidate->school_period_type_id;   
		} */

		return UserGroupTable::processSelection ( $_orgID, md5(sha1($_orgTokenID)), $_groupRoleID, $_activeFlag, $_status, $_keyword, $_offset, $_limit );
	} 
	
	
	/*********************************************************
	********** Candidate filtering process *******************
	**********************************************************/
	
	public static function processRoleSelection ( $_orgID, $_orgTokenID=null )
	{
		$_userRoles = UserRoleTable::processCandidates ( $_orgID, $_orgTokenID, $_userRoleTypeID );
		
		$_usrRoles = array();
		foreach( $_userRoles as $_rol) {
			if ($_rol->hasActiveUser) {
				$_usrRoles[] = $_rol->user_role_type_id;
			}
		}

		return ( count ( $_usrRoles ) <= 0 ? null : $_usrRoles );
	}
	
}
