<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamMemberRoleForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Member Role') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Participant') ?>"><?php echo __('Participant') ?>:<span class="ui-red-text"></span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="member_participant_name" name="team_member_role[member_participant_name]" placeholder="<?php echo __('Candidate Participant') ?>" title="<?php echo __('Candidate Participant') ?>" value="" data-toggle="modal" data-target="#candidateMemberParticipantModal"  disabled>
								<input type="hidden" class="form-control" id="member_participant_id" name="team_member_role[member_participant_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="member_participant_token_id" name="team_member_role[member_participant_token_id]" value=""> 
								<input type="hidden" class="form-control" id="member_participant_gender_id" name="team_member_role[member_participant_gender_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="team_member_role" name="team_member_role[team_member_role]" placeholder="" value="">
								<input type="hidden" class="form-control" id="team_member_relation" name="team_member_role[team_member_relation]" placeholder="" value="">
								<input type="hidden" class="form-control" id="member_tournament_id" name="team_member_role[member_tournament_id]" placeholder="" value="<?php echo $_team->tournament_id ?>">
								<input type="hidden" class="form-control" id="member_team_id" name="team_member_role[member_team_id]" placeholder="" value="<?php echo $_team->id ?>">
								<input type="hidden" class="form-control" id="member_team_token_id" name="team_member_role[member_team_token_id]" placeholder="" value="<?php echo $_team->token_id ?>">
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateMemberParticipant" type="button" data-toggle="modal" data-target="#candidateMemberParticipantModal" title="<?php echo __('Candidat Participant') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Category') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_category_name" name="team_member_role[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game Type') ?>" title="<?php echo __('Candidate Sport Game Type') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_category_id" name="team_member_role[sport_game_category_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_category_token_id" name="team_member_role[sport_game_category_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Type') ?>" disabled>
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Sport Game') ?>"><?php echo __('Sport Game') ?>:<span class="ui-red-text"></span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="member_sport_game_name" name="team_member_role[member_sport_game_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateMemberSportGameModal"  disabled>
								<input type="hidden" class="form-control" id="member_sport_game_id" name="team_member_role[member_sport_game_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="member_sport_game_token_id" name="team_member_role[member_sport_game_token_id]" value=""> 
								<input type="hidden" class="form-control" id="sport_game_gender_category" name="team_member_role[sport_game_gender_category]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateMemberSportGame" type="button" data-toggle="modal" data-target="#candidateMemberSportGameModal" title="<?php echo __('Candidat Sport Game') ?>" disabled>
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>   
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
						<div class="col-sm-40"> 
							<textarea class="form-control" rows=3 id="role_description" name="team_member_role[role_description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#team_member_role').change(function(e) {
		//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#member_status').change(function(e) {
		//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});   
	 
	$('#role_description').keyup(function(e) {
		//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
	//	$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	 
</script>
