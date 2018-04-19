<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th> 
			<th class="ui-th-left-text" title="<?php echo __('Round Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Alias') ?>"><?php echo  __('Type') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Alias') ?>"><?php echo  __('Gender') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Alias') ?>"><?php echo  __('Event') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style=""><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_gameParticipations as $_key => $_gameParticipation ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('sport_games/view?sport_game_id='.$_gameParticipation->id.'&token_id='.$_gameParticipation->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_gameParticipation->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11">
				<a href="<?php echo url_for('sport_games/view?category_id='.$_gameParticipation->id.'&token_id='.$_gameParticipation->token_id) ?>" >	
					<?php echo $_gameParticipation->sportGameName.' ( '.TournamentCore::processDistanceTypeValue($_gameParticipation->id).' )'  ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11">
				<?php echo $_gameParticipation->gameCategoryName ?> 
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo TournamentCore::processGenderValue($_gameParticipation->genderCategoryID) ?> 
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-0">
				<?php echo TournamentCore::processGenderValue($_gameParticipation->eventType) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_gameParticipation->description, 5) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_gameParticipation->id ?>" class="ui-table-status-small-icon" id="<?php echo $_gameParticipation->id ?>">
					<img title="<?php echo $_gameParticipation->sportGameName ?>" src="<?php echo image_path($_gameParticipation->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('sport_games/view?sport_game_id='.$_gameParticipation->id.'&token_id='.$_gameParticipation->token_id) ?>" >	
								<img title="<?php echo __('View Sport Game ').' ( '.' Task '.' #:'.$_gameParticipation->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('sport_games/edit?sport_game_id='.$_gameParticipation->id.'&token_id='.$_gameParticipation->token_id) ?>" >	
								<img title="<?php echo __('Edit Game Category').' ( '.' Task '.' #:'.$_gameParticipation->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_gameParticipation->id ?>" onclick="Javascript:deleteProduct(<?php echo $_gameParticipation->id ?>);" rel="<?php echo $_gameParticipation->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_gameParticipation->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
							</a>  
						</li> 
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=7></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=9>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>
