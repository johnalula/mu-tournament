<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchFixtureGroupParticipantForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Match Participant Information') ?>">
						<?php echo __('Participant') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Batch Mode') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							<select id="match_participant_creation_mode" name="match_participant[match_participant_creation_mode]" class="form-control" title="<?php echo __('Batch Participant Creation Mode') ?>">
								<option value="100" selected  ><?php echo 'Select Mode ...' ?></option>
								<?php foreach(TournamentCore::processDataCreationModes() as $_key => $_dataCreation): ?>								 
									<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::$_INDIVIDUAL_CREATION_MODE ? 'selected':'' ?> >
										<?php echo $_dataCreation ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Match Fixtures') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="match_fixture" name="match_participant[match_fixture]" placeholder="<?php echo __('Candidate Match Fixture') ?>" title="<?php echo __('Candidate Match Fixture') ?>" value="" data-toggle="modal" data-target="#candidateTournamentMatchFixtureGroupModal"  disabled>
								<input type="hidden" class="form-control" id="match_fixture_id" name="match_participant[match_fixture_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="match_fixture_token_id" name="match_participant[match_fixture_token_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_sport_game_group_id" name="match_participant[tournament_sport_game_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="tournament_sport_game_group_token_id" name="match_participant[tournament_sport_game_group_token_id]" value=""> 
								<input type="hidden" class="form-control" id="gender_category_id" name="match_participant[gender_category_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_match_fixture_group_id" name="match_participant[tournament_match_fixture_group_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_match_fixture_token_group_id" name="match_participant[tournament_match_fixture_token_group_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_id" name="match_participant[sport_game_id]" value=""> 
								
								<input type="hidden" class="form-control" id="contestant_team_mode" name="match_participant[contestant_team_mode]" value="<?php echo TournamentCore::$_PAIR_TEAM ?>"> 
								<input type="hidden" class="form-control" id="match_fixture_contestant_team_mode" name="match_participant[match_fixture_contestant_team_mode]" value="<?php echo $_tournamentMatch->contestantTeamMode ?>"> 
								
								<input type="hidden" class="form-control" id="tournament_contestant_team_mode" name="match_participant[tournament_contestant_team_mode]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->contestantTeamMode ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_id" name="match_participant[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_token_id" name="match_participant[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
								<input type="hidden" class="form-control" id="tournament_match_game_category_id" name="match_participant[tournament_match_game_category_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->sport_game_category_id ?>"  >
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentMatchFixtureGroups" type="button" data-toggle="modal" data-target="#candidateTournamentMatchFixtureGroupModal" title="<?php echo __('Candidat Match Fixtures') ?>">
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
								<input type="hidden" class="form-control" id="team_id" name="match_participant[team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="team_token_id" name="match_participant[team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="participant_team_id" name="match_participant[participant_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_team_token_id" name="match_participant[participant_team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_group_team_id" name="match_participant[sport_game_group_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_group_team_token_id" name="match_participant[sport_game_group_team_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateMatchFixtureParticipantTeam" type="button" data-toggle="modal" data-target="#candidateMatchFixtureParticipantTeamModal" title="<?php echo __('Candidat Participant') ?>" disabled >
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
								<input type="hidden" class="form-control" id="participant_role_id" name="match_participant[participant_role_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_role_token_id" name="match_participant[participant_role_token_id]" value=""> 
								<input type="hidden" class="form-control" id="participant_member_id" name="match_participant[participant_member_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_member_token_id" name="match_participant[participant_member_token_id]" value=""> 
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
	$('#match_participant_creation_mode').change(function(e) {
		/*if($(this).val() == 2 && document.getElementById("match_fixture_id").value ){
				$("#createBatchTournamentMatchFixtureTeamMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			} else {
				$(".selectCandidateMatchFixtureParticipantTeam").removeAttr("disabled") ;
			}*/
		return false;
	}); 
	 
	 
</script>
