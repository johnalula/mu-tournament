<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchFixtureForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Match Fixture Information') ?>">
						<?php echo __('Match Fixture') ?>
					</legend> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Parent Fixture') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-410"> 
							<div class="input-group">
								<input type="text" class="form-control " id="parent_match_fixture_name" name="tournament_match_fixture[parent_match_fixture_name]" placeholder="<?php echo __('Candidate Parent Match Fixture') ?>" title="<?php echo __('Candidate Parent Match Fixture') ?>" value="" data-toggle="modal" data-target="#candidateParentMatchFixtureModal"  disabled>
								<input type="hidden" class="form-control" id="parent_match_fixture_id" name="tournament_match_fixture[parent_match_fixture_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="parent_match_fixture_token_id" name="tournament_match_fixture[parent_match_fixture_token_id]" value=""> 
								
								<input type="hidden" class="form-control" id="sport_game_type_id" name="tournament_match_fixture[sport_game_type_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->gameCategoryID ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_id" name="tournament_match_fixture[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_token_id" name="tournament_match_fixture[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_number" name="tournament_match_fixture[tournament_match_number]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->tournamentMatchNumber ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_round_mode" name="tournament_match_fixture[tournament_match_round_mode]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->tournamentMatchRoundMode ?>"  >
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateParentMatchFixture" type="button" data-toggle="modal" data-target="#candidateParentMatchFixtureModal" title="<?php echo __('Candidat Parent Match Fixture') ?>" <?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_PRELIMINARY_ROUND ? 'disabled':'' ?> disabled>
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Team Groups') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-410"> 
							<div class="input-group">
								<input type="text" class="form-control " id="tournament_sport_game_group_name" name="tournament_match_fixture[tournament_sport_game_group_name]" placeholder="<?php echo __('Candidate Tournament Sport Game Team Group') ?>" title="<?php echo __('Candidate Tournament Sport Game Group') ?>" value="" data-toggle="modal" data-target="#candidateSportGameTournamentGroupModal"  disabled>
								<input type="hidden" class="form-control" id="tournament_sport_game_group_id" name="tournament_match_fixture[tournament_sport_game_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="tournament_sport_game_group_token_id" name="tournament_match_fixture[tournament_sport_game_group_token_id]" value=""> 
								<input type="hidden" class="form-control" id="gender_category_id" name="tournament_match_fixture[gender_category_id]" value=""> 
								<input type="hidden" class="form-control" id="contestant_team_mode" name="tournament_match_fixture[contestant_team_mode]" value=""> 
								<input type="hidden" class="form-control" id="contestant_mode" name="tournament_match_fixture[contestant_mode]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_id" name="tournament_match_fixture[sport_game_id]" placeholder="<?php echo __('Tournament') ?>" value=""  >
								<input type="hidden" class="form-control" id="sport_game_token_id" name="tournament_match_fixture[sport_game_token_id]" placeholder="<?php echo __('Tournament') ?>" value=""  >
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGameTournamentGroup" type="button" data-toggle="modal" data-target="#candidateSportGameTournamentGroupModal" title="<?php echo __('Candidate Sport Game Team Group') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
							<span class="required-error ui-display-none" id="last_name_required"><?php echo __("Required Field!") ?></span>
							<span class="invalid-error ui-display-none" id="last_name_invalid"><?php echo __("Invalid Input!") ?></span>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Heat Mode') ?>:&nbsp;</label>
						<div class="col-sm-23">
							<div class="input-group">
								<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('Heats')  ?>&nbsp;</span>
								<input type="text" class="form-control ui-text-right-align" id="number_of_heats_per_group" name="tournament_match_fixture[number_of_heats_per_group]" value=""  placeholder="<?php echo __('Per Group') ?>"> 
							</div><!-- input-group -->
						</div>
						<label class="col-sm-121 control-label" title="<?php echo __('Event Type') ?>"><?php echo __('Event') ?>:</label>
						<div class="col-sm-23">
							<select id="event_type" name="tournament_match_fixture[event_type]" class="form-control" title="<?php echo __('Event Type') ?>">
								<option value=""  ><?php echo 'Select Event ...' ?></option>
								<?php foreach(TournamentCore::processEventTypes() as $_key => $_eventType): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::makeDefaultEventType($_tournamentMatch->contestantTeamMode) ? 'selected':'' ?> > 
										<?php echo $_eventType ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>   
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Round Mode') ?>:&nbsp;</label>
						<div class="col-sm-23">
							<select id="tournament_match_round_mode" name="tournament_match[tournament_match_round_mode]" class="form-control" title="<?php echo __('Tournament Match Round Mode') ?>">
								<option value=""  ><?php echo 'Select Mode ...' ?></option>
								<?php foreach(TournamentCore::processRoundModes() as $_key => $_round): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == $_tournamentMatch->tournamentMatchRoundMode ? 'selected':'' ?> >
										<?php echo $_round ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-121 control-label" title="<?php echo __('Qualifying Status') ?>"><?php echo __('Qualifying') ?>:</label>
						<div class="col-sm-23">
							<select id="qualifying_status" name="tournament_match_fixture[qualifying_status]" class="form-control" title="<?php echo __('Event Type') ?>">
								<option value=""  ><?php echo 'Select Event ...' ?></option>
								<?php foreach(TournamentCore::processMatchCompetitionRoundModes() as $_key => $_status): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::makeMatchCompetitionRoundMode($_tournamentMatch->tournamentMatchRoundMode) ? 'selected':'' ?> > 
										<?php echo $_status ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>    
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Match Venue') ?>"><?php echo __('Match Venue') ?>:&nbsp;</label>
						<div class="col-sm-410"> 
							<div class="input-group">
								<input type="text" class="form-control" id="sport_game_venue_name" name="match_participant_team[sport_game_venue_name]" placeholder="<?php echo __('Game Venue') ?>" title="<?php echo __('Sport Game Venue') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? '':'disabled' ?>>
								<input type="hidden" class="form-control" id="sport_game_group_type_id" name="match_participant_team[sport_game_group_type_id]" >
								<div class="input-group-btn">
									<button type="button" class="btn btn-default	dropdown-toggle" data-toggle="dropdown" >
										Venu
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right">
										<li class="selectSportGameMatchVenue" rel="Mekelle Tigray Stadium" id="">
											<a href="#"><?php echo ('Mekelle Tigray Stadium') ?></a>
										</li> 			 
										<li class="selectSportGameMatchVenue" rel="Adi Haki Campus Stadium" id="">
											<a href="#"><?php echo ('Adi Haki Campus Stadium') ?></a>
										</li> 			 
										<li class="selectSportGameMatchVenue" rel="Arid Campus Stadium" id="">
											<a href="#"><?php echo ('Arid Campus Stadium') ?></a>
										</li> 			 
									</ul>
								</div><!-- /btn-group -->
							</div><!-- /input-group -->

						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Match Date') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-23">
							 <div class="input-group"> 
								<input class="form-control" id="match_date" name="match_participant_team[match_date]" type="text" placeholder="<?php echo __('Match Date') ?>" value="" title="<?php echo __('Match Date') ?>" readonly required >
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
						<label class="col-sm-121 control-label"><?php echo __('Time') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-23">
							 <input type="text" class="form-control" id="match_time"	name="match_participant_team[match_time]"	placeholder="<?php echo __('Match Time') ?>" required  >
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-410"> 
							<textarea class="form-control form-control-sm" rows=3 id="description" name="tournament_match_fixture[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//alert('asdfa');
		return false;
	});  
	$('#player_mode').change(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_round').change(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_status').change(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#match_venue').keyup(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		//$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020",  
		changeYear: true, 
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	
	 
</script>
