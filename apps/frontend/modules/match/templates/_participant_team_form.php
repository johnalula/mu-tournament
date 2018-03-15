
<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createMatchParticipantTeamForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Match Participant Team Information') ?>">
						<?php echo __('Participant Team') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Game Type') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
								<div class="input-group">
								<input type="text" class="form-control " id="match_fixture" name="match_participant_team[match_fixture]" placeholder="<?php echo __('Candidate Match Fixture') ?>" title="<?php echo __('Candidate Match Fixture') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled>
								<input type="hidden" class="form-control" id="match_fixture_id" name="match_participant_team[match_fixture_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="match_fixture_token_id" name="match_participant_team[match_fixture_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateTournamentMatchFixture" type="button" data-toggle="modal" data-target="#candidateTournamentMatchFixtureModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Sport Game') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<div class="input-group">
								<input type="text" class="form-control " id="participant_team_name" name="match_participant_team[participant_team_name]" placeholder="<?php echo __('Candidate Participant Team') ?>" title="<?php echo __('Candidate Participant Team') ?>" value="" data-toggle="modal" data-target="#candidateSportGameModal"  disabled>
								<input type="hidden" class="form-control" id="participant_team_id" name="match_participant_team[sport_game_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="participant_team_token_id" name="match_participant_team[participant_team_token_id]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateParticipantTeam" type="button" data-toggle="modal" data-target="#candidateParticipantTeamModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Group') ?>:&nbsp;</label>
						<div class="col-sm-23">
							 <select id="match_group" name="match_fixture[match_group]" class="form-control" title="<?php echo __('Match Group') ?>">
								<option value="100" selected  ><?php echo 'Select Group ...' ?></option>
								<?php foreach(TournamentCore::processGroupNumbers () as $_key => $_groupNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_groupNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Match Status') ?>"><?php echo __('Status') ?>:</label>
						<div class="col-sm-23">
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
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
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
		return false;
	});  
	$('#gender_category').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_round').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#match_status').change(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#match_venue').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#match_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
