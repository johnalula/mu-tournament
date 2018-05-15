<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamGroupForm" role="form" action="" method=""> 
	<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
	<div class="ui-row" id=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Group Information') ?>">
					<?php echo __('Team Group') ?>
				</legend> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Sport Games Type') ?>"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
					<input type="text" class="form-control" id="game_category" name="team_group_category[game_category]" placeholder="<?php echo __('Last Name') ?>" title="<?php echo __('Sport Game Type') ?>"required rel="ui-string" value="<?php echo $_tournamentTeamGroup->gameCategoryName ?>" disabled >
					<input type="hidden" class="form-control" id="game_category_id" name="team_group_category[game_category_id]" placeholder="<?php echo __('Last Name') ?>" title="<?php echo __('Sport Game Type') ?>"required rel="ui-string" value="<?php echo $_tournamentTeamGroup->gameCategoryID ?>" >
						 
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Sport Game') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_full_name" name="team_group_category[sport_game_full_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled required >
							<input type="hidden" class="form-control" id="tournament_id" name="team_group_category[tournament_id]" placeholder="" value="<?php echo $_tournamentTeamGroup->tournament_id ?>">
							<input type="hidden" class="form-control" id="tournament_group_code" name="team_group_category[tournament_group_code]" placeholder="" value="<?php echo $_tournamentTeamGroup->tournamentGroupCode ?>">
							<input type="hidden" class="form-control" id="sport_game_id" name="team_group_category[sport_game_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_token_id" name="team_group_category[sport_game_token_id]" value=""> 
							<input type="hidden" class="form-control" id="sport_game_category_name" name="team_group_category[sport_game_category_name]" value=""> 
							<input type="hidden" class="form-control" id="sport_game_contestant_team_mode" name="team_group_category[sport_game_contestant_team_mode]" value=""> 
							
							<input type="hidden" class="form-control" id="tournament_team_group_id" name="team_group_category[tournament_team_group_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentTeamGroup->id ?>"  >
							<input type="hidden" class="form-control" id="tournament_team_group_token_id" name="team_group_category[tournament_team_group_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentTeamGroup->token_id ?>"  >
							
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGame" type="button" data-toggle="modal" data-target="#candidateSportGameModal" title="<?php echo __('Candidat Sport Game') ?>" >
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
						<span class="required-error ui-display-none" id="last_name_required"><?php echo __("Required Field!") ?></span>
						<span class="invalid-error ui-display-none" id="last_name_invalid"><?php echo __("Invalid Input!") ?></span>
					</div>
				</div>   
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Group Number') ?>"><?php echo __('Group #') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-23">
						<input type="text" class="form-control" id="group_number" name="team_group_category[group_number]" value=""  placeholder="<?php echo __('Number of Groups') ?>"> 
					</div>
					<label class="col-sm-01 control-label" title="<?php echo __('Gender Category') ?>"><?php echo __('Gender') ?>:</label>
					<div class="col-sm-23">
						<select id="gender_category" name="team_group_category[gender_category]" class="form-control" title="<?php echo __('Gender Category') ?>">
							<option value="" selected  ><?php echo 'Select Gender ...' ?></option>
							<?php foreach(TournamentCore::processPlayerGender() as $_key => $_gender): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultGender () ? 'selected':'' ?> >
									<?php echo $_gender ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div>   
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-40"> 
						<textarea class="form-control form-control-sm" rows=4 id="description" name="team_group_category[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
					</div>
				</div>
			</fieldset> 
		</div> 
		<div class="ui-clear-fix"></div>
	</div> 
	</form>
</div> 
 
<script>
	 
	$('#game_category').change(function(e) {
		$("#createTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$(".selectCandidateSportGame").removeAttr("disabled") ;
		return false;
	});  
	$('#team_group_id').change(function(e) {
		$("#createTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	
	$('#description').keyup(function(e) {
		$("#createTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	 
</script>
