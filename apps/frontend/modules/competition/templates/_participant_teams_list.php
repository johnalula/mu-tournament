<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped" border=0>
		<thead>
			<tr> 
				<th><?php echo __('No').' #' ?></th>
				<th><?php echo __('Participant Team') ?></th>
				<th><?php echo __('Team Alias') ?></th>
				<th align="center"><?php echo __('Country') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_candidateParticipantTeams as $_key => $_participantTeam ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="center" width=60>
					<?php echo ++$_key ?>
				</td>
				<td align="left">
					<a href="<?php echo url_for('competition/participant_team?team_id='.$_participantTeam->id.'&token_id='.$_participantTeam->token_id) ?>" >	
						<?php echo $_participantTeam->teamName ?>
						</a>
				</td>
				<td align="left" width=200>
					<?php echo  $_participantTeam->teamFullAlias ?>
				</td>
				<td align="left" width=200>
					<?php  $_contryFlag = 'flags/'.$_participantTeam->teamCountry ?>
					<img style="max-width:45px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
					<?php echo SystemCore::processCountryValue($_participantTeam->teamCountry)  ?>
				</td>
			</tr> 
			<?php endforeach; ?> 
		</tbody>
		<footer>
			<tr colspan=>
				<td align="right"></td>
				<td align="right"></td>
				<td align="right"></td>
				<td align="center">
					<a href="<?php echo url_for('home/index') ?>">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#top_page">Top</a>
				</td>
			</tr>
		</footer>
	</table>
</div>
