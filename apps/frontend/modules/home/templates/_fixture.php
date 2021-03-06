<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th>#</th>
					<th>TIME</th>
					<th>SEX</th>
					<th>EVENT</th> 
					<th align="center">...</th> 
					<th>GROUP</th>
					<th>ROUND</th>
					<th>STATUS</th>
					<th>...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_tournamentMatchFixtures as $_key => $_matchFixture ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td>
					<?php echo ++$_key ?> 
				</td>
				<td>
					<?php echo $_matchFixture->matchTime ? $_matchFixture->matchTime:$_matchFixture->fixtureGroupMatchTime ?>
				</td>
				<td>
					<?php echo TournamentCore::processGenderAlias($_matchFixture->genderCategoryID) ?>
				</td> 
				<td>
					<a href="<?php echo url_for('competition/fixture?match_fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
					<?php echo $_matchFixture->sportGameName ?>
					</a>
				</td> 
				<td>
					<?php echo $_matchFixture->matchContestantTeamMode == TournamentCore::$_PAIR_TEAM ? $_matchFixture->selectCandidateParticipantTeamsAlias():'' ?>
				</td>
				<td>
					<?php echo TournamentCore::makeGroupName($_matchFixture->matchFixtureGroupNumber).' - '.$_matchFixture->matchFixtureHeatName ?>
				</td>
				<td>
					<?php echo TournamentCore::processRoundModeValue($_matchFixture->matchFixtureRoundMode) ?>
				</td>
				<td>
					<?php echo $_matchFixture->competitionStatus ? 'Pending':'Active' ?>
				</td>
				<td>
					<a href="<?php echo url_for('competition/fixture?match_fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
					<?php echo ' Detail' ?> 
					</a>
				</td>
			</tr> 
			<?php endforeach; ?> 
		</tbody>
	</table>
</div>
