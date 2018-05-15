<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
				<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
				<?php echo __('Tournament Group').' ( Type: '.$_tournamentTeamGroup->gameCategoryName.' -  Code #: '.$_tournamentTeamGroup->tournamentGroupFullCode.' - Mode : '.TournamentCore::processContestantTeamModeValue($_tournamentTeamGroup->contestantTeamMode).' )'  ?>
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-3">
				<table class="ui-content-detail-table">
					<tbody> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Receipt') ?> #:</td>
							<td width="40%" class="ui-th-title-right-text"><?php echo $_task->id ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Pay Amt') ?>:</td>
							<td width="40%" class="ui-th-title-right-text"><?php echo number_format($_task->id, 2).' &nbsp;'.$_task->id  ?></td>
						</tr> 
					</tbody>
				</table> 
			</div>                      
			<div class="col-sm-1">
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text">&nbsp;</td><td>&nbsp;</td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text">&nbsp;</td><td>&nbsp;</td>
						</tr> 
					</tbody>
				</table>  
			</div>                      
			<div class="col-sm-4">
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Acad. Year') ?> :</td>
							<td class="ui-th-title-left-text"><?php echo $_task->id.' ( '.$_task->id.' )' ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Semester') ?>:</td>
							<td class="ui-th-title-left-text"><?php echo $_task->hasSerializedInventoryItems ? 'true':'false'  ?></td>
						</tr> 
					</tbody>
				</table>  
			</div>                      
			<div class="col-sm-4">
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Data Incoder') ?> :</td>
							<td class="ui-th-title-left-text"><?php echo $_task->id ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Entry Date') ?>:</td>
							<td class="ui-th-title-left-text"><?php echo $_task->id ?></td>
						</tr> 
					</tbody>
				</table>  
			</div>             
			 
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      


