<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<div class="ui-row" id=""> 
		<div class="ui-panel-grid-form12" id=""> 
			<fieldset  class="ui-form-fieldset-frame">
				<legend class="ui-form-legend">
					<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Match Information') ?>">
					<?php echo __('Tournament Medal Award') ?>
				</legend> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament') ?>"><?php echo __('Tournament') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-40"> 
						<input type="text" class="form-control" id="tournament_name" name="tournament_medal_award[tournament_name]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentName').' ('.$sf_user->getAttribute('activeTournamentAlias').' ) '.$_activeTournament->tournamentSeason ?>" disabled >
						<input type="hidden" class="form-control" id="tournament_token_id" name="tournament_medal_award[tournament_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentTokenID') ?>"  >
						<input type="hidden" class="form-control" id="tournament_id" name="tournament_medal_award[tournament_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $sf_user->getAttribute('activeTournamentID') ?>"  >
					</div>
				</div> 
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament Game Type') ?>"><?php echo __('Game Type') ?>:<span class="ui-red-text">*</span></label>
					<div class="col-sm-40"> 
						<div class="input-group">
							<input type="text" class="form-control " id="sport_game_category_name" name="tournament_medal_award[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
							<input type="hidden" class="form-control" id="sport_game_category_id" name="tournament_medal_award[sport_game_category_id]" placeholder="" value="">
							<input type="hidden" class="form-control" id="sport_game_category_token_id" name="tournament_medal_award[sport_game_category_token_id]" value=""> 
							<input type="hidden" class="form-control" id="contestant_team_mode" name="tournament_medal_award[contestant_team_mode]" value=""> 
							<span class="input-group-btn">
								<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Category') ?>">
									<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
								</button>
							</span>
						</div><!-- /input-group -->
					</div>
				</div>  
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Tournament Medal Award Status') ?>"><?php echo __('Status') ?>: <span class="ui-red-text">&nbsp;</span></label>
					<div class="col-sm-23">
						 <select id="medal_award_status" name="tournament_medal_award[medal_award_status]" class="form-control" title="<?php echo __('Medal Award Status') ?>">
							<option value="" selected  ><?php echo 'Select Status ...' ?></option>
							<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
								<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::$_INITIATED ? 'selected':'' ?> > 
									<?php echo $_matchStatus ?>
								</option>								 
							<?php endforeach; ?>
						</select>
					</div>
					<label class="col-sm-01 control-label" title="<?php echo __('Date') ?>"><?php echo __('Date') ?>:</label>
					<div class="col-sm-23">
						<div class="input-group"> 
							<input class="form-control" id="start_date" name="tournament_medal_award[start_date]" type="text" placeholder="<?php echo __('End Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Tournament Start Date') ?>" readonly>
							<span class="input-group-btn">
								<button class="btn btn-default ui-button-img" type="button">
									<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
								</button>
							</span> 
						</div>
					</div>
				</div>  
				<div class="form-group">
					<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
					<div class="col-sm-40"> 
						<textarea class="form-control form-control-md" rows=4 id="description" name="tournament_medal_award[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
