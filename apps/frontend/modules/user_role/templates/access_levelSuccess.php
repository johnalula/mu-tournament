<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_ADMINISTRATION)):
   $_pageTitle = "User Role Management";$_imageName = "user_security";    
?> 

<div class="ui-page-box">
	<?php include_partial('global/header', array('_pageTitle' => $_pageTitle, '_imageName' => $_imageName, '_object' => $_userRole)) ?> 
	<div class="ui-main-content-box">
		<div id="ui-tab-menu" class="ui-tab-menu">
			<div class="ui-tab-menu-box">
				<div class="ui-tab-menu-content">
					<?php include_partial('global/tab_menu', array()) ?> 
				</div>
			</div>
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('new_access_level', array('_userRole' => $_userRole, '_userRoleAccessLevels' => $_userRoleAccessLevels, '_countAccessLevels' => $_countAccessLevels, '_userActivitys' => $_userActivitys, '_countUserActivitys' => $_countUserActivitys)) ?> 
				</div><!-- end of ui-tab-three-->
			</div> <!-- end of ui-detail-tab-list -->
			<div class="ui-clear-fix"></div>
		</div> <!-- end of tabs -->
		<div class="ui-clear-fix"></div>
	</div> <!-- end of ui-main-list-default -->
	<?php include_partial('global/footer', array()) ?> 	
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
 
<!-- Modal -->
<div class="modal fade" id="userRoleSystemModuleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate System Modules') ?>
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
								<?php include_partial('module_setting/candidate_active_system_modules', array( '_candidates' => $_systemModules )) ?> 
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

<script>
	$('#createUserRoleAccessLevelPermission').click(function(){
		var url = '<?php echo url_for('user_role/createAccessLevelPermission')?>'; 
		var formName = 'createUserRoleAccessLevelPermissionForm';
		var data = $("form#createUserRoleAccessLevelPermissionForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('#saveUserRoleModuleAccessLevel').click(function(){
		var url = '<?php echo url_for('user_role/createAccessLevelPermission')?>'; 
		var formName = 'createUserRoleAccessLevelPermissionForm';
		var data = $("form#createUserRoleAccessLevelPermissionForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateUserRoleSystemModule').click(function() {   
		var url = '<?php echo url_for('user_role/candidateActiveSystemModules')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-active-system-module';   
		var data = 'system_user_role_id='+document.getElementById("system_user_role_id").value;
		processDataSelection(data, idName, url );		 
	});  
	//*********************************/
	
	$("#insertModalOneData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$"); 
		document.getElementById("candidate_system_module_id").value = listArr[0];
		document.getElementById("candidate_system_module_token_id").value = listArr[1];  
		document.getElementById("candidate_system_module_name").value = listArr[2];  
		$('#createUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$('#userRoleSystemModuleModal').modal('hide');
		return e.preventDefault();
	});
</script>  
