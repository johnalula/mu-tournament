<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
				<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
				<?php echo __('Tournament Group').' ( Code #: '.$_tournamentTeamGroup->tournamentGroupFullCode.' )'  ?>
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-4">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Tournament') ?> :</td>
							<td width="65%" class="ui-th-title-left-text"><?php echo $_tournamentTeamGroup->tournamentName.' ( '.$_tournamentTeamGroup->tournamentAlias.' )' ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Tournament') ?> #:</td>
							<td width="65%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentTeamGroup->tournamentGroupFullCode  ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Season') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentTeamGroup->tournamentSeason ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			<div class="col-sm-3">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Game Type') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentTeamGroup->gameCategoryName ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Team Mode') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo TournamentCore::processContestantTeamModeValue($_tournamentTeamGroup->contestantTeamMode) ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Status') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo TournamentCore::processTournamentStatusValue($_tournamentTeamGroup->status) ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			<div class="col-sm-3">
				<table class="ui-content-detail-table" >
					<tbody> 
						<tr>
							<td width="" class="ui-th-title-right-text"><?php echo __('Effective') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo $_tournamentTeamGroup->tournamentEffectiveDate ? $_tournamentTeamGroup->tournamentEffectiveDate:$_tournamentTeamGroup->startDate ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Created') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentTeamGroup->createdDate  ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Updated') ?> :</td>
							<td width="60%" class="ui-th-title-left-text"><?php echo ' &nbsp;'.$_tournamentTeamGroup->updatedDate  ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>
			 
		<div class="ui-clear-fix"></div>    
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      


