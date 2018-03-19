<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSystemModuleSettingForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('System Module Module Information') ?>">
						<?php echo __('System Module') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('System Module') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-32"> 
							<div class="input-group">
								<input type="text" class="form-control " id="system_module_name" name="system_module_setting[system_module_name]" placeholder="<?php echo __('Candidate System Module') ?>" title="<?php echo __('Candidate System Module') ?>" value="" data-toggle="modal" data-target="#candidateSportGameTypeModal"  disabled>
								<input type="hidden" class="form-control" id="system_module_id" name="system_module_setting[system_module_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="system_module_token_id" name="system_module_setting[system_module_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSystemModule" type="button" data-toggle="modal" data-target="#candidateSystemModuleModal" title="<?php echo __('Candidat Sport Game Type') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Access Level') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-32"> 
							<select id="access_level" name="system_module_setting[access_level]" class="form-control" title="<?php echo __('Default Access Level') ?>">
								<option value="100" selected  ><?php echo 'Select Access Level ...' ?></option>
								<?php foreach(PermissionCore::processAccessLevels () as $_key => $role): ?>								 
									<option value="<?php echo  $_key ?>" <?php echo $_key == PermissionCore::processDefaultAccessLevel() ? 'selected':'' ?>>
										<?php echo $role ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Active') ?> : </label>
						<div class="col-sm-221">
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group">
									<input type="hidden" class="form-control" id="active_flag" name="system_module_setting[active_flag]" value="1" >
									<button type="button" class="btn btn-default btn-xs btn-padding-sm btn-success active" id="activeSystemModuleYesButton" value="1" title="<?php echo __('Active System Modyule Setting') ?>"><?php echo __('Yes') ?>
									<button type="button" class="btn btn-default btn-sm btn-padding-sm" id="activeSystemModuleNoButton" value="0" title="<?php echo __('Inactive System Module Setting') ?>"><?php echo __('No') ?> 
								</div> 
							</div>
						</div>
						<label class="col-sm-01 control-label"><?php echo __('Mode') ?>:</label>
						<div class="col-sm-23">
							<div class="btn-toolbar" role="toolbar">
								<div class="btn-group">
									<input type="hidden" class="form-control" id="applicable_flag" name="system_module_setting[applicable_flag]" value="1" >
									<button type="button" class="btn btn-default btn-xs btn-padding-sm btn-success active" id="applicableSystemModuleYesButton" value="1" title="<?php echo __('Applicable System Modyule Setting') ?>"><?php echo __('Yes') ?>
									<button type="button" class="btn btn-default btn-sm btn-padding-sm" id="applicableSystemModuleNoButton" value="0" title="<?php echo __('Inapplicable System Module Setting') ?>"><?php echo __('No') ?> 
								</div> 
							</div>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
						<div class="col-sm-32"> 
							<textarea class="form-control" rows=3 id="description" name="system_module_setting[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
		$('#activeSystemModuleYesButton').addClass('btn-success').addClass('active');
		$('#activeSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});  
	$('#activeSystemModuleNoButton').click(function() {
		$('#activeSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#activeSystemModuleYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("active_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});   
	$('#applicableSystemModuleYesButton').click(function() {
		$('#applicableSystemModuleYesButton').addClass('btn-success').addClass('active');
		$('#applicableSystemModuleNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 1 ? 1:0;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});  
	$('#applicableSystemModuleNoButton').click(function() {
		$('#applicableSystemModuleNoButton').addClass('btn-danger').addClass('active');
		$('#applicableSystemModuleYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("applicable_flag").value = $(this).val() == 0 ? 0:1;
		$("#createSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSystemModule").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
	});   
	 
	 
</script>
