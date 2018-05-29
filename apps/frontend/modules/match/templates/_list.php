<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Match Name') ?>"><?php echo  __('Match Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Name') ?>"><?php echo  __('Type') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Name') ?>"><?php echo  __('Tournament') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Mode') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Date') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_tournamentMatchs as $_key => $_tournamentMatch ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('match/view?match_id='.$_tournamentMatch->id.'&token_id='.$_tournamentMatch->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_tournamentMatch->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_tournamentMatch->gameCategoryName  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_tournamentMatch->id ?>
			</td>
			
			 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_tournamentMatch->id ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_tournamentMatch->id ?>
			</td> 
			<td class="ui-td-right-text ui-td-xsmall-00">
				<?php echo $_tournamentMatch->start_date  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_tournamentMatch->description ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournamentMatch->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournamentMatch->id ?>">
					<img title="<?php echo $_tournamentMatch->id ?>" src="<?php echo image_path($_tournamentMatch->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('match/fixture?match_id='.$_tournamentMatch->id.'&token_id='.$_tournamentMatch->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_tournamentMatch->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('match/fixture?match_id='.$_tournamentMatch->id.'&token_id='.$_tournamentMatch->token_id) ?>" >	
								<img title="<?php echo __('Edit Team').' ( '.' Task '.' #:'.$_tournamentMatch->id ?> )" src="<?php echo image_path('icons/detail')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_tournamentMatch->id ?>" onclick="Javascript:deleteProduct(<?php echo $_tournamentMatch->id ?>);" rel="<?php echo $_tournamentMatch->token_id ?>">	
							<img title="<?php echo __('Delete Match').' ( '.' Task '.' #:'.$_tournamentMatch->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
			<td class="ui-table-td-footer" colspan=9></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=11>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>
