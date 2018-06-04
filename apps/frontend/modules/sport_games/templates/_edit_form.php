<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentSportGameForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="col-sm-6" id="" style="">   
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset  class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/edit') ?>" title="<?php echo __('Tournament Sport Games Information') ?>">
							<?php echo __('Sport Games') ?>
						</legend>  
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Tournament Game Type') ?>"><?php echo __('Category') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<div class="input-group">
								<input type="text" class="form-control " id="sport_game_category_name" name="sport_game_type[sport_game_category_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateSportGameCategoryModal"  disabled>
								<input type="hidden" class="form-control" id="sport_game_category_id" name="sport_game_type[sport_game_category_id]" placeholder="" value="">
								<input type="hidden" class="form-control" id="sport_game_category_token_id" name="sport_game_type[sport_game_category_token_id]" value=""> 
								<input type="hidden" class="form-control" id="contestant_team_mode" name="sport_game_type[contestant_team_mode]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGameCategory" type="button" data-toggle="modal" data-target="#candidateSportGameCategoryModal" title="<?php echo __('Candidat Sport Game Category') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Game Mode') ?>"><?php echo __('Game Mode') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_type" name="sport_game_type[sport_game_type]" class="form-control" title="<?php echo __('Game Mode') ?>">
									<option value="" selected  ><?php echo 'Select Game Mode ...' ?></option>
									<?php foreach(TournamentCore::processDistanceTypes() as $_key => $_gameType): ?>								 
										<option value="<?php echo $_key ?>"  >
											<?php echo $_gameType ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Type') ?>"><?php echo __('Type') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_type_mode" name="sport_game_type[sport_game_type_mode]" class="form-control" title="<?php echo __('Type Mode') ?>">
									<option value="" selected  ><?php echo 'Select Type ...' ?></option>
									<?php foreach(TournamentCore::processAthleticsTypes() as $_key => $_typeMode): ?>								 
										<option value="<?php echo $_key ?>"  >
											<?php echo $_typeMode ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Throw Type Mode') ?>"><?php echo __('Throw') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_throw_type" name="sport_game_type[sport_game_throw_type]" class="form-control" title="<?php echo __('Game Throw Type') ?>">
									<option value="" selected  ><?php echo 'Select Throw ...' ?></option>
									<?php foreach(TournamentCore::processThrowTypes() as $_key => $_type): ?>								 
										<option value="<?php echo $_key ?>"  >
											<?php echo $_type ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Jump Type Mode') ?>"><?php echo __('Jumping') ?>: <span class="ui-red-text"></span></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_jump_type_mode" name="sport_game_type[sport_game_jump_type_mode]" class="form-control" title="<?php echo __('Jump Type Mode') ?>">
									<option value="" selected  ><?php echo 'Select Jump ...' ?></option>
									<?php foreach(TournamentCore::processJumpTypes() as $_key => $_event): ?>								 
										<option value="<?php echo $_key ?>"  >
											<?php echo $_event ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Player Mode') ?>"><?php echo __('Player Mode') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_player_mode" name="sport_game_type[sport_game_player_mode]" class="form-control" title="<?php echo __('Player Mode') ?>">
									<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
									<?php foreach(TournamentCore::processPlayerModes() as $_key => $_type): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_MULTIPLE ? 'selected':'' ?> >
											<?php echo $_type ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Enable Player Mode') ?>"><?php echo __('Enable') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="btn-toolbar" role="toolbar">
									<div class="btn-group">
										<input type="hidden" class="form-control" id="enable_player_mode_flag" name="sport_game_type[enable_player_mode_flag]" value="0" >
										<button type="button" class="btn btn-default btn-xs btn-padding-sm-0 " id="enabledPlayerModeYesButton" value="1" title="<?php echo __('Enable Player Mode') ?>"><?php echo __('Yes') ?>
										<button type="button" class="btn btn-default btn-sm btn-padding-sm-0 btn-danger active" id="enabledPlayerModeNoButton" value="0" title="<?php echo __('Disabled Player Mode') ?>"><?php echo __('No') ?> 
									</div> 
								</div>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Ranking Mode') ?>"><?php echo __('Ranking Mode') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_ranking_mode" name="sport_game_type[sport_game_ranking_mode]" class="form-control" title="<?php echo __('Sport Game Status') ?>">
									<option value="" selected  ><?php echo 'Select Status ...' ?></option>
									<?php foreach(TournamentCore::processResultRankingModes() as $_key => $_status): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_POINT_ORDER ? 'selected':'' ?> >
											<?php echo $_status ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Sport Game Status') ?>"><?php echo __('Status') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_status" name="sport_game_type[sport_game_status]" class="form-control" title="<?php echo __('Sport Game Status') ?>">
									<option value="" selected  ><?php echo 'Select Status ...' ?></option>
									<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_status): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_ACTIVE ? 'selected':'' ?> >
											<?php echo $_status ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="description" name="team_member[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>"><?php echo $_tournamentSportGame->description ?></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div> 
			</div> 
			<div class="col-sm-6" id="" style="">  
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/details') ?>" title="<?php echo __('Member Detail information') ?>">
							<?php echo __('Detail Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Game Name') ?>"><?php echo __('Game Name') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="tournament_sport_game_name"	name="sport_game_type[tournament_sport_game_name]"	placeholder="<?php echo __('Game Name') ?>" value="<?php echo $_tournamentSportGame->sportGameName ?>" disabled>
								<span class="required-error ui-display-none" id="middle_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="middle_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Game Distance') ?>"><?php echo __('Distance') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="sport_game_distance"	name="sport_game_type[sport_game_distance]"	placeholder="<?php echo __('Game Distance') ?>">
								<input type="hidden" class="form-control" id="sport_game_name"	name="sport_game_type[sport_game_name]"	placeholder="<?php echo __('Game Name') ?>">
								<span class="required-error ui-display-none" id="middle_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="middle_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Measurement') ?>"><?php echo __('Measure.') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<select id="sport_game_measurement" name="sport_game_type[sport_game_measurement]" class="form-control" title="<?php echo __('Measurement') ?>">
									<option value="" selected  ><?php echo 'Select Measure. ...' ?></option>
									<?php foreach(TournamentCore::processDistanceMeasurements() as $_key => $_event): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_METER ? 'selected':'' ?> >
											<?php echo $_event.' ('.TournamentCore::processDistanceMeasurementAlias ($_key).')' ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Player Mode Per Game') ?>"><?php echo __('Players') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="input-group">
									<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('Per Game')  ?></span>
									<input type="hidden" class="form-control" id="players_number_per_game_value"	name="sport_game_type[players_number_per_game_value]"	 >
									<select id="players_number_per_game" name="sport_game_type[players_number_per_game]" class="form-control" title="<?php echo __('Measurement') ?>"> 
										<option selected  ><?php echo 'Select...' ?></option>
										<?php for($_i = 1;$_i < 8; $_i++): ?>								 
										<option value="<?php echo $_i ?>" >
											<?php echo $_i ?>
										</option>								 
										<?php endfor; ?>
									</select> 
								</div><!-- input-group -->
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Winner Result Table Point') ?>"><?php echo __('Winner Pnt') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<input type="text" class="form-control" id="win_table_point"	name="sport_game_type[win_table_point]"	placeholder="<?php echo __('Win Point') ?>">
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Draw Result Table Point') ?>"><?php echo __('Draw Pnt') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								 <input type="text" class="form-control" id="draw_table_point"	name="sport_game_type[draw_table_point]"	placeholder="<?php echo __('Draw Point') ?>">
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Number of Participants Per Tack') ?>"><?php echo __('Participants') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="input-group">
									<span class="input-group-addon" style="font-size:11px!important;"># <?php echo __('Track')  ?>&nbsp;</span>
									<input type="text" class="form-control ui-text-right-align" id="number_of_participants_per_track" name="sport_game_type[number_of_participants_per_track]" value=""  placeholder="<?php echo __('Per Track') ?>" > 
								</div><!-- input-group -->
							</div><!-- /input-group --> 
							<label class="col-sm-212 control-label" title="<?php echo __('Enable Participant Number Per Track') ?>"><?php echo __('Enable') ?>: <span class="ui-red-text"></span></label>
							<div class="col-sm-30"> 
								<div class="btn-toolbar" role="toolbar">
									<div class="btn-group">
										<input type="hidden" class="form-control" id="enable_participant_number_mandatory_flag" name="sport_game_type[enable_participant_number_mandatory_flag]" value="0" >
										<button type="button" class="btn btn-default btn-xs btn-padding-sm-0 " id="enabledNumberOfParticipantPerTrackYesButton" value="1" title="<?php echo __('Enable Number of Participants Per Track') ?>"><?php echo __('Yes') ?>
										<button type="button" class="btn btn-default btn-sm btn-padding-sm-0 btn-danger active" id="enabledNumberOfParticipantPerTrackNoButton" value="0" title="<?php echo __('Disabled Number of Participants Per Track') ?>"><?php echo __('No') ?> 
									</div> 
								</div>
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Remark') ?>"><?php echo __('Remark') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control form-control-sd" rows="1" id="remark" name="team_member[remark]" placeholder="<?php echo __('Remark') ?>" title="<?php echo __('Remark') ?>"><?php echo $_tournamentSportGame->description ?></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div>  
				
			</div> 		 
		</div> 
	</form>
