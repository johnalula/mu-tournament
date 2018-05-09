<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<div class="ui-row" id=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Match Information') ?>">
					<?php echo __('Tournament Match') ?>
				</legend>
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament') ?>"><?php echo __('Tournament') ?>:</label>
					<div class="col-sm-40"> 
						<input type="text" class="form-control" id="tournament_name" name="tournament_match[tournament_name]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentName.' ('.$_activeTournament->tournamentAlias.' ) - '.$_activeTournament->tournamentSeason ?>" disabled >
						<input type="hidden" class="form-control" id="tournament_token_id" name="tournament_match[tournament_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->token_id ?>"  >
						<input type="hidden" class="form-control" id="tournament_id" name="tournament_match[tournament_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->id ?>"  >
						<input type="hidden" class="form-control" id="match_season" name="tournament_match[match_season]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentSeason ?>"  >
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament Game Type') ?>"><?php echo __('Game Type') ?>:<span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_category_name" name="tournament_match[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
							<input type="hidden" class="form-control" id="sport_game_category_id" name="tournament_match[sport_game_category_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_category_token_id" name="tournament_match[sport_game_category_token_id]" value=""> 
							<input type="hidden" class="form-control" id="contestant_team_mode" name="tournament_match[contestant_team_mode]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Category') ?>">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament Match Status') ?>"><?php echo __('Status') ?>:</label>
					<div class="col-sm-23">
						<select id="tournament_match_round_mode" name="tournament_match[tournament_match_round_mode]" class="form-control" title="<?php echo __('Tournament Match Round Mode') ?>">
								<option value=""  ><?php echo 'Select Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchRoundModes() as $_key => $_round): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchRoundMode() ? 'selected':'' ?> >
										<?php echo $_round ?>
									</option>								 
								<?php endforeach; ?>
							</select>
							
						
					</div>
					<label class="col-sm-01 control-label" title="<?php echo __('Touirnament Match Date') ?>"><?php echo __('Date') ?>:</label>
					<div class="col-sm-23">
						<select id="match_status" name="tournament_match[match_status]" class="form-control" title="<?php echo __('Match Status') ?>">
							<option value=""  ><?php echo 'Select Status ...' ?></option>
							<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_PENDING ? 'selected':'' ?> >
									<?php echo $_matchStatus ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
					<div class="col-sm-40"> 
						<textarea class="form-control form-control-md" rows=4 id="description" name="tournament_match[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
					</div>
				</div>
			</fieldset> 
		</div> 
		<div class="ui-clear-fix"></div>
	</div> 
</div> 
 
<script>
	 
	$('#match_status').change(function(e) {
		//$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	
	$('#description').keyup(function(e) {
		//$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
		/*$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");*/
	}); 
	 
</script>
