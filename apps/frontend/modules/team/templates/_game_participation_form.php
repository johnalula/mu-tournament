<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSportGameParticipationForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Game Participation') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_type_name" name="sport_game_participation[sport_game_type_name]" placeholder="<?php echo __('Candidate Sport Game Type') ?>" title="<?php echo __('Candidate Sport Game Type') ?>" value="" data-toggle="modal" data-target="#candidateSportGameTypeModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_type_id" name="sport_game_participation[sport_game_type_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_type_token_id" name="sport_game_participation[sport_game_type_token_id]" value=""> 
								<input type="hidden" class="form-control" id="team_id" name="sport_game_participation[team_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_team->id ?>"  >
								<input type="hidden" class="form-control" id="team_token_id" name="sport_game_participation[team_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_team->token_id ?>"  >
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGameType" type="button" data-toggle="modal" data-target="#candidateSportGameTypeModal" title="<?php echo __('Candidat Sport Game Type') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Sport Games Type') ?>"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<select id="game_category" name="team_group[game_category]" class="form-control" title="<?php echo __('Match Group') ?>">
								<option value="" selected  ><?php echo 'Select Category ...' ?></option>
								<?php foreach($_candidateGameCategorys as $_key => $_candidateGameCategory): ?>								 
									<option value="<?php echo $_candidateGameCategory->id ?>"  >
										<?php echo $_candidateGameCategory->categoryName ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Sport Game') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_name" name="sport_game_participation[sport_game_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_id" name="sport_game_participation[sport_game_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_token_id" name="sport_game_participation[sport_game_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGame" type="button" data-toggle="modal" data-target="#candidateSportGameModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Event Type') ?>:</label>
						<div class="col-sm-23">
							<select id="event_type" name="sport_game_participation[event_type]" class="form-control" title="<?php echo __('Event Type') ?>">
								<option value="" selected  ><?php echo 'Select Event ...' ?></option>
								<?php foreach(TournamentCore::processEventTypes() as $_key => $_eventType): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultEventType () ? 'selected':'' ?> >
										<?php echo $_eventType ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Gender Category') ?>"><?php echo __('Gender') ?>:</label>
						<div class="col-sm-23">
							<select id="gender_category" name="sport_game_participation[gender_category]" class="form-control" title="<?php echo __('Gender Category') ?>">
								<option value="" selected  ><?php echo 'Select Gender ...' ?></option>
								<?php foreach(TournamentCore::processGenders() as $_key => $_gender): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultGender () ? 'selected':'' ?> >
										<?php echo $_gender ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Participant') ?> #: </label>
						<div class="col-sm-23">
							<input type="text" class="form-control" id="participant_number"	name="sport_game_participation[participant_number]"	placeholder="<?php echo __('Participant Number') ?>">
						</div>
						<label class="col-sm-01 control-label"><?php echo __('Mode') ?>:</label>
						<div class="col-sm-23">
							 <select id="player_mode" name="match_fixture[player_mode]" class="form-control" title="<?php echo __('Mode') ?>">
								<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
								<?php foreach(TournamentCore::processPlayerModes() as $_key => $_mode): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_MULTIPLE ? 'selected':'' ?> >
										<?php echo $_mode ?>
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