</div> 

<script>
 
	$('#enabledPlayerModeYesButton').click(function() {
		$('#enabledPlayerModeYesButton').addClass('btn-success').addClass('active');
		$('#enabledPlayerModeNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("enable_player_mode_flag").value = $(this).val() == 1 ? 1:0;
	});  
	$('#enabledPlayerModeNoButton').click(function() {
		$('#enabledPlayerModeNoButton').addClass('btn-danger').addClass('active');
		$('#enabledPlayerModeYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("enable_player_mode_flag").value = $(this).val() == 0 ? 0:1;
	});   
	$('#enabledNumberOfParticipantPerTrackYesButton').click(function() {
		$('#enabledNumberOfParticipantPerTrackYesButton').addClass('btn-success').addClass('active');
		$('#enabledNumberOfParticipantPerTrackNoButton').removeClass('btn-danger').removeClass('active');
		document.getElementById("enable_participant_number_mandatory_flag").value = $(this).val() == 1 ? 1:0;
	});  
	$('#enabledNumberOfParticipantPerTrackNoButton').click(function() {
		$('#enabledNumberOfParticipantPerTrackNoButton').addClass('btn-danger').addClass('active');
		$('#enabledNumberOfParticipantPerTrackYesButton').removeClass('btn-success').removeClass('active');
		document.getElementById("enable_participant_number_mandatory_flag").value = $(this).val() == 0 ? 0:1;
	});   
	$('#players_number_per_game').change(function() {
		document.getElementById("players_number_per_game_value").value = $(this).val();
	});   
	$('#sport_game_player_mode').change(function() {
		document.getElementById("players_number_per_game_value").value = $(this).val();
	});   
	
	
</script>
