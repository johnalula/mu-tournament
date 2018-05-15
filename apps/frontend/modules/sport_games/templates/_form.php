<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentSportGameForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="col-sm-6" id="" style="">   
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset  class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Sport Games Information') ?>">
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
							<label class="col-sm-22 control-label" title="<?php echo __('Game Type') ?>"><?php echo __('Game Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
							<div class="col-sm-31"> 
								<select id="sport_game_type" name="sport_game_type[sport_game_type]" class="form-control" title="<?php echo __('Game Type') ?>">
									<option value="" selected  ><?php echo 'Select Game Type ...' ?></option>
									<?php foreach(TournamentCore::processDistanceTypes() as $_key => $_roundNumber): ?>								 
										<option value="<?php echo $_key ?>"  >
											<?php echo $_roundNumber ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Type') ?>"><?php echo __('Type') ?>: <span class="ui-red-text">&nbsp;</span></label>
							<div class="col-sm-31"> 
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
							<label class="col-sm-22 control-label" title="<?php echo __('Measurement') ?>"><?php echo __('Measurement') ?>: <span class="ui-red-text">&nbsp;</span></label>
							<div class="col-sm-31"> 
								<select id="sport_game_measurement" name="sport_game_type[sport_game_measurement]" class="form-control" title="<?php echo __('Measurement') ?>">
									<option value="" selected  ><?php echo 'Select Measure. ...' ?></option>
									<?php foreach(TournamentCore::processDistanceMeasurements() as $_key => $_event): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_METER ? 'selected':'' ?> >
											<?php echo $_event.' ('.TournamentCore::processDistanceMeasurementAlias ($_key).')' ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Game Distance') ?>"><?php echo __('Dist') ?>: <span class="ui-red-text">&nbsp;</span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="sport_game_distance"	name="sport_game_type[sport_game_distance]"	placeholder="<?php echo __('Game Distance') ?>">
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Sport Game Name') ?>"><?php echo __('Game Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="sport_game_type_name"	name="sport_game_type[sport_game_type_name]"	placeholder="<?php echo __('Game Name') ?>">
								<span class="required-error ui-display-none" id="middle_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="middle_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-22 control-label" title="<?php echo __('Team Member Last Name') ?>"><?php echo __('Last Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
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
			<div class="col-sm-6" id="" style="">  
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/details') ?>" title="<?php echo __('Member Detail information') ?>">
							<?php echo __('Detail Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Team Member Role') ?>"><?php echo __('Role') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<select id="team_member_role" name="team_member[team_member_role]" class="form-control" title="<?php echo __('Team Member Role') ?>"  >
									<option value="" selected  ><?php echo 'Select Player Mode ...' ?></option>
									 
								</select> 
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Sport Game') ?>"><?php echo __('Sport Game') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<div class="input-group">
									<input type="text" class="form-control " id="sport_game_name" name="team_member[sport_game_name]" placeholder="<?php echo __('Candidate Sport Game') ?>" title="<?php echo __('Candidate Sport Game') ?>" value="" data-toggle="modal" data-target="#candidateMemberSportGameModal"  disabled>
									<input type="hidden" class="form-control" id="sport_game_id" name="team_member[sport_game_id]" placeholder="" value="">
									<input type="hidden" class="form-control" id="sport_game_token_id" name="team_member[sport_game_token_id]" value=""> 
									<span class="input-group-btn">
										<button class="btn btn-default selectCandidateMemberSportGame" type="button" data-toggle="modal" data-target="#candidateMemberSportGameModal" title="<?php echo __('Candidat Sport Game') ?>">
											<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
										</button>
									</span>
								</div><!-- /input-group -->
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee City/Province Address') ?>"><?php echo __('City/Province') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_city_province_address" name="team_member[employee_city_province_address]" placeholder="<?php echo __('City/Province') ?>" title="<?php echo __('Employee City/Province Address') ?>" value="Mekelle" required rel="ui-city-province" > 
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Event Type') ?>"><?php echo __('Event Type') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<select id="event_type" name="team_member[event_type]" class="form-control" title="<?php echo __('Event Type') ?>">
									<option value="" selected  ><?php echo 'Select Event ...' ?></option>
									<?php foreach(TournamentCore::processEventTypes() as $_key => $_eventType): ?>								 
										<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultEventType () ? 'selected':'' ?> >
											<?php echo $_eventType ?>
										</option>								 
									<?php endforeach; ?>
								</select> 
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Employee ID Number') ?>"><?php echo __('ID') ?> #:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="employee_id_number" name="team_member[employee_id_number]" placeholder="<?php echo __('ID Number') ?>" title="<?php echo __('Employee ID Number') ?>" value="" rel="ui-identification-number" >
								<span class="required-error ui-display-none"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
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
 
</script>
