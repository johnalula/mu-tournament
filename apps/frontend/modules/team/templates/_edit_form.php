<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Team') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Country') ?>"><?php echo __('Country') ?>:<span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							<select id="country" name="team[country]" class="form-control" title="<?php echo __('Team Country') ?>">
								<?php foreach(SystemCore::processCountrys() as $_key => $_country): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == SystemCore::processDefaultCountry () ? 'selected':'' ?> >
										<?php echo $_country ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Tournament Name') ?>"><?php echo __('Name') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<input type="text" class="form-control" id="team_name" name="team[team_name]" placeholder="<?php echo __('Name') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Team Alias') ?>"><?php echo __('Alias') ?>:<span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-23">
							<input type="text" class="form-control" id="team_alias"	name="team[team_alias]"	placeholder="<?php echo __('Alias') ?>">
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Team City') ?>"><?php echo __('City') ?>:<span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-23">
							<input type="text" class="form-control" id="team_city"	name="team[team_city]"	placeholder="<?php echo __('Team City') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Team Status') ?>"><?php echo __('Status') ?>:</label>
						<div class="col-sm-23">
							 <select id="team_status" name="team[team_status]" class="form-control" title="<?php echo __('Team Status') ?>">
								<option value="" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
									<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::$_ACTIVE ? 'selected':'' ?> >
										<?php echo $_matchStatus ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Touirnament End Date') ?>"><?php echo __('Date') ?>:</label>
						<div class="col-sm-23">
							<div class="input-group"> 
								<input class="form-control" id="end_date" name="tournament[end_date]" type="text" placeholder="<?php echo __('End Date') ?>"  value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Tournament End Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
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
	$('#status').change(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn"); 
		return false;
	});  
	 
	$('#tournament_name').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn"); 
		return false;
	});
	$('#tournament_alias').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn"); 
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn"); 
		return false;
	});
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	$( "#end_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
</script>
