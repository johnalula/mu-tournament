<div class="ui-panel-form-box ui-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createUserRoleAccessLevelPermissionForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<input type="hidden" class="form-control" id="system_user_role_id" name="system_user_role_id" value="<?php echo $_userRole->id ?>">
		<input type="hidden" class="form-control" id="system_user_role_token_id" name="system_user_role_token_id" value="<?php echo $_userRole->token_id ?>">
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('New User Role Access Level Permission Information') ?>">
					<?php echo __('Access Level Info') ?>
				</legend>
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('System Module') ?><span class="ui-red-text">*</span>:</label>
					<div class="col-sm-31">
						<div class="input-group">
							<input type="text" class="form-control" id="candidate_system_module_name" name="candidate_system_module_name" placeholder="<?php echo __('System Module') ?>">
							<input type="hidden" class="form-control" id="candidate_system_module_id" name="candidate_system_module_id" >
							<input type="hidden" class="form-control" id="candidate_system_module_token_id" name="candidate_system_module_token_id" >
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateUserRoleSystemModule" type="button" data-toggle="modal" data-target="#userRoleSystemModuleModal">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>
				<div class="form-group">
					<label for="disabledSelect" class="col-sm-21 control-label"><?php echo __('Access Level') ?><span class="ui-red-text">*</span>:</label>
					<div class="col-sm-31">
						<select id="system_module_access_level" name="system_module_access_level" class="form-control">
							<?php foreach(PermissionCore::processAccessLevels () as $_key => $_role): ?>								 
								<option value="<?php echo  $_key ?>" <?php echo $_key == PermissionCore::processDefaultAccessLevel() ? 'selected':'' ?>>
									<?php echo $_role ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Active User Role Access Level Permission') ?>"><?php echo __('Active') ?>:</label>
					<div class="col-sm-01">
						<div class="input-group"> 
							<label class="checkbox-inline">
								<input type="checkbox" name="active_flag" id="active_flag" class="checkbox-inline" checked>
							</label>
						</div>
					</div>
					<label class="col-sm-24 control-label" title="<?php echo __('Applicable User Role Access Level Permission') ?>"><?php echo __('Applicable') ?>:</label>
					<div class="col-sm-21">
						<div class="input-group"> 
							<label class="checkbox-inline">
								<input type="checkbox" name="applicable_flag" id="applicable_flag" class="checkbox-inline" checked>
							</label>
						</div>
					</div>
				</div>   
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Description') ?>:</label>
					<div class="col-sm-31"> 
						<textarea class="form-control" id="description" name="description" type="text" placeholder="<?php echo __('Remark') ?>" title="<?php echo __('Access level description') ?>" rows=2></textarea> 
					</div>
				</div>
			</fieldset> 
		</div> 
	</form>
</div> 

<script>
	$('#system_module_access_level').change(function() {
		$('#createUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#system_module_access_level').change(function() {
		$('#createUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		$('#createUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
</script>

