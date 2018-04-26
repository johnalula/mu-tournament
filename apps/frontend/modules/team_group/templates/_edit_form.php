<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
	<div class="ui-row" id=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Group Information') ?>">
					<?php echo __('Team Group') ?>
				</legend>
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament') ?>"><?php echo __('Tournament') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-40"> 
						<input type="text" class="form-control" id="tournament_name" name="team_group[tournament_name]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentName.' ('.$_activeTournament->tournamentAlias.' ) - '.$_activeTournament->tournamentSeason ?>" disabled >
						<input type="hidden" class="form-control" id="tournament_token_id" name="team_group[tournament_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->token_id ?>"  >
						<input type="hidden" class="form-control" id="tournament_id" name="team_group[tournament_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->id ?>"  >
						<input type="hidden" class="form-control" id="match_season" name="team_group[match_season]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentSeason ?>"  >
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Sport Games Type') ?>"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<select id="game_category" name="team_group[game_category]" class="form-control" title="<?php echo __('Match Group') ?>">
							<option value="" selected  ><?php echo 'Select Category ...' ?></option>
							<?php foreach($_candidateGameCategorys as $_key => $_candidateGameCategory): ?>								 
								<option value="<?php echo $_candidateGameCategory->id ?>"  >
									<?php echo $_candidateGameCategory->categoryName ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Sport Game') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_full_name" name="team_group[sport_game_full_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled required >
							<input type="hidden" class="form-control" id="sport_game_id" name="team_group[sport_game_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_token_id" name="team_group[sport_game_token_id]" value=""> 
							<input type="hidden" class="form-control" id="sport_game_category_name" name="team_group[sport_game_category_name]" value=""> 
							<input type="hidden" class="form-control" id="sport_game_contestant_team_mode" name="team_group[sport_game_contestant_team_mode]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGame" type="button" data-toggle="modal" data-target="#candidateSportGameModal" title="<?php echo __('Candidat Sport Game') ?>" disabled>
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
						<span class="required-error ui-display-none" id="last_name_required"><?php echo __("Required Field!") ?></span>
						<span class="invalid-error ui-display-none" id="last_name_invalid"><?php echo __("Invalid Input!") ?></span>
					</div>
				</div>  
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Group') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="group_type_name" name="team_group[group_type_name]" placeholder="<?php echo __('Candidate Group Type') ?>" title="<?php echo __('Candidate Group Type') ?>" value="" data-toggle="modal" data-target="#candidateGroupTypeModal"  disabled required>
							<input type="hidden" class="form-control" id="group_type_id" name="team_group[group_type_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="group_type_token_id" name="team_group[group_type_token_id]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateGroupType" type="button" data-toggle="modal" data-target="#candidateGroupTypeModal" title="<?php echo __('Candidat Group Type') ?>" disabled>
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
						<span class="required-error ui-display-none" id="last_name_required"><?php echo __("Required Field!") ?></span>
						<span class="invalid-error ui-display-none" id="last_name_invalid"><?php echo __("Invalid Input!") ?></span>
					</div>
				</div>   
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Group Member Number') ?>"><?php echo __('Total Member #') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-23">
						<input type="text" class="form-control" id="total_group_members" name="team_group[total_group_members]" value=""  placeholder="<?php echo __('Total Group Members') ?>"> 
					</div>
					<label class="col-sm-01 control-label" title="<?php echo __('Gender Category') ?>"><?php echo __('Gender') ?>:</label>
					<div class="col-sm-23">
						<select id="gender_category" name="team_group[gender_category]" class="form-control" title="<?php echo __('Gender Category') ?>">
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
						<textarea class="form-control form-control-md" rows=4 id="description" name="team_group[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
					</div>
				</div>
			</fieldset> 
		</div> 
		<div class="ui-clear-fix"></div>
	</div> 
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
