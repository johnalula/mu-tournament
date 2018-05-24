<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>TIME</th>
				<th>SEX</th>
				<th>EVENT</th> 
				<th>GROUP</th>
				
				<th>ROUND</th>
				<th>STATUS</th>
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
					<?php echo TournamentCore::processGenderValue($_matchFixture->teamGroupGenderCategoryID) ?>
					
				</td> 
				<td>
					<a href="<?php echo url_for('competition/fixture?match_fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
						<?php echo $_matchFixture->sportGameName.' - '.$_matchFixture->gameCategoryName.'- '.($_matchFixture->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_matchFixture->sportGameTypeMode)):$_matchFixture->sportGameName) ?>
					</a>
				</td> 
				<td>
					<?php echo $_matchFixture->sportGameGroupName ?>
				</td>
				
				<td>
					<?php echo $_matchFixture->matchDate ?>
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
