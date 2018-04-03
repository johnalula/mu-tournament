<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamMemberForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row ui-left-margin" id=""> 
			<div class="col-sm-6 ui-left-margin" id="" style="">   
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset  class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('New Team Member Information') ?>">
							<?php echo __('Team Member') ?>
						</legend>  
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Team Member First Name') ?>"><?php echo __('First Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="first_name" name="team_member[first_name]" placeholder="<?php echo __('First Name') ?>" title="<?php echo __('Team Member First Name') ?>" autofocus required rel="ui-string" >
								<span class="required-error ui-display-none" id="first_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="first_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Team Member Middle Name') ?>"><?php echo __('M. Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="middle_name" name="team_member[middle_name]" placeholder="<?php echo __('Middle Name') ?>" title="<?php echo __('Employee Father name') ?>"required rel="ui-string">
								<span class="required-error ui-display-none" id="middle_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="middle_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Team Member Last Name') ?>"><?php echo __('L. Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="last_name" name="team_member[last_name]" placeholder="<?php echo __('Last Name') ?>" title="<?php echo __('Team Member Last name') ?>"required rel="ui-string" >
								<span class="required-error ui-display-none" id="last_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="last_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Member Gender') ?>"><?php echo __('Gender') ?>:</label>
							<div class="col-sm-31"> 
								<select id="member_gender" name="team_member[member_gender]" class="form-control" title="<?php echo __('Member Gender') ?>">
									<?php foreach(PartyCore::processAllGenders() as $_key => $_mode): ?>								 
										<option value="<?php echo  $_key ?>">
											<?php echo $_mode ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Member Date of Birth') ?>"><?php echo __('DOB') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<div class="input-group"> 
									<input type="text" class="form-control" id="date_of_birth" name="team_member[date_of_birth]" placeholder="<?php echo __('Date of Birth') ?>" title="<?php echo __('Employee Date of Birth') ?>" readonly rel="ui-date" >
									<span class="input-group-btn">
										<button class="btn btn-default ui-button-img" type="button" title="<?php echo __('Date of birth') ?>">
											<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
										</button>
									</span> 
								</div> 
							</div><!-- /input-group --> 
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
			<div class="col-sm-6 ui-left-margin" id="" style="">  
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/details') ?>" title="<?php echo __('Member Detail information') ?>">
							<?php echo __('Detail Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Sport Game') ?>"><?php echo __('Sport Game') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<div class="input-group">
									<input type="text" class="form-control " id="member_sport_game_name" name="team_member[member_sport_game_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateMemberSportGameModal"  disabled>
									<input type="hidden" class="form-control" id="member_sport_game_id" name="team_member[member_sport_game_id]" placeholder="" value="">
									<input type="hidden" class="form-control" id="member_sport_game_token_id" name="team_member[member_sport_game_token_id]" value=""> 
									<input type="hidden" class="form-control" id="member_tournament_id" name="member_tournament_id" placeholder="" value="<?php echo $_team->tournament_id ?>">
									<input type="hidden" class="form-control" id="member_team_id" name="member_team_id" placeholder="" value="<?php echo $_team->id ?>">
									<input type="hidden" class="form-control" id="member_team_token_id" name="member_team_token_id" placeholder="" value="<?php echo $_team->token_id ?>">
									<span class="input-group-btn">
										<button class="btn btn-default selectCandidateMemberSportGame" type="button" data-toggle="modal" data-target="#candidateMemberSportGameModal" title="<?php echo __('Candidat Sport Game') ?>">
											<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
										</button>
									</span>
								</div><!-- /input-group -->
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Member Role') ?>"><?php echo __('Role') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<select id="team_member_role" name="team_member[team_member_role]" class="form-control" title="<?php echo __('Team Member Role') ?>"  >
									<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
									<?php foreach(PersonCore::processPersonRoles() as $_key => $_mode): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == PersonCore::$_CONTESTANT ? 'selected':'' ?> >
											<?php echo $_mode ?>
										</option>								 
									<?php endforeach; ?> 
								</select> 
							</div><!-- /input-group --> 
						</div>   
						
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Team Member Number') ?>"><?php echo __('Member') ?> #:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="team_member_number" name="team_member[team_member_number]" placeholder="<?php echo __('Member Number') ?>" title="<?php echo __('Contestant Number') ?>" value="" rel="ui-member-number" >
								<span class="required-error ui-display-none"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Member Status') ?>"><?php echo __('Status') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<select id="member_status" name="team_member[member_status]" class="form-control" title="<?php echo __('Member Gender') ?>">
									<option value="" selected  ><?php echo 'Select Status ...' ?></option>
									<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_PENDING ? 'selected':'' ?> >
											<?php echo $_matchStatus ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
						</div> 
						
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Remark') ?>"><?php echo __('Remark') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="remark" name="team_member[remark]" placeholder="<?php echo __('Remark') ?>" title="<?php echo __('Remark') ?>"></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div>  
				
			</div> 		 
		</div> 
	</form>
</div> 

<script>
	$('#member_gender').change(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#player_mode').change(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});   
	 
	$('#first_name').keyup(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#middle_name').keyup(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#last_name').keyup(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
