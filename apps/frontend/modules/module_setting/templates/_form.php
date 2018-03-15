<div class="ui-panel-form-box ui-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSystemModuleSettingForm" role="form" action="" method=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('New System Module Setting Information') ?>">
					<?php echo __('System Module Setting Info') ?>
				</legend>
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Module') ?>:</label>
					<div class="col-sm-32">
						<div class="input-group">
							<input type="text" class="form-control" id="candidate_module_name" name="candidate_module_name" placeholder="<?php echo __('Module Name') ?>">
							<input type="hidden" class="form-control" id="candidate_module_id" name="candidate_module_id" placeholder="<?php echo __('Module ID') ?>">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button" data-toggle="modal" data-target="#moduleSettingModal">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>
				<div class="form-group">
					<label for="disabledSelect" class="col-sm-21 control-label"><?php echo __('Access Level') ?>:</label>
					<div class="col-sm-32">
						<select id="default_module_access_level" name="default_module_access_level" class="form-control">
							<?php foreach(PermissionCore::processAccessLevels () as $_key => $role): ?>								 
								<option value="<?php echo  $_key ?>" <?php echo $_key == PermissionCore::processDefaultAccessLevel() ? 'selected':'' ?>>
									<?php echo $role ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div>    
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Active System Modyule Setting') ?>"><?php echo __('Active') ?>:</label>
					<div class="col-sm-21">
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<input type="hidden" class="form-control" id="active_flag" name="active_flag" value="1" >
								<button type="button" class="btn btn-default btn-xs btn-padding-sm btn-danger active" id="activeSystemModuleYesButton" value="1" title="<?php echo __('Active System Modyule Setting') ?>"><?php echo __('Yes') ?>
								<button type="button" class="btn btn-default btn-sm btn-padding-sm" id="activeSystemModuleNoButton" value="0" title="<?php echo __('Inactive System Module Setting') ?>"><?php echo __('No') ?> 
							</div> 
						</div>
					</div>
					<label class="col-sm-122 control-label" title="<?php echo __('Inapplicable System Modyule Setting') ?>"><?php echo __('Applicable') ?>:</label>
					<div class="col-sm-21">
						<div class="btn-toolbar" role="toolbar">
							<div class="btn-group">
								<input type="hidden" class="form-control" id="applicable_flag" name="applicable_flag" value="1" >
								<button type="button" class="btn btn-default btn-xs btn-padding-sm btn-danger active" id="applicableSystemModuleYesButton" value="1" title="<?php echo __('Applicable System Modyule Setting') ?>"><?php echo __('Yes') ?>
								<button type="button" class="btn btn-default btn-sm btn-padding-sm" id="applicableSystemModuleNoButton" value="0" title="<?php echo __('Inapplicable System Module Setting') ?>"><?php echo __('No') ?> 
							</div> 
						</div>
					</div>
				</div>  
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Description') ?>:</label>
					<div class="col-sm-32"> 
						<textarea class="form-control" id="description" name="description" type="text" placeholder="<?php echo __('Remark') ?>" rows=2></textarea> 
					</div>
				</div>
			</fieldset> 
		</div> 
	</form>
</div> 

<script>
	$('#default_module_access_level').change(function(e) {
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
		return false;
	});    
	$('#description').keyup(function(e) {
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
		return false;
	});  
	$('#activeSystemModuleYesButton').click(function() {
		$('#activeSystemModuleYesButton').addClass('btn-danger').addClass('active');
		$('#activeSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
	});  
	$('#activeSystemModuleNoButton').click(function() {
		$('#activeSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#activeSystemModuleYesButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
	});   
	$('#applicableSystemModuleYesButton').click(function() {
		$('#applicableSystemModuleYesButton').addClass('btn-danger').addClass('active');
		$('#applicableSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
	});  
	$('#applicableSystemModuleNoButton').click(function() {
		$('#applicableSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#applicableSystemModuleYesButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModuleSetting").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#systemModuleDisabledSave").addClass("ui-display-none");
		$("#systemModuleEnabledSave").removeClass("ui-display-none");
	});   
</script>

