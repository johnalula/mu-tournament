<div class="ui-panel-form-box ui-main-panel-form-box-margin ui-main-panel-form-margin" id="">   
	<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
	<div class="ui-row" id=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
					<?php echo __('Tournament Match') ?>
				</legend>
				<div class="form-group">
					<label for="firstname" class="col-sm-102 control-label"><?php echo __('Tournament') ?>:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="tournament_name" name="tournament_match[tournament_name]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentName.' ('.$_activeTournament->tournamentAlias.' ) - '.$_activeTournament->tournamentSeason ?>" disabled >
						<input type="hidden" class="form-control" id="tournament_token_id" name="tournament_match[tournament_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->token_id ?>"  >
						<input type="hidden" class="form-control" id="tournament_id" name="tournament_match[tournament_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->id ?>"  >
						<input type="hidden" class="form-control" id="match_season" name="tournament_match[match_season]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->tournamentSeason ?>"  >
					</div>
				</div>
				<div class="form-group">
					<label for="firstname" class="col-sm-102 control-label"><?php echo __('Game Type') ?>:</label>
					<div class="col-sm-6">
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_category_name" name="tournament_match[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
							<input type="hidden" class="form-control" id="sport_game_category_id" name="tournament_match[sport_game_category_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_category_token_id" name="tournament_match[sport_game_category_token_id]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Category') ?>">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>
				<div class="form-group">
					<label for="firstname" class="col-sm-102 control-label"><?php echo __('Team Mode') ?>:</label>
					<div class="col-sm-6">
						<select id="participant_team_mode" name="tournament_match[participant_team_mode]" class="form-control" title="<?php echo __('Participant Teams Mode') ?>">
							<option value="100" selected  ><?php echo 'Select Participant Team Mode ...' ?></option>
							<?php foreach(TournamentCore::processParticipantTeamModes() as $_key => $_matchStatus): ?>								 
								<option value="<?php echo $_key ?>"  >
									<?php echo $_matchStatus ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="form-group" style="border:0px solid #f00;">
					<label for="season" class="col-sm-102 control-label"><?php echo __('Status') ?>:</label>
					<div class="col-sm-201">
						 <select id="match_status" name="tournament_match[match_status]" class="form-control" title="<?php echo __('Match Status') ?>">
							<option value="" selected  ><?php echo 'Select Status ...' ?></option>
							<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
								<option value="<?php echo $_key ?>"  >
									<?php echo $_matchStatus ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
					<label for="lastname" class="col-sm-101 control-label"><?php echo __('Date') ?>:</label>
					<div class="col-sm-201">
						<div class="input-group"> 
							<input class="form-control" id="match_date" name="tournament_match[match_date]" type="text" placeholder="<?php echo __('Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Match Date') ?>" readonly>
							<span class="input-group-btn">
								<button class="btn btn-default ui-button-img" type="button">
									<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
								</button>
							</span> 
						</div>
					</div>
				</div> 
				<div class="form-group">
					<label for="lastname" class="col-sm-102 control-label">Decription</label>
					<div class="col-sm-6">
						<textarea class="form-control" rows=3 id="description" name="tournament_match[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
					</div>
				</div> 
			</fieldset> 
		</div> 
		<div class="ui-clear-fix"></div>
	</div> 
</div> 

<script>
	 
	$('#match_status').change(function(e) {
		$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	
	$('#description').keyup(function(e) {
		$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
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
