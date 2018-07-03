<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchFixtureForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="col-sm-6" id="" style="">   
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset  class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Sport Games Information') ?>">
							<?php echo __('Sport Games') ?>
						</legend>   
						<div>
							<input type="hidden" class="form-control" id="sport_game_type_id" name="tournament_match_fixture[sport_game_type_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->gameCategoryID ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_id" name="tournament_match_fixture[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_token_id" name="tournament_match_fixture[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_number" name="tournament_match_fixture[tournament_match_number]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->tournamentMatchNumber ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_round_mode" name="tournament_match_fixture[tournament_match_round_mode]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->tournamentMatchRoundMode ?>"  >
							<input type="hidden" class="form-control" id="tournament_contestant_team_mode" name="tournament_match_fixture[tournament_contestant_team_mode]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->tournamentContestantTeamMode ?>"  >
						</div>		 
						<div class="form-group">
							<label class="col-sm-22 control-label"><?php echo __('Team Groups') ?>: <span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
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
							<label class="col-sm-22 control-label"><?php echo __('Teams') ?>:&nbsp;</label>
							<div class="col-sm-30">
								<div class="input-group">
									<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('of')  ?>&nbsp;</span>
									<input type="text" class="form-control ui-text-right-align" id="number_of_participant_teams" name="tournament_match_fixture[number_of_participant_teams]" value=""  placeholder="<?php echo __('Participant Teams') ?>" disabled> 
								</div><!-- input-group -->
							</div>
							<label class="col-sm-212 control-label" title="<?php echo __('Contestant') ?>"><?php echo __('Members') ?>:</label>
							<div class="col-sm-30">
								<div class="input-group">
									<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('of')  ?>&nbsp;</span>
									<input type="text" class="form-control ui-text-right-align" id="number_of_participant_contestats" name="tournament_match_fixture[number_of_participant_contestats]" value=""  placeholder="<?php echo __('Contestants') ?>" disabled> 
								</div><!-- input-group -->
							</div>
						</div>   
						<div class="form-group">
							<label class="col-sm-22 control-label"><?php echo __('Heat Mode') ?>:&nbsp;</label>
							<div class="col-sm-30">
								<div class="input-group">
									<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('Heats')  ?>&nbsp;</span>
									<input type="text" class="form-control ui-text-right-align" id="number_of_heats_per_group" name="tournament_match_fixture[number_of_heats_per_group]" value=""  placeholder="<?php echo __('Per Group') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>> 
								</div><!-- input-group -->
							</div>
							<label class="col-sm-212 control-label" title="<?php echo __('Event Type') ?>"><?php echo __('Event') ?>:</label>
							<div class="col-sm-30">
								<select id="event_type" name="tournament_match_fixture[event_type]" class="form-control" title="<?php echo __('Event Type') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>>
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
							<label class="col-sm-22 control-label"><?php echo __('Round Mode') ?>:&nbsp;</label>
							<div class="col-sm-30">
								<select id="tournament_match_round_mode" name="tournament_match_fixture[tournament_match_round_mode]" class="form-control" title="<?php echo __('Tournament Match Round Mode') ?>">
									<option value=""  ><?php echo 'Select Mode ...' ?></option>
									<?php foreach(TournamentCore::processRoundModes() as $_key => $_round): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == $_tournamentMatch->tournamentMatchRoundMode ? 'selected':'' ?> >
											<?php echo $_round ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div>
							<label class="col-sm-212 control-label" title="<?php echo __('Qualifying Status') ?>"><?php echo __('Qualifying') ?>:</label>
							<div class="col-sm-30">
								<select id="qualifying_status" name="tournament_match_fixture[qualifying_status]" class="form-control" title="<?php echo __('Event Type') ?>">
									<option value=""  ><?php echo 'Select Event ...' ?></option>
									<?php foreach(TournamentCore::processMatchCompetitionRoundModes() as $_key => $_status): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == $_tournamentMatch->tournamentMatchResultMode ? 'selected':'' ?> > 
											<?php echo $_status ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div>
						</div>    
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="description" name="team_member[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>"></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div> 
			</div> 
			<div class="col-sm-6" id="" style="">  
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/details') ?>" title="<?php echo __('Member Detail information') ?>">
							<?php echo __('Detail Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-24 control-label" title="<?php echo __('Match Venue') ?>"><?php echo __('Match Venue') ?>:&nbsp;</label>
							<div class="col-sm-80"> 
								<div class="input-group">
									<input type="text" class="form-control" id="sport_game_venue_name" name="tournament_match_fixture[sport_game_venue_name]" placeholder="<?php echo __('Game Venue') ?>" title="<?php echo __('Sport Game Venue') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>>
									<input type="hidden" class="form-control" id="sport_game_group_type_id" name="tournament_match_fixture[sport_game_group_type_id]" >
									<div class="input-group-btn">
										<button type="button" class="btn btn-default	dropdown-toggle" data-toggle="dropdown"  <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>>
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
							<label class="col-sm-24 control-label"><?php echo __('Match Date') ?>: <span class="ui-red-text">*</span></label>
							<div class="col-sm-30">
								 <div class="input-group"> 
									<input class="form-control" id="match_date" name="tournament_match_fixture[match_date]" type="text" placeholder="<?php echo __('Match Date') ?>" value="" title="<?php echo __('Match Date') ?>" readonly required <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?> >
									<span class="input-group-btn">
										<button class="btn btn-default ui-button-img" type="button">
											<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
										</button>
									</span> 
								</div>
							</div>
							<label class="col-sm-212 control-label"><?php echo __('Time') ?>: <span class="ui-red-text">*</span></label>
							<div class="col-sm-30">
								<div class="input-group">
									<input type="text" class="form-control" id="match_time"	name="tournament_match_fixture[match_time]"	placeholder="<?php echo __('Match Time') ?>" required  <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>  rel="<?php echo $_tournamentMatch->contestantTeamMode ?>">
									<input type="hidden" class="form-control" id="tournament_match_time_value" name="tournament_match_fixture[tournament_match_time_value]" value="">
									<input type="hidden" class="form-control" id="tournament_match_session" name="tournament_match_fixture[tournament_match_session]"  value="<?php echo TournamentCore::$_MORNING_SESSION ?>" rel="<?php echo $_tournamentMatch->contestantTeamMode ?>">
									<div class="input-group-btn">
										<button type="button" class="btn btn-default	dropdown-toggle tournamentMathTimeValue" data-toggle="dropdown" disabled >
											TIme
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right">
											<li class="selectTournamentMatchTime" rel="AM" id="<?php echo TournamentCore::$_MORNING_SESSION ?>">
												<a href="#"><?php echo ('AM') ?></a>
											</li> 			 
											<li class="selectTournamentMatchTime" rel="PM" id="<?php echo TournamentCore::$_AFTERNOON_SESSION ?>">
												<a href="#"><?php echo ('PM') ?></a>
											</li> 			  
										</ul>
									</div><!-- /btn-group -->
								</div><!-- /input-group -->
							</div>
						</div>   
						<div class="form-group">
							<label class="col-sm-24 control-label" title="<?php echo __('Qualifying Rows') ?>"><?php echo __('Qualify Rows') ?> # : <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<input type="text" class="form-control ui-text-right-align" id="qualifying_row_numbers"	name="tournament_match_fixture[qualifying_row_numbers]"	placeholder="<?php echo __('Qualifying Rows') ?>" value="<?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_FINAL ? '3':'' ?>" required  <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?> >
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Enable Qualifying Rows') ?>"><?php echo __('Enable') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="btn-toolbar" role="toolbar">
									<div class="btn-group">
										<input type="hidden" class="form-control" id="qualifing_row_numbers_flag" name="tournament_match_fixture[qualifing_row_numbers_flag]" value="<?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_FINAL ? '1':'0' ?>" >
										<button type="button" class="btn btn-default btn-xs btn-padding-sm-0 <?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_FINAL ? 'btn-success active':'' ?> " id="enabledQualifyingRowsYesButton" value="" title="<?php echo __('Enable Qualifying Rows') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>><?php echo __('Yes') ?>
										<button type="button" class="btn btn-default btn-sm btn-padding-sm-0 <?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_FINAL ? '':'btn-danger active' ?>" id="enabledQualifyingRowsNoButton" value="0" title="<?php echo __('Disabled Number of Teams') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>><?php echo __('No') ?> 
									</div> 
								</div>
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-24 control-label" title="<?php echo __('Best Qualifying Rows') ?>"><?php echo __('Best Rows') ?> # : <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<input type="text" class="form-control ui-text-right-align" id="best_qualifying_row_numbers"	name="tournament_match_fixture[best_qualifying_row_numbers]"	placeholder="<?php echo __('Best Qualifying Rows') ?>" <?php echo $_tournamentMatch->tournamentMatchRoundMode == TournamentCore::$_FINAL ? 'disabled':'' ?> required  <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?> >
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Enable Best Qualifying Rows') ?>"><?php echo __('Enable') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="btn-toolbar" role="toolbar">
									<div class="btn-group">
										<input type="hidden" class="form-control" id="best_qualifing_row_numbers_flag" name="tournament_match_fixture[best_qualifing_row_numbers_flag]" value="0" >
										<button type="button" class="btn btn-default btn-xs btn-padding-sm-0 " id="enabledBestQualifyingRowsYesButton" value="1" title="<?php echo __('Enable Best Qualifying Rows') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>><?php echo __('Yes') ?>
										<button type="button" class="btn btn-default btn-sm btn-padding-sm-0 btn-danger active" id="enabledBestQualifyingRowsNoButton" value="0" title="<?php echo __('Disabled Best Qualifying Rows') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>><?php echo __('No') ?> 
									</div> 
								</div>
							</div><!-- /input-group --> 
						</div>   
						<div class="form-group">
							<label class="col-sm-24 control-label" title="<?php echo __('Remark') ?>"><?php echo __('Remark') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="remark" name="tournament_match_fixture[remark]" placeholder="<?php echo __('Remark') ?>" title="<?php echo __('Remark') ?>"></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div>  
				
			</div> 		 
		</div> 
	</form>
</div> 

<script>
	$('.selectSportGameMatchVenue').click(function() {   
		var thisIDNumber = $(this).attr('rel');   
		var thisIDName = $(this).attr('id');   
		document.getElementById("sport_game_venue_name").value = thisIDNumber;
		//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	$('.selectTournamentMatchTime').click(function() {   
		var thisIDNumber = $(this).attr('rel');   
		var thisIDName = $(this).attr('id');   
		document.getElementById("match_time").value = $('#tournament_match_time_value').val()+' '+thisIDNumber;
		document.getElementById("tournament_match_session").value = thisIDName;
		//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	$('#match_time').keyup(function(key) {
		var thisIDNumber = $(this).attr('rel');   
		var thisIDName = $(this).attr('id');   
		document.getElementById("tournament_match_time_value").value = $(this).val();
		if($(this).attr('rel') == 2) {
			$('.tournamentMathTimeValue').removeAttr("disabled");
		}
		//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	$('#enabledQualifyingRowsYesButton').click(function() {
		$('#enabledQualifyingRowsYesButton').addClass('btn-success').addClass('active');
		$('#enabledQualifyingRowsNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("qualifing_row_numbers_flag").value = $(this).val() == 1 ? 1:0;
	});  
	$('#enabledQualifyingRowsNoButton').click(function() {
		$('#enabledQualifyingRowsNoButton').addClass('btn-danger').addClass('active');
		$('#enabledQualifyingRowsYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("qualifing_row_numbers_flag").value = $(this).val() == 0 ? 0:1;
	});   
	$('#enabledBestQualifyingRowsYesButton').click(function() {
		$('#enabledBestQualifyingRowsYesButton').addClass('btn-success').addClass('active');
		$('#enabledBestQualifyingRowsNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("best_qualifing_row_numbers_flag").value = $(this).val() == 1 ? 1:0;
	});  
	$('#enabledBestQualifyingRowsNoButton').click(function() {
		$('#enabledBestQualifyingRowsNoButton').addClass('btn-danger').addClass('active');
		$('#enabledBestQualifyingRowsYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("best_qualifing_row_numbers_flag").value = $(this).val() == 0 ? 0:1;
	});   
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020",  
		changeYear: true, 
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	
	 
</script>
