<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchParticipantForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Match Participant Information') ?>">
						<?php echo __('Participant') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Match Fixtures') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
								<div class="input-group">
								<input type="text" class="form-control " id="match_fixture" name="match_participant[match_fixture]" placeholder="<?php echo __('Candidate Match Fixture') ?>" title="<?php echo __('Candidate Match Fixture') ?>" value="" data-toggle="modal" data-target="#candidateTournamentMatchFixtureModal"  disabled>
								<input type="hidden" class="form-control" id="match_fixture_id" name="match_participant[match_fixture_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="match_fixture_token_id" name="match_participant[match_fixture_token_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_group_id" name="match_participant[sport_game_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_group_token_id" name="match_participant[sport_game_group_token_id]" value=""> 
								<input type="text" class="form-control" id="sport_game_id" name="match_participant[sport_game_id]" placeholder="" value="">
								<input type="text" class="form-control" id="gender_category_id" name="match_participant[gender_category_id]" placeholder="" value="">
								
								<input type="hidden" class="form-control" id="tournament_match_id" name="match_participant[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_token_id" name="match_participant[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_game_category_id" name="match_participant[tournament_match_game_category_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->sport_game_category_id ?>"  >
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentMatchFixture" type="button" data-toggle="modal" data-target="#candidateTournamentMatchFixtureModal" title="<?php echo __('Candidat Match Fixtures') ?>">
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
								<input type="text" class="form-control " id="participant_team_name" name="match_participant[participant_team_name]" placeholder="<?php echo __('Candidate Participant') ?>" title="<?php echo __('Candidate Participant') ?>" value="" data-toggle="modal" data-target="#candidateMatchParticipantTeamModal"  disabled>
								<input type="text" class="form-control" id="team_id" name="match_participant[team_id]" placeholder="" value="">
								<input type="text" class="form-control" id="team_token_id" name="match_participant[team_token_id]" value=""> 
								<input type="text" class="form-control" id="participant_team_id" name="match_participant[participant_team_id]" placeholder="" value="">
								<input type="text" class="form-control" id="participant_team_token_id" name="match_participant[participant_team_token_id]" value=""> 
								<input type="text" class="form-control" id="sport_game_group_team_id" name="match_participant[sport_game_group_team_id]" placeholder="" value="">
								<input type="text" class="form-control" id="sport_game_group_team_token_id" name="match_participant[sport_game_group_team_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateMatchParticipantTeam" type="button" data-toggle="modal" data-target="#candidateMatchParticipantTeamModal" title="<?php echo __('Candidat Participant') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Participant') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="participant_name" name="match_participant[participant_name]" placeholder="<?php echo __('Candidate Participant Team') ?>" title="<?php echo __('Candidate Participant Team') ?>" value="" data-toggle="modal" data-target="#candidateMatchParticipantTeamMemberModal"  disabled>
								<input type="hidden" class="form-control" id="participant_id" name="match_participant[participant_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_token_id" name="match_participant[participant_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateMatchParticipantTeamMember" type="button" data-toggle="modal" data-target="#candidateMatchParticipantTeamMemberModal" title="<?php echo __('Candidat Participant Teams') ?>" disabled >
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
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
	$('#event_type').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//alert('asdfa');
		return false;
	});  
	$('#player_mode').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_round').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_status').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#match_venue').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
