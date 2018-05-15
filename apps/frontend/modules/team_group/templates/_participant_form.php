<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createGroupTeamParticipantMemberForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Group Member Team Participant Information') ?>">
						<?php echo __('Participant') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Group') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_group_name" name="team_group_member_participant[sport_game_group_name]" placeholder="<?php echo __('Candidate Sport Game Group') ?>" title="<?php echo __('Candidate Team') ?>" value="" data-toggle="modal" data-target="#candidateTournamentSportGameGroupModal"  disabled required >
								<input type="hidden" class="form-control" id="sport_game_group_id" name="team_group_member_participant[sport_game_group_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_group_token_id" name="team_group_member_participant[sport_game_group_token_id]" value=""> 
								<input type="hidden" class="form-control" id="tournament_id" name="team_group_member_participant[tournament_id]" placeholder="" value="<?php echo $_tournamentTeamGroup->tournament_id ?>">
								<input type="hidden" class="form-control" id="tournament_team_group_id" name="team_group_member_participant[tournament_team_group_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentTeamGroup->id ?>"  >
								<input type="hidden" class="form-control" id="tournament_team_group_token_id" name="team_group_member_participant[tournament_team_group_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentTeamGroup->token_id ?>"  > 
							
								<input type="hidden" class="form-control" id="sport_game_id" name="team_group_member_participant[sport_game_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_token_id" name="team_group_member_participant[sport_game_token_id]" value=""> 
								<input type="hidden" class="form-control" id="gender_category_id" name="team_group_member_participant[gender_category_id]" value=""> 
								
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentSportGameGroup" type="button" data-toggle="modal" data-target="#candidateTournamentSportGameGroupModal" title="<?php echo __('Candidate Sport Game Group') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Batch Mode') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<select id="member_participant_status" name="team_group_member_participant[member_participant_status]" class="form-control" title="<?php echo __('Team Status') ?>">
								<option value="100" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(TournamentCore::processDataCreationModes() as $_key => $_dataCreation): ?>								 
									<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::$_INDIVIDUAL_CREATION_MODE ? 'selected':'' ?> >
										<?php echo $_dataCreation ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Team') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="participant_team_name" name="team_group_member_participant[participant_team_name]" placeholder="<?php echo __('Candidate Participant Team') ?>" title="<?php echo __('Candidate Group Member Team') ?>" value="" data-toggle="modal" data-target="#candidateTournamentGroupMemberTeamModal"  disabled required >
								<input type="hidden" class="form-control" id="participant_team_id" name="team_group_member_participant[participant_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_team_token_id" name="team_group_member_participant[participant_team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="group_member_participant_team_id" name="team_group_member_participant[group_member_participant_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="group_member_participant_team_token_id" name="team_group_member_participant[group_member_participant_team_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentGroupMemberTeam" type="button" data-toggle="modal" data-target="#candidateTournamentGroupMemberTeamModal" title="<?php echo __('Candidat Participant Team') ?>" disabled>
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Participant') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="participant_name" name="team_group_member_participant[participant_name]" placeholder="<?php echo __('Candidate Participant') ?>" title="<?php echo __('Candidate Participant') ?>" value="" data-toggle="modal" data-target="#candidateGroupTeamParticipantMemberModal"  disabled>
								<input type="hidden" class="form-control" id="participant_id" name="team_group_member_participant[participant_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_token_id" name="team_group_member_participant[participant_token_id]" value=""> 
								<input type="hidden" class="form-control" id="participant_member_role_id" name="team_group_member_participant[participant_member_role_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_member_role_token_id" name="team_group_member_participant[participant_member_role_token_id]" value=""> 
								<input type="hidden" class="form-control" id="participant_role_id" name="team_group_member_participant[participant_role_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateGroupTeamParticipantMember" type="button" data-toggle="modal" data-target="#candidateGroupTeamParticipantMemberModal" title="<?php echo __('Candidat Participant') ?>" disabled>
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
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
	$('#member_participant_status').change(function(e) {
		if($(this).val() == 2){
			$("#createBatchGroupTeamParticipantMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		}
		//alert('asdfa');
		return false;
	});  
	 
	$('#matchteam_status').change(function(e) {
		//$("#createGroupTeamParticipantMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelGroupTeamParticipantMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	   
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
