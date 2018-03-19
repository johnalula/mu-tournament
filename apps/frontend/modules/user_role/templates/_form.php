<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSchoolCalendarForm" role="form" action="" method="">  
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('New User Role Information') ?>">
					<?php echo __('User Role Info') ?>
				</legend>
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('User Role Type') ?>:</label>
					<div class="col-sm-31">
						<div class="input-group">
							<input type="text" class="form-control" id="user_role_type_name" name="user_role_type_name" placeholder="<?php echo __('User Role Type') ?>" title="<?php echo __('User role type') ?>" readonly>
							<input type="hidden" class="form-control" id="user_role_type_id" name="user_role_type_id">
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateUserRole" type="button" data-toggle="modal" data-target="#userRoleModal">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('User Role Name') ?>:</label>
					<div class="col-sm-31">
						<input type="text" class="form-control" id="user_role_name" name="user_role_name" placeholder="<?php echo __('User Role Name') ?>" title="<?php echo __('User role name') ?>" required>  
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Active User Role') ?>"><?php echo __('Active') ?>:</label>
					<div class="col-sm-01">
						<div class="input-group"> 
							<label class="checkbox-inline">
								<input type="checkbox" name="active_flag" id="active_flag" class="checkbox-inline" checked>
							</label>
						</div>
					</div>
					<label class="col-sm-24 control-label" title="<?php echo __('Applicable User Role') ?>"><?php echo __('Applicable') ?>:</label>
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
						<textarea type="text" class="form-control" id="descriptioni" name="descriptioni" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" rows=3></textarea> 
					</div>
				</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#school_academic_year_id').change(function(e) {
		$('#createUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
		$('#cancelUserRoleAccessLevelPermission').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#calander_from_date').change(function(e) {
		$('#createSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#calander_end_date').change(function(e) {
		$('#createSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#school_calendar_title').keyup(function(e) {
		$('#createSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#description').keyup(function(e) {
		$('#createSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$('#cancelSchoolCalendar').removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#calander_from_date" ).datepicker({  
		yearRange: "1980:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	$( "#calander_end_date" ).datepicker({  
		yearRange: "1980:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
</script>
