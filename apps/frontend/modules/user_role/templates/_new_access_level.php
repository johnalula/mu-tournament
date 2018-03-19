<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/user_role') ?>" title="<?php echo __('User role management') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
							<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
						</span>
						<?php echo __('User Role').' ( Role Name: '.$_userRole->userRoleName.' )'  ?>
					</h2>
					<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
						<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
						<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
					</div>
				</div><!-- ui-panel-header-default -->
				<div class="" > 
					<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
				<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box ui-panel-content-border">
						<div class="ui-toolbar-menu">
							<?php include_partial('global/toolbar_action', array('_object' => $_userRole)) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" id="ui-list-collapsible-panel-one"> 
							<div class="ui-panel-detail-form-container" style=""> 
								<div class="ui-panel-form-content"> 
									<?php include_partial('access_level_form', array('_userRole' => $_userRole)) ?> 
								</div> <!-- ui-panel-content -->
							</div> <!-- ui-panel-content -->
						</div> <!-- ui-panel-content -->
						
						<div class="ui-panel-footer-default-box">
							<div class="ui-panel-footer-default-header">
								<h2 class="ui-theme-panel-header-title">
									<img src="<?php echo image_path('settings/user_role') ?>" title="<?php echo __('User role management') ?>">
									<span class="ui-header-title-status-icon">
										<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
										<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
									</span>
									<?php echo $_userRole->userRoleName.' - '.(__('Access Levels'))  ?> 
								</h2>
								<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-two" style="">	
									<span id="ui-panel-form-up-arrow-two" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
									<span id="ui-panel-form-down-arrow-two" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
								</div>
							</div>
						</div><!-- ui-panel-footer-default -->
						
						<div id="ui-list-collapsible-panel-two">
							<div class="ui-tab-separater"></div>
							<div class="ui-toolbar-menu-box ui-toolbar-menu-box-side-border">
								<div class="ui-toolbar-menu">
									<?php include_partial('access_level_action_menu', array( '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?> 
								</div>
							</div>
							<div class="ui-panel-content-box ">
								<div class="ui-panel-grid-list">  
									<?php include_partial('edit_access_level_list', array( '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?>  
								</div>
							</div> 
							<div class="ui-panel-footer-default-box">
								&nbsp;
							</div><!-- ui-panel-footer-default -->			
						</div><!-- ui-panel-footer-default -->			
					</div> 			
					 
				</div><!-- ui-panel-content-box --> 
					
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   

<script>
	
	$('#system_module_access_level_id').change(function(e) {
		$('#createCourseAssessmentType').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		return false;
	});   
	$('#system_module_access_level_id').change(function(e) {
		$('#applyUserRoleModuleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		return false;
	});   
	$('.user_role_system_module_access_level').change(function(e) {
		$('#saveUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		return false;
	});   
	
	$('#applyUserRoleModuleAccessLevelPermission').click(function(){ 
			var url = '<?php echo url_for('user_role/applyUserRoleSystemModuleAccessLevel')?>'; 
			var dataListLength = $('.user_role_system_module_access_level_permission').length;  	
			var userRoleID = document.getElementById('system_user_role_id').value; 
			var userRoleTokenID = document.getElementById('system_user_role_token_id').value; 
			var actionValueID = document.getElementById('system_module_access_level_id').value; 
			var docDivName = 'user_role_system_module_access_level_permission_id';
			var actionValueDocName = 'user_role_system_module_access_level';
			var datas = 'system_user_role_id='+userRoleID+'&system_user_role_token_id='+userRoleTokenID+'&action_value_id='+actionValueID+makeBatchActionURLData ( dataListLength, docDivName);  
			
			processEntry(datas, url );
			//alert(datas);
			
			return false;
		});
		$('#saveUserRoleAccessLevelPermission').click(function(){ 
			var url = '<?php echo url_for('user_role/updateUserRoleSystemModuleAccessLevel')?>'; 
			var dataListLength = $('.user_role_system_module_access_level_permission').length;  	
			var userRoleID = document.getElementById('system_user_role_id').value; 
			var userRoleTokenID = document.getElementById('system_user_role_token_id').value; 
			var docDivName = 'user_role_system_module_access_level_permission_id';
			var actionValueDocName = 'user_role_system_module_access_level';
			var datas = 'system_user_role_id='+userRoleID+'&system_user_role_token_id='+userRoleTokenID+makeBatchActionURLDataList ( dataListLength, docDivName, actionValueDocName ); 
			
			processEntry(datas, url );
			
			return false;
		});
		
		$('.user_role_access_level_activex').click(function(){ 
			var url = '<?php echo url_for('user_role/activateUserRoleAccessLevel')?>';  
			var accessLevelID = $(this).attr('rel'); 
			var accessLeveTokenID = document.getElementById('access_level_token_id_'+accessLevelID).value; 
			var datas = 'access_level_id='+accessLevelID+'&access_level_token_id='+accessLeveTokenID; 
			//alert(datas); 
			
			var flag = processEntry(datas, url );
			
			return false;
		});
</script>


