<?php

/**
 * PartyRelationshipTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PartyRelationshipTable extends PluginPartyRelationshipTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PartyRelationshipTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PartyRelationship');
    }
    //
	public static function processCreate ( $_party, $_partyRelationShip, $_partyPositionRole, $_partyRelationShipRole ) 
	{
		//try {
			
			$_flag = true;  

			$_token = trim($_party->token_id).trim($_party->name).trim($_partyRelationShip).rand('11111', '99999');
			$_startDate = date('m/d/Y', time());
			$_nw = new PartyRelationship(); 
			$_nw->token_id = md5(sha1($_token));  
			$_nw->party_id = trim($_party->id);
			$_nw->party_token_id = md5(sha1(trim($_party->token_id)));  
			$_nw->relationship_type = trim($_partyRelationShip); 
			$_nw->position_role_id = trim($_partyPositionRole); 
			$_nw->employment_type_id = trim($_partyRelationShipRole); 
			$_nw->from_date = trim($_startDate);  
			$_nw->active_flag = true;     
			$_nw->default_flag = true;     
			$_nw->status = $_status ? $_status:trim(PartyCore::$_ACTIVE); 
			$_nw->description = ucfirst(trim($_party->name).' - '.trim($_partyRelationShip).')');  
			$_nw->save();    
			
			return $_nw ? true:false; 
		//} catch ( Exception $e) {
	    //  return false; 
		//}
	} 
	public static function processUpdate ($_orgID, $_orgTokenID, $_ID, $_tokenID, $_parentID, $_parentTokenID, $_headID, $_headTokenID, $_orgName, $_orgAlias, $_orgRole, $_orgUnit, $_orgType, $_orgCityProvince, $_orgCountry, $_description, $_userID, $_userTokenID )
	{
		$_flag = true;
		if(empty($_orgName) || !isset($_orgName) || trim($_orgName) == '') { return false; }
	  $_partyAlias = trim(str_replace(' ', '_', $_orgName));
		$_companyAlias = empty($_orgAlias) ? trim(strtoupper($_partyAlias)):trim(strtoupper($_orgAlias));
		$_qry = Doctrine_Query::create( )
			->update('PartyRelationship prt')
			->set('prt.parent_id', '?', trim($_parentID))
			->set('prt.parent_token_id', '?', trim($_parentTokenID)) 
			->set('prt.head_of_organizaton_id', '?', trim($_headID))
			->set('prt.head_of_organizaton_token_id', '?', trim($_headTokenID)) 
			->set('prt.name', '?', trim($_orgName))
			->set('prt.alias', '?', trim($_companyAlias))
			->set('prt.organizational_unit', '?', trim($_orgUnit)) 
			//->set('prt.status', '?', trim($status))  
			->set('prt.party_role', '?', trim($_orgRole)) 
			->set('prt.party_type', '?', trim($party_type))  
			->set('prt.city', '?', trim($_orgCityProvince))  
			->set('prt.country', '?', trim($_orgCountry))  
			->set('prt.description', '?', trim($_description))     
			->where('prt.id = ? AND prt.token_id = ? AND prt.org_id = ? AND prt.org_token_id = ?', array($_ID, $_tokenID, $_orgID, $_orgTokenID))
			->execute();	
			
			$_partyObject = self::processObject ( $_orgID, $_orgTokenID, $organization_id, $_ID, $_tokenID);
			if($_orgUnit == OrganizationCore::$PARENT_ORGANIZATION) {
				$_flag=$_flag&&$_partyObject->makeParent();	
			}

		return $_flag;    
	}
	//
   public static function processDelete ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_partyID, $_partyTokenID, $_userID, $_userTokenID )
   {
		$_flag = true;
		$_organizationObject = self::processObject ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID );  
		$_flag = $_flag&&$_organizationObject->makeDeletion ($_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_userID, $_userTokenID);
		 
		return $_flag;
	}
   //
	public static function appendPartialQueryFields ( )  {
		$_queryFileds = "prt.id"; 
		return $_queryFileds;
	}
   //
	public static function appendQueryFields ( )  {
		$_queryFileds = "prt.*, prt.id as ID, prt.token_id as tokenID, prt.org_id as orgID, prt.org_token_id as orgTokenID, prt.parent_id as parentID, prt.parent_token_id as parentTokenID,  prt.name as organizationName, prt.alias as organizationAlias, prt.party_type as organizationType, prt.party_role_id as organizationRole, prt.organizational_unit as organizationalUnit, prt.party_code_number as orgCodeNumber, prt.created_at as createdAt, prt.updated_at as updatedAt, prt.head_of_organizaton_id as partyHeadID, prt.head_of_organizaton_token_id as partyHeadTokenID, prt.org_id as orgID, prt.org_token_id as orgTokenID,
		prnt.name as parentName, prnt.alias as parentAlias,
		prtorg.name as parentOrgName, prtorg.alias as parentOrgAlias, 
		"; 
		return $_queryFileds;
	}
	public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_orgUnit=null, $_orgRelationShip=null, $_partyRole=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")    
			->offset($_offset)
			->limit($_limit)
			->orderBy("prt.name ASC")
			->where("prt.is_default IS NOT TRUE OR prt.is_active IS TRUE AND prt.is_trashed IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ? ", array($_orgID, $_orgTokenID)); 
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role_id = ? ", $_partyRole);
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_orgRelationShip)) $_qry = $_qry->andWhere("prt.relationship_type_id = ? ", $_orgRelationShip);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) 
					$_qry = $_qry->andWhere("prt.name LIKE ? OR prt.alias LIKE ? OR prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
	public static function processAll ( $_orgID=null, $_orgTokenID=null, $_orgUnit=null, $_orgRelationShip=null, $_partyRole=null, $_status=null, $_keyword=null, $_exclusions=null ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")    
			->orderBy("prt.id DESC")
			->where("prt.is_default IS NOT TRUE OR prt.is_active IS TRUE AND prt.is_trashed IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ? ", array($_orgID, $_orgTokenID));
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role_id = ? ", $_partyRole);
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_orgRelationShip)) $_qry = $_qry->andWhere("prt.relationship_type_id = ? ", $_orgRelationShip);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) 
					$_qry = $_qry->andWhere("prt.name LIKE ? OR prt.alias LIKE ? OR prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
	public static function processCount ( $_orgID=null, $_orgTokenID=null, $_orgUnit=null, $_orgRelationShip=null, $_partyRole=null, $_status=null, $_keyword=null, $_exclusions=null ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendPartialQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")     
			->orderBy("prt.name ASC")
			->where("prt.is_default IS NOT TRUE OR prt.is_active IS TRUE AND prt.is_trashed IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ? ", array($_orgID, $_orgTokenID)); 
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role_id = ? ", $_partyRole);
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_orgRelationShip)) $_qry = $_qry->andWhere("prt.relationship_type_id = ? ", $_orgRelationShip);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) 
					$_qry = $_qry->andWhere("prt.name LIKE ? OR prt.alias LIKE ? OR prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_objectID, $_tokenID) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")     		 
			->where("prt.is_trashed IS NOT TRUE AND prt.id = ? AND prt.token_id = ? ", array($_objectID, $_tokenID));
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ? ", array($_orgID, $_orgTokenID));
			$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
		return (! $_qry ? null : $_qry ); 	
	}
	//
	public static function makeObject ( $_objectID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")   
			//->leftJoin("prt.Person prthd on prt.head_of_organizaton_id = prthd.id")     		 
			->where("prt.id = ? AND prt.token_id = ? ", array($_objectID, $_tokenID ))
			->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
		return (! $_qry ? null : $_qry ); 	
	}
	//
	public static function processDefault ( $_orgID, $_orgTokenID, $_isDefault=null, $_isActive=null, $_isParent=null ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")   
			->leftJoin("prt.Person prthd on prt.head_of_organizaton_id = prthd.id")   		 
			->where("prt.is_trashed IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.is_active = ? ", $_isActive);
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.is_parent = ? ", $_isParent);
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.is_default = ? ", $_isDefault);
			$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
		return (! $_qry ? null : $_qry ); 	
	}
	//
	public static function processTrashedSelection ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")   
			->leftJoin("prt.Person prthd on prt.head_of_organizaton_id = prthd.id")   
			->offset($_offset)
			->limit($_limit)
			->orderBy("prt.id DESC")
			->where("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID))
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS TRUE");
			if(!is_null($_parentID)) $_qry = $_qry->andWhere("prt.parent_id = ? AND prt.parent_token_id = ?", array($_parentID, $_parentTokenID));
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role = ? ", $_partyRole);
			if(!is_null($_isParent)) $_qry = $_qry->andWhere("prt.is_parent = ? AND prt.is_head_organization = ? ", array($_isParent, $_isParent));
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) 
					$_qry = $_qry->andWhere("prt.name LIKE ? OR prt.alias LIKE ? OR prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
	public static function processTrashedAll ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")   
			->leftJoin("prt.Person prthd on prt.head_of_organizaton_id = prthd.id")  
			->orderBy("prt.id DESC")
			->where("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID))
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS TRUE");
			if(!is_null($_parentID)) $_qry = $_qry->andWhere("prt.parent_id = ? AND prt.parent_token_id = ?", array($_parentID, $_parentTokenID));
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role = ? ", $_partyRole);
			if(!is_null($_isParent)) $_qry = $_qry->andWhere("prt.is_parent = ? AND prt.is_head_organization = ? ", array($_isParent, $_isParent));
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) 
					$_qry = $_qry->andWhere("prt.name LIKE ? OR prt.alias LIKE ? OR prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
	public static function processCandidateParents ( $_orgID=null, $_orgTokenID=null, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
	{
		$_qry = Doctrine_Query::create()
			->select(self::appendQueryFields())				
			->from("PartyRelationship prt")  
			->innerJoin("prt.Party prnt on prt.parent_id = prnt.id")   
			->innerJoin("prt.Party prtorg on prt.org_id = prtorg.id")   
			->leftJoin("prt.Person prthd on prt.head_of_organizaton_id = prthd.id")   
			->offset($_offset)
			->limit($_limit)     
			->orderBy("prt.id DESC")
			->where("prt.is_default IS NOT TRUE AND prt.is_trashed IS NOT TRUE");
			if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
			if(!is_null($_parentID)) $_qry = $_qry->andWhere("prt.parent_id = ? AND prt.parent_token_id = ?", array($_parentID, $_parentTokenID));
			if(!is_null($_partyRole)) $_qry = $_qry->andWhere("prt.party_role = ? ", $_partyRole);
			if(!is_null($_isParent)) $_qry = $_qry->andWhere("prt.is_parent = ? AND prt.is_head_organization = ? ", array($_isParent, $_isParent));
			if(!is_null($_orgUnit)) $_qry = $_qry->andWhere("prt.organizational_unit = ? ", $_orgUnit);
			if(!is_null($_status)) $_qry = $_qry->andWhere("prt.status=?", $_status);
			if(! is_null($_exclusions)) $_qry = $_qry->andWhereNotIn("prt.id ", $_exclusions ); 
			if(!is_null($_keyword) )
				if(strcmp(trim($_keyword), "") != 0 ) $_qry = $_qry->andWhere("prt.name LIKE ? AND prt.alias LIKE ? AND prt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		return ( count ( $_qry ) <= 0 ? null : $_qry ); 
	}
   public static function processCandidateSelection ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
   {
		return self::processSelection ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_orgUnit, $_partyRole, $_isParent, $_status, $_keyword, $_exclusions, $_offset, $_limit ); 
	}
   public static function processCandidateAddress ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
   {
		return self::processSelection ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_orgUnit, $_partyRole, $_isParent, $_status, $_keyword, $_exclusions, $_offset, $_limit ); 
	}
   public static function processActiveAddress ( $_partyID, $_partyTokenID, $_isActive ) 
   {
		return PartyContactTable::processCandidate ( $_partyID, $_partyTokenID, $_isActive ); 
	}
   public static function processCandidates ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
   {
		return self::processSelection ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_orgUnit, $_partyRole, $_isParent, $_status, $_keyword, $_exclusions, $_offset, $_limit ); 
	}
   public static function processDefaultSelection ( $_orgID, $_orgTokenID, $_parentID=null, $_parentTokenID=null, $_orgUnit=null, $_partyRole=null, $_isParent=null, $_status=null, $_keyword=null, $_exclusions=null, $_offset=0, $_limit=10 ) 
   {
		return self::processSelection ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_orgUnit, $_partyRole, $_isParent, $_status, $_keyword, $_exclusions, $_offset, $_limit ); 
	}
	public static function processStatusSelection ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.status) AS organizationStatus")
			->from("PartyRelationship prt")  
			->where("prt.status IS NOT NULL")		
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_status = array();
		foreach( $_qry as $w)
			$_status[] = $w->organizationStatus;
		return ( count ( $_status ) <= 0 ? null : $_status );
	}
	public static function processPartyTypes ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.party_type) AS partyType")
			->from("PartyRelationship prt")  
			->where("prt.party_type IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS NOT TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_types = array();
		foreach( $_qry as $p) {
			$_types[] = $p->partyType;
		}
		return ( count ( $_types ) <= 0 ? null : $_types );
	}
	public static function processTrashedPartyTypes ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.party_type) AS partyType")
			->from("PartyRelationship prt")  
			->where("prt.party_type IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_types = array();
		foreach( $_qry as $p) {
			$_types[] = $p->partyType;
		}
		return ( count ( $_types ) <= 0 ? null : $_types );
	}
	public static function processPartyRoles ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.party_role) AS partyRole")
			->from("PartyRelationship prt")  
			->where("prt.party_role IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS NOT TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_roles = array();
		foreach( $_qry as $p) {
			$_roles[] = $p->partyRole;
		}
		return ( count ( $_roles ) <= 0 ? null : $_roles );
	}
	public static function processTrashedPartyRoles ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.party_role) AS partyRole")
			->from("PartyRelationship prt")  
			->where("prt.party_role IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_roles = array();
		foreach( $_qry as $p) {
			$_roles[] = $p->partyRole;
		}
		return ( count ( $_roles ) <= 0 ? null : $_roles );
	}
	public static function processOrganizationalUnits ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.organizational_unit) AS orgUnit")
			->from("PartyRelationship prt")  
			->where("prt.organizational_unit IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS NOT TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_roles = array();
		foreach( $_qry as $p) {
			$_roles[] = $p->orgUnit;
		}
		return ( count ( $_roles ) <= 0 ? null : $_roles );
	}
	public static function processTrashedOrganizationalUnits ()
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(prt.organizational_unit) AS orgUnit")
			->from("PartyRelationship prt")  
			->where("prt.organizational_unit IS NOT NULL")		
			->andWhere("prt.is_default IS NOT TRUE AND prt.is_trashed IS TRUE")
			->execute(array(), Doctrine_Core::HYDRATE_RECORD);
		$_roles = array();
		foreach( $_qry as $p) {
			$_roles[] = $p->orgUnit;
		}
		return ( count ( $_roles ) <= 0 ? null : $_roles );
	}
}
