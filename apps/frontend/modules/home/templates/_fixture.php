<div class="" id="">
	<table class="">
		<thead>
			<tr>
				<th>#</th>
				<th>Local Time</th> 
				<th>Date</th> 
				<th>Sex</th>
				<th>Event</th>
				<th>Round</th>
				<th>Status</th>
				<th>...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_tournamentMatchFixtures as $_key => $_matchFixture ): ?>
			<tr>
				<td>
						<?php echo $_matchFixture->id ?> 
				</td>
				<td>
					<?php echo $_matchFixture->matchTime ?>
				</td>
				<td>
					<?php echo $_matchFixture->matchDate ?>
				</td>
				<td>
					<?php echo TournamentCore::processGenderAlias($_matchFixture->genderCategoryID) ?>
				</td>
				<td>
					<?php echo $_matchFixture->sportGameName.' - '.$_matchFixture->gameCategoryName ?>
					 
				</td> 
				<td>
					<?php echo TournamentCore::processMatchCompetitionRoundModeValue($_matchFixture->matchFixtureGroupRoundMode) ?>
				</td>
				<td>
					<?php echo $_matchFixture->status ? 'Pending':'Active' ?>
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
