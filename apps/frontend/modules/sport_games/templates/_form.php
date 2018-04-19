<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentSportGameForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Sport Games Information') ?>">
						<?php echo __('Sport Games') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Tournament Game Type') ?>"><?php echo __('Category') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_category_name" name="sport_game_type[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_category_id" name="sport_game_type[sport_game_category_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_category_token_id" name="sport_game_type[sport_game_category_token_id]" value=""> 
								<input type="hidden" class="form-control" id="contestant_team_mode" name="sport_game_type[contestant_team_mode]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Category') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Game Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_type" name="sport_game_type[sport_game_type]" class="form-control" title="<?php echo __('Game Type') ?>">
								<option value="" selected  ><?php echo 'Select Game Type ...' ?></option>
								<?php foreach(TournamentCore::processDistanceTypes() as $_key => $_roundNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_roundNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Type') ?>"><?php echo __('Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_type_mode" name="sport_game_type[sport_game_type_mode]" class="form-control" title="<?php echo __('Type Mode') ?>">
								<option value="" selected  ><?php echo 'Select Type ...' ?></option>
								<?php foreach(TournamentCore::processAthleticsTypes() as $_key => $_typeMode): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_typeMode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Measurement') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_measurement" name="sport_game_type[sport_game_measurement]" class="form-control" title="<?php echo __('Measurement') ?>">
								<option value="" selected  ><?php echo 'Select Measure. ...' ?></option>
								<?php foreach(TournamentCore::processDistanceMeasurements() as $_key => $_event): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_METER ? 'selected':'' ?> >
										<?php echo $_event.' ('.TournamentCore::processDistanceMeasurementAlias ($_key).')' ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Game Distance') ?>"><?php echo __('Distance') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<input type="text" class="form-control" id="sport_game_distance"	name="sport_game_type[sport_game_distance]"	placeholder="<?php echo __('Game Distance') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Game Name') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40">
							<input type="text" class="form-control" id="sport_game_type_name"	name="sport_game_type[sport_game_type_name]"	placeholder="<?php echo __('Game Name') ?>">
						</div>
					</div>   
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Throw Type Mode') ?>"><?php echo __('Throw') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_throw_type" name="sport_game_type[sport_game_throw_type]" class="form-control" title="<?php echo __('Game Throw Type') ?>">
								<option value="" selected  ><?php echo 'Select Throw ...' ?></option>
								<?php foreach(TournamentCore::processThrowTypes() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Jump Type Mode') ?>"><?php echo __('Jump') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_jump_type_mode" name="sport_game_type[sport_game_jump_type_mode]" class="form-control" title="<?php echo __('Jump Type Mode') ?>">
								<option value="" selected  ><?php echo 'Select Jump ...' ?></option>
								<?php foreach(TournamentCore::processJumpTypes() as $_key => $_event): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_event ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Player Mode') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_player_mode" name="sport_game_type[sport_game_player_mode]" class="form-control" title="<?php echo __('Player Mode') ?>">
								<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
								<?php foreach(TournamentCore::processPlayerModes() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_MULTIPLE ? 'selected':'' ?> >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Sport Game Status') ?>"><?php echo __('Status') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="sport_game_status" name="sport_game_type[sport_game_status]" class="form-control" title="<?php echo __('Sport Game Status') ?>">
								<option value="" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_status): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_ACTIVE ? 'selected':'' ?> >
										<?php echo $_status ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-sm" rows=3 id="description" name="sport_game_type[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_category').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
		
	});
	$('#sport_game_type').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_mode').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_throw_type').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_player_mode').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_team_mode').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_measurement').change(function() {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_distance').keyup(function(e) {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_type_alias').keyup(function(e) {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
</script>

