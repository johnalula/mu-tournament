<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Match</th> 
				<th>Group</th>
				<th>Time</th>
				<th>Date</th>
				<th>Status</th>
				<th>...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_matchFixtures as $_key => $_matchFixture ): ?>
			<tr>
				<td>
						<?php echo $_matchFixture->id ?> 
				</td>
				<td>
					<a href="<?php echo url_for('competition/view?fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
						<?php echo $_matchFixture->sportGameName.' ( '.TournamentCore::processGenderAlias($_matchFixture->genderCategoryID).' ) -'.$_matchFixture->gameCategoryName.' - '.TournamentCore::processEventTypeValue($_matchFixture->matchEventType) ?> 
					</a>
				</td> 
				<td>
					<?php echo TournamentCore::processGroupNumberValue($_matchFixture->id) ?>
				</td>
				<td>
					<?php echo $_matchFixture->matchTime ?>
				</td>
				<td>
					<?php echo $_matchFixture->matchDate ?>
				</td>
				<td>
					<?php echo $_matchFixture->status ? 'Pending':'Active' ?>
				</td>
				<td>
					<a href="<?php echo url_for('competition/view?fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
							<?php echo ' Detail' ?> 
						</a>
				</td>
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
