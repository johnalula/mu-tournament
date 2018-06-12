<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Tournament Name') ?>"><?php echo  __('Tournament Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Name') ?>"><?php echo  __('Alias') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Season') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Start Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('End Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Description') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Default') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_tournaments as $_key => $_tournament ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('tournament/view?tournament_id='.$_tournament->id.'&token_id='.$_tournament->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_tournament->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-2"> 
				<?php echo $_tournament->tournamentName  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01"> 
				<?php echo $_tournament->tournamentAlias ?> 
			</td>   
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo $_tournament->season ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo date('M, d Y', strtotime($_tournament->startDate))  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo date('M, d Y', strtotime($_tournament->endDate))  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
			<?php echo Wordlimit::Wordlimiter($_tournament->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournament->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournament->id ?>">
					<img title="<?php echo $_tournament->name ?>" src="<?php echo image_path($_tournament->defaultFlag ? 'status/default':'status/inactive_default')  ?>"> 
				</span>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournament->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournament->id ?>">
					<img title="<?php echo $_tournament->name ?>" src="<?php echo image_path($_tournament->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('tournament/view?tournament_id='.$_tournament->id.'&token_id='.$_tournament->token_id) ?>" >	
								<img title="<?php echo __('View Category').' ( '.' Task '.' #:'.$_tournament->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('tournament/edit?tournament_id='.$_tournament->id.'&token_id='.$_tournament->token_id) ?>" >	
								<img title="<?php echo __('Edit Category').' ( '.' Task '.' #:'.$_tournament->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_tournament->id ?>" onclick="Javascript:deleteTournament(<?php echo $_tournament->id ?>);" rel="<?php echo $_tournament->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_tournament->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
			<td class="ui-table-td-footer" colspan=10></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=12>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>
