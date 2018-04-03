<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createGroupMemberTeamForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Group Member Team Information') ?>">
						<?php echo __('Group Member') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Team') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
								<div class="input-group">
								<input type="text" class="form-control " id="member_team_name" name="team_group_member[member_team_name]" placeholder="<?php echo __('Candidate Team') ?>" title="<?php echo __('Candidate Team') ?>" value="" data-toggle="modal" data-target="#candidateGroupMemberTeamModal"  disabled>
								<input type="hidden" class="form-control" id="member_team_id" name="team_group_member[member_team_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="member_team_token_id" name="team_group_member[member_team_token_id]" value=""> 
								<input type="hidden" class="form-control" id="team_group_id" name="team_group_member[team_group_id]" value="<?php echo $_sportGameTeamGroup->id ?>"> 
								<input type="hidden" class="form-control" id="team_group_token_id" name="team_group_member[team_group_token_id]" value="<?php echo $_sportGameTeamGroup->token_id ?>"> 
								<input type="hidden" class="form-control" id="sport_game_id" name="team_group_member[sport_game_id]" value="<?php echo $_sportGameTeamGroup->sportGameID ?>"> 
								<input type="hidden" class="form-control" id="sport_game_token_id" name="team_group_member[sport_game_token_id]" value="<?php echo $_sportGameTeamGroup->sportGameTokenID ?>"> 
								<input type="hidden" class="form-control" id="gender_category_id" name="team_group_member[gender_category_id]" value="<?php echo $_sportGameTeamGroup->groupGenderCategoryID ?>"> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateGroupMemberTeam" type="button" data-toggle="modal" data-target="#candidateGroupMemberTeamModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-20 control-label"><?php echo __('Status') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-23">
							<select id="team_status" name="team_group_member[team_status]" class="form-control" title="<?php echo __('Team Status') ?>">
								<option value="100" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_teamStatus): ?>								 
									<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::processDefaultTournamentStatus () ? 'selected':'' ?> >
										<?php echo $_teamStatus ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Date') ?>"><?php echo __('Date') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-23">
							<div class="input-group"> 
								<input class="form-control" id="start_date" name="team_group_member[start_date]" type="text" placeholder="<?php echo __('Start Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Tournament Start Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-md" rows=3 id="description" name="match_fixture[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//alert('asdfa');
		return false;
	});  
	$('#player_mode').change(function(e) {
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_round').change(function(e) {
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#matchteam_status').change(function(e) {
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	  
	$('#description').keyup(function(e) {
		$("#createTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
