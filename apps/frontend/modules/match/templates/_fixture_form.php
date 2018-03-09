<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentMatchFixtureForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Tournament Match') ?>
					</legend>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Game Type') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="math_game_type_name" name="match_fixture[math_game_type_name]" placeholder="<?php echo __('Game Type') ?>" value="<?php echo $_tournamentMatch->gameCategoryName.' ('.$_tournamentMatch->gameCategoryName.' ) - '.$_tournamentMatch->gameCategoryName ?>" disabled >
							<input type="hidden" class="form-control" id="math_game_type_id" name="match_fixture[math_game_type_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->id ?>"  >
							<input type="hidden" class="form-control" id="math_game_type_token_id" name="match_fixture[math_game_type_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_activeTournament->token_id ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_id" name="match_fixture[tournament_match_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->id ?>"  >
							<input type="hidden" class="form-control" id="tournament_match_token_id" name="match_fixture[tournament_match_token_id]" placeholder="<?php echo __('Tournament') ?>" value="<?php echo $_tournamentMatch->token_id ?>"  >
						</div>
					</div>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Sport Game') ?>:</label>
						<div class="col-sm-6">
							<div class="input-group">
								<input type="text" class="form-control " id="sport_game_name" name="match_fixture[sport_game_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_id" name="match_fixture[sport_game_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_token_id" name="match_fixture[sport_game_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGame" type="button" data-toggle="modal" data-target="#candidateSportGameModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Venue') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="match_venue"	name="match_fixture[match_venue]"	placeholder="<?php echo __('Match Venue') ?>">
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Event Type') ?>:</label>
						<div class="col-sm-201">
							<select id="event_type" name="match_fixture[event_type]" class="form-control" title="<?php echo __('Event Type') ?>">
								<option value="100" selected  ><?php echo 'Select Event ...' ?></option>
								<?php foreach(TournamentCore::processEventTypes() as $_key => $_eventType): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_eventType ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Gender') ?>:</label>
						<div class="col-sm-201">
							<select id="gender_category" name="match_fixture[gender_category]" class="form-control" title="<?php echo __('Gender Category') ?>">
								<option value="100" selected  ><?php echo 'Select Gender ...' ?></option>
								<?php foreach(TournamentCore::processGenders() as $_key => $_gender): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultGender () ? 'selected':'' ?> >
										<?php echo $_gender ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Player Mode') ?>:</label>
						<div class="col-sm-201">
							 <select id="player_mode" name="match_fixture[player_mode]" class="form-control" title="<?php echo __('Player Mode') ?>">
								<option value="100" selected  ><?php echo 'Select Player Mode ...' ?></option>
								<?php foreach(TournamentCore::processPlayerModes() as $_key => $_mode): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_mode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Round') ?>:</label>
						<div class="col-sm-201">
							<select id="match_round" name="match_fixture[match_round]" class="form-control" title="<?php echo __('Match Round') ?>">
								<option value="" selected  ><?php echo 'Select Round ...' ?></option>
								<?php foreach($_candidateRounds as $_key => $_round): ?>								 
									<option value="<?php echo $_round->id ?>"  >
										<?php echo $_round->roundTypeName ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Math Time') ?>:</label>
						<div class="col-sm-201">
							<input type="text" class="form-control" id="match_time"	name="match_fixture[match_time]"	placeholder="<?php echo __('Match Time') ?>">
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Match Date') ?>:</label>
						<div class="col-sm-201">
							<div class="input-group"> 
								<input class="form-control" id="match_date" name="match_fixture[match_date]" type="text" placeholder="<?php echo __('Match Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Match Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
					</div> 
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Group') ?>:</label>
						<div class="col-sm-201">
							 <select id="match_group" name="match_fixture[match_group]" class="form-control" title="<?php echo __('Match Group') ?>">
								<option value="100" selected  ><?php echo 'Select Group ...' ?></option>
								<?php foreach(TournamentCore::processGroupNumbers () as $_key => $_groupNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_groupNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Status') ?>:</label>
						<div class="col-sm-201">
							<select id="match_status" name="match_fixture[match_status]" class="form-control" title="<?php echo __('Match Status') ?>">
								<option value="100" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_matchStatus): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_matchStatus ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>  
					<div class="form-group">
						<label for="lastname" class="col-sm-102 control-label">Decription</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows=3 id="description" name="match_fixture[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//alert('asdfa');
		return false;
	});  
	$('#player_mode').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#gender_category').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_round').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_status').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#match_venue').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
