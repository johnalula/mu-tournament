<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Group').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Tournament Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Mode') ?>"><?php echo  __('Team Mode') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Team Mode') ?>"><?php echo  __('Date') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_tournamentTeamGroups as $_key => $_tournamentTeamGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('team_group/category?team_group_id='.$_tournamentTeamGroup->id.'&token_id='.$_tournamentTeamGroup->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_tournamentTeamGroup->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_tournamentTeamGroup->tournamentGroupFullCode  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_tournamentTeamGroup->gameCategoryName ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo TournamentCore::processContestantTeamModeValue($_tournamentTeamGroup->contestantTeamMode)  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo $_tournamentTeamGroup->start_date ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_tournamentTeamGroup->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournamentTeamGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournamentTeamGroup->id ?>">
					<img title="<?php echo $_tournamentTeamGroup->id ?>" src="<?php echo image_path($_tournamentTeamGroup->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
					<img title="<?php echo $_tournamentTeamGroup->id ?>" src="<?php echo image_path($_tournamentTeamGroup->status == TournamentCore::$_ACTIVE  ? 'status/active':'status/pending')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team_group/category?team_group_id='.$_tournamentTeamGroup->id.'&token_id='.$_tournamentTeamGroup->token_id) ?>" >	
								<img title="<?php echo __('View Team Group').' ( '.' Group '.' #:'.$_tournamentTeamGroup->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('team_group/category?team_group_id='.$_tournamentTeamGroup->id.'&token_id='.$_tournamentTeamGroup->token_id) ?>" >	
								<img title="<?php echo __('Edit Team Group').' ( '.' Group '.' #:'.$_tournamentTeamGroup->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_tournamentTeamGroup->id ?>" onclick="Javascript:deleteProduct(<?php echo $_tournamentTeamGroup->id ?>);" rel="<?php echo $_tournamentTeamGroup->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_tournamentTeamGroup->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
			<td class="ui-table-td-footer" colspan=8></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=10>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>
