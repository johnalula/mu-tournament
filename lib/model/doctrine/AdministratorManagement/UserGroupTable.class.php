<?php

/**
 * UserGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserGroupTable extends PluginUserGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object UserGroupTable
     */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('UserGroup');
	}
	//
	public static function processNew ( $_orgID, $_orgTokenID, $_groupRoleID, $_userGroupName, $_activeFlag, $_description, $_userID, $_userTokenID ) 
	{
		if(!$_orgID || !$_groupRoleID || !$_userGroupName) { return false; }
	
			$_userGroup = self::processCreate ( $_orgID, $_orgTokenID, $_groupRoleID, $_userGroupName, $_activeFlag, $_description ); 
			
			/*$_moduleName  = trim(ModuleCore::processModuleValue(ModuleCore::$_ADMINISTRATION)); 
			$_modulePartyType  = 'User Role ID: '.$_nw->id;  
		
			$_flag1 = SystemLogFileTable::processCreate ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_userID, $_userTokenID, ModuleCore::$_ADMINISTRATION, SystemCore::$_CREATE, $_modulePartyType );*/
			
		return $_userGroup ? true:false;
	}
	//
	public static function processCreate ( $_orgID, $_orgTokenID, $_groupRoleID, $_userGroupName, $_activeFlag, $_description) 
	{
				
			$_token = trim($_userGroupName).trim($_orgTokenID).rand('11111', '99999'); 
			$_nw = new UserGroup ();  
			$_nw->token_id = md5(sha1($_token)); 
			$_nw->org_id = trim($_orgID); 
			$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));
			$_nw->user_group_role_id = trim($_groupRoleID);
			$_nw->name = ucwords(trim($_userGroupName));  
			$_nw->active_flag = trim($_activeFlag);   
			$_nw->status = $_status ? trim($_status):UserCore::$_ACTIVE; 
			$_nw->description = $_description ? trim(ucfirst($_userGroupName).' user group ('.ucfirst($_description).' )'):(ucfirst($_userGroupName).' user group');
			$_nw->save(); 
		
		return $_nw; 
	}
	public static function processUpdate ( $_orgID, $_orgTokenID, $_groupID, $_groupTokenID, $_groupName, $_groupRole, $_groupStatus, $_groupUITheme, $_description, $_userID, $_userTokenID, $_parentID, $_parentTokenID )
	{
		$_isActive = $_groupStatus=UserCore::$ACTIVE ? true:false;
		$_isBlocked = $_groupStatus=UserCore::$BLOCKED ? true:false;
		
		$q = Doctrine_Query::create( )
			->update('UserGroup grp')  
			->set('grp.name', '?', trim(ucwords($_groupName))) 
			->set('grp.group_role_id', '?', trim($_groupRole)) 
			->set('grp.status', '?', trim($_groupStatus))  
			->set('grp.active_flag', '?', $_isActive)  
			->set('grp.active_flag', '?', $_isBlocked)  
			->set('grp.ui_theme_color_setting', '?', trim($_groupUITheme))  
			->set('grp.description', '?', trim($_description))  
			->where('grp.id=? AND grp.token_id=? AND grp.org_id=? AND grp.org_token_id=?', array($_groupID, $_groupTokenID, $_orgID, $_orgTokenID))
			->execute();	
			return ( $q > 0 );   
	}
	public static function processDelete ($_orgID, $_orgTokenID, $_groupID, $_groupTokenID, $_userID, $_userTokenID, $_parentID, $_parentTokenID)
	{
		$_flag = true;
		$_userGroupObject = self::processObject ( $_orgID, $_orgTokenID, $_groupID, $_groupTokenID );
		$_flag = $_flag&&$_userGroupObject->makeDeletion();
		return $_flag;
	}
	//
	public static function processUserGroupStatus ( $_orgID, $_orgTokenID, $_groupID, $_groupTokenID, $_userID, $_userTokenID, $_parentID, $_parentTokenID)
	{
		$_flag = true;
		$_userGroupObject = self::processObject ( $_orgID, $_orgTokenID, $_groupID, $_groupTokenID );
		if($_userGroupObject) { 
			$_flag = $_userGroupObject->makeUserGroupStatus();
		}
		return $_flag;    
	}
	 
	public static function appendQueryFields ( ) 
	{
		$queryFileds = "grp.*,grp.token_id as tokenID, grp.name as userGroupName, grp.user_group_role_id as groupRoleID, grp.ui_theme_color_setting as groupUIThemeColor	, grp.created_at as createdAt, grp.updated_at as updatedAt, grp.active_flag as activeFlag,
		(grp.status=".UserCore::$_ACTIVE." AND grp.active_flag=true ) as activeGroup,
		(grp.status=".UserCore::$_TERMINATED." AND grp.active_flag=false ) as terminatedGroup,	
		usrRole.user_role_name as userGroupRoleName, usrRole.user_role_type_id as userRoleTypeID,
		(EXISTS (SELECT usr.id FROM User usr WHERE grp.id = usr.group_id )) as hasUserAccount,
		";
		
		return $queryFileds;
	}
	public static function processSelection ( $_orgID, $_orgTokenID, $_groupRoleID=null, $_activeFlag=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("UserGroup grp")   
			->innerJoin("grp.Organization org on grp.org_id = org.id ") 
			->innerJoin("grp.UserRole usrRole on grp.user_group_role_id = usrRole.id ") 
			->offset($_offset)
			->limit($_limit)   
			->orderBy("grp.id ASC")
			->where("grp.org_id = ? AND grp.org_token_id = ? AND grp.trashed_flag IS NOT TRUE", array($_orgID, $_orgTokenID));
			if(!is_null($_groupRole)) $q = $q->andWhere("grp.group_role_id = ? ", $_groupRoleID);
			if(!is_null($_activeFlag)) $q = $q->andWhere("grp.active_flag=?", $_activeFlag);
			if(!is_null($_status)) $q = $q->andWhere("grp.status=?", $_status);
			if(!is_null($_keyword))
				if(strcmp(trim($_keyword), "") != 0 )
					$_qry = $_qry->andWhere("grp.name LIKE ? OR grp.description LIKE ?", array($_keyword,$_keyword));
			$_qry = $_qry->execute( ); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	public static function processAll ( $_orgID, $_orgTokenID, $_groupRoleID=null, $_applicableFlag=null, $_activeFlag=null, $_status=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("UserGroup grp")   
			->innerJoin("grp.Organization org on grp.org_id = org.id ") 
			->innerJoin("grp.UserRole usrRole on grp.user_group_role_id = usrRole.id ") 
			->orderBy("grp.id ASC")
			->where("grp.org_id = ? AND grp.org_token_id = ? AND grp.trashed_flag IS NOT TRUE", array($_orgID, $_orgTokenID));
			if(!is_null($_groupRole)) $q = $q->andWhere("grp.group_role_id = ? ", $_groupRoleID);
			if(!is_null($_applicableFlag)) $q = $q->andWhere("grp.applicable_flag=?", $_applicableFlag);
			if(!is_null($_activeFlag)) $q = $q->andWhere("grp.active_flag=?", $_activeFlag);
			if(!is_null($_status)) $q = $q->andWhere("grp.status=?", $_status);
			if(!is_null($_keyword))
				if(strcmp(trim($_keyword), "") != 0 )
					$_qry = $_qry->andWhere("grp.name LIKE ? OR grp.description LIKE ?", array($_keyword,$_keyword));
			$_qry = $_qry->execute( ); 

		return (count ($_qry) <= 0 ? null:$_qry ); 
	}
	public static function processCandidate ( $_orgID=null, $_orgTokenID=null, $_groupRoleTypeID=null, $_activeFlag=true ) 
   {
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("UserGroup grp")   
			->innerJoin("grp.Organization org on grp.org_id = org.id ") 
			->innerJoin("grp.UserRole usrRole on grp.user_group_role_id = usrRole.id ") 
			->orderBy("grp.id ASC")
			->where("grp.id IS NOT NULL AND grp.trashed_flag IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("grp.org_id = ? AND grp.org_token_id = ?", array($_orgID, $_orgTokenID));
			if(!is_null($_groupRoleTypeID)) $_qry = $_qry->andWhere("usrRole.user_role_type_id = ? ", $_groupRoleTypeID);
			if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("grp.active_flag = ? ", $_activeFlag);
			
			$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( ! $_qry ? null : $_qry ); 
	}
   public static function processObject($_orgID, $_orgTokenID, $_ID, $_tokenID  ) 
   {
		$q = Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("UserGroup grp")   
			//->innerJoin("prt.Organization prtprnt on prt.parent_id = prtprnt.id ")   
			->where("grp.id=? AND grp.token_id=? AND grp.org_id = ? AND grp.org_token_id = ? AND grp.trashed_flag IS NOT TRUE", array($_ID, $_tokenID, $_orgID, $_orgTokenID))
			->fetchOne (array(), Doctrine_Core::HYDRATE_RECORD);
		return ( ! $q ? null : $q ); 
	}  
}
