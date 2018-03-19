<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSystemUserForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('System User Information') ?>">
						<?php echo __('System User') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Person') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-4"> 
							<div class="input-group">
								<input type="text" class="form-control " id="user_person_name" name="system_user[user_person_name]" placeholder="<?php echo __('Candidate Person') ?>" title="<?php echo __('Candidate Person') ?>" value="" data-toggle="modal" data-target="#candidateUserPersonModal"  disabled>
								<input type="hidden" class="form-control" id="user_person_id" name="system_user[user_person_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="user_person_token_id" name="system_user[user_persone_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateUserPerson" type="button" data-toggle="modal" data-target="#candidateUserPersonModal" title="<?php echo __('Candidat User Person') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('User Role') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-4"> 
							<div class="input-group">
								<input type="text" class="form-control " id="user_role_name" name="system_user[user_role_name]" placeholder="<?php echo __('Candidate User Role') ?>" title="<?php echo __('Candidate User Role') ?>" value="" data-toggle="modal" data-target="#candidateSportGameTypeModal"  disabled>
								<input type="hidden" class="form-control" id="user_role_id" name="system_user[user_role_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="user_role_token_id" name="system_user[user_role_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateUserRole" type="button" data-toggle="modal" data-target="#candidateUserRoleModal" title="<?php echo __('Candidat Sport Game Type') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('User Group') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-4"> 
							<div class="input-group">
								<input type="text" class="form-control " id="user_group_name" name="system_user[user_group_name]" placeholder="<?php echo __('Candidate User Group') ?>" title="<?php echo __('Candidate User Group') ?>" value="" data-toggle="modal" data-target="#candidateUserGroupModal"  disabled>
								<input type="hidden" class="form-control" id="user_group_id" name="system_user[user_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="user_group_token_id" name="system_user[user_group_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateUserGroup" type="button" data-toggle="modal" data-target="#candidateUserGroupModal" title="<?php echo __('Candidat Sport Game Type') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('User Name') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-4"> 
							<input type="text" class="form-control" id="useraccount" name="system_user[useraccount]" value="" placeholder="<?php echo __('User Name') ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Access Level') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-4"> 
							<input type="password" class="form-control" id="user_password" name="system_user[user_password]" placeholder="<?php echo __('Password') ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Active') ?> : </label>
						<div class="col-sm-212">
							<select id="system_user_permission_mode_id" name="system_user_permission_mode_id" class="form-control" title="<?php echo __('System user permission mode') ?>">
								<?php foreach(UserCore::processSystemUserPermissionModes () as $_key => $_permissionMode): ?>								 
									<option value="<?php echo  $_key ?>" <?php echo $_key == UserCore::processDefaultSystemUserPermissionMode () ? 'selected':'' ?> >
										<?php echo $_permissionMode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label"><?php echo __('Status') ?>:</label>
						<div class="col-sm-212">
							<select id="system_user_status" name="system_user_status" class="form-control" title="<?php echo __('System user status') ?>">
								<?php foreach(UserCore::processSystemUserStatuses() as $_key => $_status): ?>								 
									<option value="<?php echo  $_key ?>" <?php echo $_key == UserCore::processDefaultSystemUserStatus () ? 'selected':'' ?> >
										<?php echo $_status ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-4"> 
							<textarea class="form-control" rows=3 id="description" name="system_user[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#access_level').change(function(e) {
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});   
	 
	$('#description').keyup(function(e) {
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#activeSystemModuleYesButton').click(function() {
		$('#activeSystemModuleYesButton').addClass('btn-danger').addClass('active');
		$('#activeSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});  
	$('#activeSystemModuleNoButton').click(function() {
		$('#activeSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#activeSystemModuleYesButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});   
	$('#applicableSystemModuleYesButton').click(function() {
		$('#applicableSystemModuleYesButton').addClass('btn-danger').addClass('active');
		$('#applicableSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});  
	$('#applicableSystemModuleNoButton').click(function() {
		$('#applicableSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#applicableSystemModuleYesButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});   
	 
	 
</script>
