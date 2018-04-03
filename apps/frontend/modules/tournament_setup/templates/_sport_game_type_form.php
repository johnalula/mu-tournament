<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSportGameForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Sport Games Information') ?>">
						<?php echo __('Sport Games') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Category') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<select id="sport_game_category" name="sport_game_type[sport_game_category]" class="form-control" title="<?php echo __('Sport Game Category') ?>">
								<option value="" selected  > <?php echo 'Select Game Category ...' ?> </option>
								<?php foreach($_countGameCategorys as $_key => $_countGameCategory): ?>								 
									<option value="<?php echo $_countGameCategory->id ?>"  >
										<?php echo $_countGameCategory->categoryName ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Game Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							<select id="sprt_game_type" name="sport_game_type[sprt_game_type]" class="form-control" title="<?php echo __('Game Type') ?>">
								<option value="" selected  ><?php echo 'Select Game Type ...' ?></option>
								<?php foreach(TournamentCore::processDistanceTypes() as $_key => $_roundNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_roundNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Throws Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_throw_type" name="sport_game_type[sport_game_throw_type]" class="form-control" title="<?php echo __('Game Throw Type') ?>">
								<option value="" selected  ><?php echo 'Select Throw Type ...' ?></option>
								<?php foreach(TournamentCore::processThrowTypes() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Game Mode') ?>"><?php echo __('Jump type') ?>:</label>
						<div class="col-sm-212">
							<select id="sport_game_jump_type_mode" name="sport_game_type[sport_game_jump_type_mode]" class="form-control" title="<?php echo __('Jump Type Mode') ?>">
								<option value="" selected  ><?php echo 'Select Jump Type ...' ?></option>
								<?php foreach(TournamentCore::processJumpTypes() as $_key => $_event): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_event ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Measurement') ?>: &nbsp;</label>
						<div class="col-sm-212">
							<select id="sport_game_measurement" name="sport_game_type[sport_game_measurement]" class="form-control" title="<?php echo __('Measurement') ?>">
								<option value="" selected  ><?php echo 'Select Measure. ...' ?></option>
								<?php foreach(TournamentCore::processDistanceMeasurements() as $_key => $_event): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_event ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Game Distance') ?>"><?php echo __('Distance') ?>:</label>
						<div class="col-sm-212">
							<input type="text" class="form-control" id="sport_game_distance"	name="sport_game_type[sport_game_distance]"	placeholder="<?php echo __('Game Distance') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Player Mode') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_player_mode" name="sport_game_type[sport_game_player_mode]" class="form-control" title="<?php echo __('Player Mode') ?>">
								<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
								<?php foreach(TournamentCore::processPlayerModes() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Team Mode') ?>"><?php echo __('Team Mode') ?>:</label>
						<div class="col-sm-212">
							<select id="sport_game_team_mode" name="sport_game_type[sport_game_team_mode]" class="form-control" title="<?php echo __('Team Mode') ?>">
								<option value="" selected  ><?php echo 'Select Team Mode ...' ?></option>
								<?php foreach(TournamentCore::processParticipantTeamModes() as $_key => $_mode): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_mode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Game Name') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40">
							<input type="text" class="form-control" id="sport_game_type_name"	name="sport_game_type[sport_game_type_name]"	placeholder="<?php echo __('Game Name') ?>">
						</div>
					</div>   
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-md" rows=3 id="description" name="sport_game_type[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#sport_game_type_name').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_category').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//document.getElementById("round_name").value = $(this).val()';
		return false;
		
	});
	$('#sport_game_type').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_mode').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_throw_type').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_player_mode').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_team_mode').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_measurement').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_distance').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_type_alias').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
</script>

