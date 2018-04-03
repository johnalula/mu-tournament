<div class="ui-body-content">
	<div class="ui-content-list">
		<h3 class="ui-content-header">
			 Match Fixtures
		</h3>
		<div class="ui-content-list-body" id="ui-data-content">
			<table width="700" align=center> 
				<tr>
					<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Match') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Event Type') ?>"><?php echo  __('Event') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Group') ?>"><?php echo  __('Group') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Group') ?>"><?php echo  __('Round') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Date') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('TIme') ?></th>   
					<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
				</tr>
				
			<?php foreach($_matchFixtures as $_key => $_matchFixture ): ?>
				<tr>
					<td class="ui-td-left-text ui-td-xlarg">
						<a href="<?php echo url_for('competition/view?fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
							<?php echo $_matchFixture->sportGameName.' ( '.TournamentCore::processGenderAlias($_matchFixture->genderCategoryID).' ) -'.$_matchFixture->gameCategoryName ?> 
						</a>
					</td>  
					<td class="ui-td-center-text ui-td-xsmall-00">
						<?php echo TournamentCore::processEventTypeValue($_matchFixture->matchEventType) ?>
					</td> 
					<td class="ui-td-center-text ui-td-xsmall-0">
						<?php echo TournamentCore::processGroupNumberValue($_matchFixture->groupID) ?>
					</td>  
					<td class="ui-td-center-text ui-td-xsmall-0">
						<?php echo TournamentCore::processRoundNumberValue($_matchFixture->matchRoundTypeID) ?>
					</td>  
					<td class="ui-td-center-text ui-td-xsmall-0">
						<?php echo $_matchFixture->matchDate ?>
					</td> 
					<td class="ui-td-center-text ui-td-xsmall-0">
						<?php echo $_matchFixture->matchTime ?>
					</td> 
					<td class="ui-td-center-text ui-td-xsmall-0">
						<?php echo $_matchFixture->status ? 'Pending':'Active' ?>
					</td> 
					<td class="ui-td-center-text ui-td-xsmall-0">
						<a href="<?php echo url_for('competition/view?fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
							<?php echo ' Detail' ?> 
						</a>
					</td> 
				</tr> 
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>

