<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchParticipantTeamForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Match Participant Team Information') ?>">
						<?php echo __('Participant Team') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Match Fixtures') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="match_fixture" name="match_participant_team[match_fixture]" placeholder="<?php echo __('Candidate Match Fixture') ?>" title="<?php echo __('Candidate Match Fixture') ?>" value="" data-toggle="modal" data-target="#candidateTournamentMatchFixtureModal"  disabled>
								<input type="hidden" class="form-control" id="match_fixture_id" name="match_participant_team[match_fixture_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="match_fixture_token_id" name="match_participant_team[match_fixture_token_id]" value=""> 
								<input type="hidden" class="form-control" id="gender_category_id" name="match_participant_team[gender_category_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_match_fixture_group_id" name="match_participant_team[tournament_match_fixture_group_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_match_fixture_token_group_id" name="match_participant_team[tournament_match_fixture_token_group_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_id" name="match_participant_team[sport_game_id]" value=""> 
								
								<input type="hidden" class="form-control" id="contestant_team_mode" name="match_participant_team[contestant_team_mode]" value="<?php echo TournamentCore::$_PAIR_TEAM ?>"> 
								<input type="hidden" class="form-control" id="match_fixture_contestant_team_mode" name="match_participant_team[match_fixture_contestant_team_mode]" value="<?php echo $_tournamentMatch->contestantTeamMode ?>"> 
								
								<input type="hidden" class="form-control" id="tournament_contestant_team_mode" name="match_participant_team[tournament_contestant_team_mode]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->contestantTeamMode ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_id" name="match_participant_team[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_token_id" name="match_participant_team[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_game_category_id" name="match_participant_team[tournament_match_game_category_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->sport_game_category_id ?>"  >
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentMatchFixture" type="button" data-toggle="modal" data-target="#candidateTournamentMatchFixtureModal" title="<?php echo __('Candidat Match Fixtures') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Group') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="tournament_sport_game_group_name" name="match_participant_team[tournament_sport_game_group_name]" placeholder="<?php echo __('Candidate Sport Game Group') ?>" title="<?php echo __('Candidate Sport Game Group') ?>" value="" data-toggle="modal" data-target="#candidateTournamentSportGameGroupModal"  disabled>
								<input type="hidden" class="form-control" id="tournament_sport_game_group_id" name="match_participant_team[tournament_sport_game_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="tournament_sport_game_group_token_id" name="match_participant_team[tournament_sport_game_group_token_id]" value=""> 
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentSportGameGroup" type="button" data-toggle="modal" data-target="#candidateTournamentSportGameGroupModal" title="<?php echo __('Candidat Sport Game Group') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Team') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="participant_team_name" name="match_participant_team[participant_team_name]" placeholder="<?php echo __('Candidate Participant Team') ?>" title="<?php echo __('Candidate Participant Team') ?>" value="" data-toggle="modal" data-target="#candidateParticipantTeamModal"  disabled>
								<input type="hidden" class="form-control" id="participant_team_id" name="match_participant_team[participant_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_team_token_id" name="match_participant_team[participant_team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_group_team_id" name="match_participant_team[sport_game_group_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_group_team_token_id" name="match_participant_team[sport_game_group_team_token_id]" value=""> 
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateParticipantTeam" type="button" data-toggle="modal" data-target="#candidateParticipantTeamModal" title="<?php echo __('Candidat Participant Teams') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<?php if($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM): ?>
					
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Group') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="tournament_sport_game_group_opponent_name" name="match_participant_team[tournament_sport_game_group_opponent_name]" placeholder="<?php echo __('Candidate Sport Game Group') ?>" title="<?php echo __('Candidate Sport Game Group') ?>" value="" data-toggle="modal" data-target="#candidateTournamentSportGameGroupOpponentModal"  disabled>
								<input type="hidden" class="form-control" id="tournament_sport_game_group_opponent_id" name="match_participant_team[tournament_sport_game_group_opponent_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="tournament_sport_game_group_opponent_token_id" name="match_participant_team[tournament_sport_game_group_opponent_token_id]" value=""> 
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentSportGameGroupOpponent" type="button" data-toggle="modal" data-target="#candidateTournamentSportGameGroupOpponentModal" title="<?php echo __('Candidat Sport Game Group') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Opponent Team') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="opponent_participant_team_name" name="match_participant_team[opponent_participant_team_name]" placeholder="<?php echo __('Candidate Opponent Participant Team') ?>" title="<?php echo __('Candidate Opponent Participant Team') ?>" value="" data-toggle="modal" data-target="#candidateOpponentParticipantTeamModal"  disabled>
								<input type="hidden" class="form-control" id="opponent_participant_team_id" name="match_participant_team[opponent_participant_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="opponent_participant_team_token_id" name="match_participant_team[opponent_participant_team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="opponent_sport_game_group_team_id" name="match_participant_team[opponent_sport_game_group_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="opponent_sport_game_group_team_token_id" name="match_participant_team[opponent_sport_game_group_team_token_id]" value=""> 
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateOpponentParticipantTeam" type="button" data-toggle="modal" data-target="#candidateOpponentParticipantTeamModal" title="<?php echo __('Candidat Participant Teams') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<?php endif; ?>
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Match Venue') ?>"><?php echo __('Match Venue') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control" id="sport_game_venue_name" name="match_participant_team[sport_game_venue_name]" placeholder="<?php echo __('Game Venue') ?>" title="<?php echo __('Sport Game Venue') ?>" >
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
						<label class="col-sm-01 control-label"><?php echo __('Time') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-23">
							<div class="input-group">
								<input type="text" class="form-control" id="match_time"	name="tournament_match_fixture[match_time]"	placeholder="<?php echo __('Match Time') ?>" required  >
								<input type="hidden" class="form-control" id="tournament_match_time_value" name="match_participant_team[tournament_match_time_value]" >
								<input type="hidden" class="form-control" id="tournament_match_session" name="match_participant_team[tournament_match_session]" >
								<div class="input-group-btn">
									<button type="button" class="btn btn-default	dropdown-toggle tournamentMathTimeValue" data-toggle="dropdown" >
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
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-sm" rows=3 id="description" name="match_fixture[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
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
		//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
