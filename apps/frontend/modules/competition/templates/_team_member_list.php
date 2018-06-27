<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped" border=0>
		<thead>
			<tr> 
				<th align="center"><?php echo __('No').' #' ?></th>
				<th><?php echo __('Participant') ?></th>
				<th><?php echo __('Team ') ?></th>
				<th align="center"><?php echo __('Country') ?></th>
				<th align="center"><?php echo __('Participant Role') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_candidateParticipants as $_key => $_candidateParticipant ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="" width=60>
					&nbsp;&nbsp;<?php echo ++$_key ?>
				</td>
				<td align="left" width=280>
					<?php echo $_candidateParticipant->memberFullName ?>
				</td>
				<td align="left" >
					<?php echo $_candidateParticipant->participantTeamName.' ( '.$_candidateParticipant->participantTeamAlias.' ) ' ?>
				</td>
				<td align="left" width=220>
					<?php  $_contryFlag = 'flags/'.$_candidateParticipant->teamCountryID ?>
					<img style="max-width:45px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
					<?php echo SystemCore::processCountryValue($_candidateParticipant->teamCountryID).' ( '.SystemCore::processCountryAliasValue($_candidateParticipant->teamCountryID).' )'  ?>
				</td>
				<td align="left" width=160>
					<?php echo TournamentCore::processContestantNameModeValue($_candidateParticipant->memberRoleID) ?>
				</td>
			</tr> 
			<?php endforeach; ?> 
		</tbody>
		<footer>
			<tr colspan=>
				<td align="right"></td>
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
