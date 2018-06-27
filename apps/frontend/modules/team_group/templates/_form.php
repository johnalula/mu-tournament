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
						<input type="text" class="form-control" id="tournament_name" name="tournament_team_group[tournament_name]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentName').' ('.$sf_user->getAttribute('activeTournamentAlias').' ) '.$_activeTournament->tournamentSeason ?>" disabled >
						<input type="hidden" class="form-control" id="tournament_token_id" name="tournament_team_group[tournament_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentTokenID') ?>"  >
						<input type="hidden" class="form-control" id="tournament_id" name="tournament_team_group[tournament_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentID') ?>"  >
					</div>
				</div> 
				
				<div class="form-group">
					<label class="col-sm-21 control-label"><?php echo __('Category') ?>: <span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_type_name" name="tournament_team_group[sport_game_type_name]" placeholder="<?php echo __('Candidate Sport Game Type') ?>" title="<?php echo __('Candidate Sport Game Type') ?>" value="" data-toggle="modal" data-target="#candidateSportGameTypeModal"  disabled>
							<input type="hidden" class="form-control" id="sport_game_type_id" name="tournament_team_group[sport_game_type_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_type_token_id" name="tournament_team_group[sport_game_type_token_id]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGameType" type="button" data-toggle="modal" data-target="#candidateSportGameTypeModal" title="<?php echo __('Candidat Sport Game Type') ?>">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>  
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-40"> 
						<textarea class="form-control form-control-md" rows=4 id="description" name="tournament_team_group[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
					</div>
				</div>
			</fieldset> 
		</div> 
		<div class="ui-clear-fix"></div>
	</div> 
</div> 
 
<script>
	 
	 
	$('#group_status').change(function(e) {
		//$("#createTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	
	$('#description').keyup(function(e) {
		//$("#createTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//$("#cancelTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
