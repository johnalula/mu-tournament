<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
				<img src="<?php echo image_path('settings/sport_games') ?>" title="<?php echo __('Team Group Management') ?>">
				<?php echo ' ( Game Event: '.$_tournamentMatchFixtureGroup->gameCategoryName.' - Group: '.TournamentCore::processRoundNumberValue($_tournamentMatchFixtureGroup->matchFixtureGroupNumber).' )'  ?>
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-3">
				&nbsp;
			</div>
			<div class="col-sm-6 ui-content-table">
				<table width="100%" align="center" border=0>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;" colspan=2> 
							<?php echo $_tournamentMatchFixtureGroup->selectCandidateParticipantTeam(0) ?>
						</td> 
						<td width="1"></td> 
						<td style="text-align:center!important;" colspan=2> 
							<?php echo $_tournamentMatchFixtureGroup->selectCandidateParticipantTeam(1) ?>
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td width="35%" style="text-align:right!important;">
							<img align="center" style="width:65%;" src="<?php echo image_path('images/participant_teams') ?>" alt="First slide">
						</td>
						<td width="5%">
							<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureParticipantTeamResult <?php echo $_tournamentMatchFixtureGroup->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureParticipantTeamResult_<?php echo $_tournamentMatchFixtureGroup->id ?>" name="<?php echo $_tournamentMatchFixtureGroup->id ?>" value="<?php echo $_tournamentMatchFixtureGroup->makeCandidateMatchResult (0) ?>"  placeholder="0" title="<?php echo $_tournamentMatchFixtureGroup->makeCandidateMatchResult (0) ?>" size=3 >
							
							<input type="hidden" class="ui-table-list-form-input-md  ui-text-center-align " id="matchFixtureParticipantTeamID_<?php echo $_tournamentMatchFixtureGroup->id ?>" name="" value="<?php echo $_tournamentMatchFixtureGroup->makeCandidateParticipantTeamTokenID (0) ?>" rel="<?php echo $_tournamentMatchFixtureGroup->makeCandidateParticipantTeamID (0) ?>"  >
						</td>
						<td width="1" style="text-align:center!important;">&nbsp;-&nbsp;</td>
						<td width="5%" >
							<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureParticipantOpponentTeamResult <?php echo $_tournamentMatchFixtureGroup->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureParticipantOpponentTeamResult_<?php echo $_tournamentMatchFixtureGroup->id ?>" name="<?php echo $_tournamentMatchFixtureGroup->id ?>" value="<?php echo $_tournamentMatchFixtureGroup->makeCandidateMatchResult (1) ?>"placeholder="0" title="<?php echo $_tournamentMatchFixtureGroup->makeCandidateMatchResult (1) ?>" size=3 >
							
							<input type="hidden" class="ui-table-list-form-input-md  ui-text-center-align " id="matchFixtureParticipantOpponentTeamID_<?php echo $_tournamentMatchFixtureGroup->id ?>" name="" value="<?php echo $_tournamentMatchFixtureGroup->makeCandidateParticipantTeamTokenID (1) ?>" rel="<?php echo $_tournamentMatchFixtureGroup->makeCandidateParticipantTeamID (1) ?>"  >
						</td>
						<td width="35%" style="text-align:left!important;">
							<img style="width:65%;" src="<?php echo image_path('images/participant_teams') ?>" alt="First slide">
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td>
						<td width="5%" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td width="1" style="text-align:center!important;">&nbsp;-&nbsp;</td>
						<td width="20" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td>
						<td width="5%" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td width="1" style="text-align:center!important;">&nbsp;-&nbsp;</td>
						<td width="20" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td>
						<td width="5%" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td width="1" style="text-align:center!important;">&nbsp;-&nbsp;</td>
						<td width="20" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td>
						<td width="5%" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td width="1" style="text-align:center!important;">&nbsp;-&nbsp;</td>
						<td width="20" style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td>
						<td style="text-align:center!important;"> 
							&nbsp;
						</td> 
						<td width=""></td>
					</tr>
					<tr> 
						<td width=""></td>
						<td style="text-align:center!important;"> 
							Game Status
						</td>
						<td width="5%" colspan=3 style="padding-top:4px!important;">
							<select id="tournament_match_result_mode" name="tournament_match[tournament_match_result_mode]" class="form-control" title="<?php echo __('Tournament Match Result Mode') ?>">
								<option value=""  ><?php echo 'Select Result Mode ...' ?></option>
								<?php foreach(TournamentCore::processMatchResultStatusModes() as $_key => $_resutlStatus): ?>								 
								<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultMatchResultStatusMode() ? 'selected':'' ?> >
									<?php echo $_resutlStatus ?>
								</option>								 
								<?php endforeach; ?>
							</select>
						</td> 
						<td style="text-align:center!important;"> 
							&nbsp;
						</td> 
						<td width=""></td>
					</tr>
					 
				</table>
			</div>      
				
			<div class="col-sm-3">
				&nbsp;
			</div>          
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      

<script>

	$('.matchFixtureParticipantTeamResult').keyup(function(e) {
		$("#updateTournamentMatchFixtureResult").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureResult").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('.matchFixtureParticipantOpponentTeamResult').keyup(function(e) {
		$("#updateTournamentMatchFixtureResult").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentMatchFixtureResult").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
</script>
