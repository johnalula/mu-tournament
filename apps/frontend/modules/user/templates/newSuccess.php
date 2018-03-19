<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR)):
	
	//processNew ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description, $_userID , $_userTokenID )
	//$_flag = UserTable::processNew ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description, $_userID , $_userTokenID  );
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('new', array( '_systemUsers' => $_systemUsers )) ?> 
			</div><!-- end of ui-tab-three-->
		</div> <!-- end of ui-detail-tab-list -->
		<div class="ui-clear-fix"></div>
	</div> <!-- end of ui-main-list-default -->
	
</div>		  
 
<?php else: ?> 
	<div class="ui-error-container" id="ui-error-box" >
		<?php echo include_partial('global/credential_denied', array()) ?>
	</div>  
<?php endif; ?>

<?php else: ?>

	<div class="ui-success-container" id="ui-success-box" >
		<?php echo include_partial('global/authorization_denied', array()) ?>
	</div>
<?php endif; ?>         
<!--- ************************  -->
 
        
<!--- ************************  -->
 
<!-- Modal -->
<div class="modal fade" id="systemUserPersonModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate Persons') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-panel-filter-box" id="">   
						<div class="ui-panel-filter-list" id="ui-panel-filter-menu"> 
							<?php include_partial('filter', array( )) ?> 
						</div><!-- end of ui-filter-list -->
						<div class="ui-clear-fix"></div> 
					</div><!-- end of ui-panel-filter-box -->
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('party/candidate_user_parties', array( '_candidates' => $_candidateUserPersons )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-xs btn-action-img" data-dismiss="modal">
								<?php echo __('Close') ?>
							</button>
							<button type="submit" class="btn btn-primary btn-xs btn-action-img" id="" >
								<img class="btn-img-xs" src="<?php echo image_path('icons/upload') ?>"><?php echo __('Insert') ?>
							</button>
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<div class="modal fade" id="systemUserRoleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalTwoData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate User Roles') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-panel-filter-box" id="">   
						<div class="ui-panel-filter-list" id="ui-panel-filter-menu"> 
							<?php include_partial('party/modal_filter', array( )) ?> 
						</div><!-- end of ui-filter-list -->
						<div class="ui-clear-fix"></div> 
					</div><!-- end of ui-panel-filter-box -->
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('user_role/candidate_active_user_roles', array( '_candidates' => $_candidateUserRoles )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-xs btn-action-img" data-dismiss="modal">
								<?php echo __('Close') ?>
							</button>
							<button type="submit" class="btn btn-primary btn-xs btn-action-img" id="" >
								<img class="btn-img-xs" src="<?php echo image_path('icons/upload') ?>"><?php echo __('Insert') ?>
							</button>
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<div class="modal fade" id="systemUserGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalThreeData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate User Groups') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-panel-filter-box" id="">   
						<div class="ui-panel-filter-list" id="ui-panel-filter-menu"> 
							<?php include_partial('party/modal_filter', array( )) ?> 
						</div><!-- end of ui-filter-list -->
						<div class="ui-clear-fix"></div> 
					</div><!-- end of ui-panel-filter-box -->
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('user_group/candidate_active_user_groups', array( '_candidates' => $_candidateUserGroups )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-xs btn-action-img" data-dismiss="modal">
								<?php echo __('Close') ?>
							</button>
							<button type="submit" class="btn btn-primary btn-xs btn-action-img" id="" >
								<img class="btn-img-xs" src="<?php echo image_path('icons/upload') ?>"><?php echo __('Insert') ?>
							</button>
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->


<div class="modal fade" id="processAjaxLoadergModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog-xxsm">
		<div class="modal-contents ui-ajax-loader-text" style="text-align:center!important;padding:5px!important;">
			<div class="ui-ajax-loader-content">
				<img src="/images/icons/ajax-loader.png"><br>
				<?php echo __('Loading . . .') ?>
		</div>	<!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog --> 
</div><!-- /.modal -->


<div class="modal fade" id="processAjaxLoadergModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog-xxsm">
		<div class="modal-contents ui-ajax-loader-text" style="text-align:center!important;padding:5px!important;">
			<div class="ui-ajax-loader-content">
				<img src="/images/icons/ajax-loader.png"><br>
				<?php echo __('Loading . . .') ?>
		</div>	<!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog --> 
</div><!-- /.modal -->

<script>
	$('#createSystemUser').click(function(){
		var url = '<?php echo url_for('user/createSystemUserAccount')?>'; 
		var formName = 'createSystemUserForm';
		var data = $("form#createSystemUserForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateSystemUserPerson').click(function() {   
		var url = '<?php echo url_for('user/candidateSystemUserPersons')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-persons';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateSystemUserRole').click(function() {   
		var url = '<?php echo url_for('user/candidateSystemUserRoles')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'active-user-roles';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateSystemUserGroup').click(function() {   
		var url = '<?php echo url_for('user/candidateSystemUserGroups')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'active-user-groups';   
		var data = 'system_user_role_id='+document.getElementById('system_user_role_id').value;
		processDataSelection(data, idName, url );		 
	}); 
	
	//*********************************/
	
	$("#insertModalOneData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$"); 
		document.getElementById("system_user_person_id").value = listArr[0];
		document.getElementById("system_user_person_token_id").value = listArr[1];  
		document.getElementById("candidate_system_user_person_name").value = listArr[2]+' ( '+listArr[3]+' )';  
		$("#createSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$('.selectCandidateSystemUserRole').removeAttr("disabled");
		$('#systemUserPersonModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#insertModalTwoData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$"); 
		document.getElementById("system_user_role_id").value = listArr[0];
		document.getElementById("system_user_role_token_id").value = listArr[1];  
		document.getElementById("system_user_role_name").value = listArr[2];  
		document.getElementById("system_user_role_type_id").value = listArr[3];  
		$("#createSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$('.selectCandidateSystemUserGroup').removeAttr("disabled");
		$('.selectCandidateSystemUserPerson').removeAttr("disabled");
		$('#systemUserRoleModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#insertModalThreeData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$"); 
		document.getElementById("system_user_group_id").value = listArr[0];
		document.getElementById("system_user_group_token_id").value = listArr[1];  
		document.getElementById("system_user_group_name").value = listArr[2];  
		$("#createSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemUser").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$('#system_user_name').focus();
		$('#systemUserGroupModal').modal('hide');
		return e.preventDefault();
	});
	
	
 
</script>
