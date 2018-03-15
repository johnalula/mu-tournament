<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamMemberForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Team') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							xx
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Sport Game') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							vv
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Event Type') ?>:</label>
						<div class="col-sm-23">
							<select id="player_role" name="team_member[player_role]" class="form-control" title="<?php echo __('Player Role') ?>">
								<option value="100" selected  ><?php echo 'Select Role ...' ?></option>
								<?php foreach(TournamentCore::processEventTypes() as $_key => $_eventType): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultEventType () ? 'selected':'' ?> >
										<?php echo $_eventType ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Gender Category') ?>"><?php echo __('Gender') ?>:</label>
						<div class="col-sm-23">
							<select id="player_gender" name="team_member[player_gender]" class="form-control" title="<?php echo __('Gender Category') ?>">
								<option value="100" selected  ><?php echo 'Select Gender ...' ?></option>
								<?php foreach(TournamentCore::processPlayerGender() as $_key => $_gender): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultGender () ? 'selected':'' ?> >
										<?php echo $_gender ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
						<div class="col-sm-40"> 
							<textarea class="form-control" rows=3 id="description" name="team[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#event_type').change(function(e) {
		$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#player_mode').change(function(e) {
		$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#participant_number').change(function(e) {
		$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#description').keyup(function(e) {
		$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
