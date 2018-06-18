<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
				<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Tournament Sport GAmes Management') ?>">
				<?php echo __('Tournament Sport Game').' ( Code #: '.$_tournamentSportGame->sportGameNumber.' )'  ?>
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-4">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Sport Game') ?> :</td>
							<td width="65%" class="ui-th-title-left-text"><?php echo $_tournamentSportGame->sportGameName  ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Sport Game') ?> #:</td>
							<td width="65%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentSportGame->sportGameNumber  ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Event') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentSportGame->id ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			<div class="col-sm-3">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Game Type') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentSportGame->gameCategoryName ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Team Mode') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo TournamentCore::processContestantTeamModeValue($_tournamentSportGame->id) ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Status') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo TournamentCore::processTournamentStatusValue($_tournamentSportGame->status) ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			<div class="col-sm-3">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Effective') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentSportGame->effectiveDate ? $_tournamentSportGame->effectiveDate:$_tournamentSportGame->startDate ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Created') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentSportGame->createdDate  ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Updated') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentSportGame->updatedDate  ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			 
		<div class="ui-clear-fix"></div>    
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      


