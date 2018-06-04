<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Team Name') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Team Name') ?>"><?php echo  __('Team Alias') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Country Name') ?>"><?php echo  __('Country') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_teams as $_key => $_team ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_team->id.'&token_id='.$_team->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_team->id) ?>
				</a>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_team->teamNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-2"> 
				<?php echo $_team->teamName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo $_team->teamFullAlias  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo SystemCore::processCountryValue($_team->teamCountry) ?> 
			</td>   
			<td class="ui-td-left-text ui-td-xlarg" title="<?php echo $_team->description ?>">
				<?php echo Wordlimit::Wordlimiter($_team->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_team->id ?>" class="ui-table-status-small-icon" id="<?php echo $_team->id ?>">
					<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-4">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/setting?team_id='.$_team->id.'&token_id='.$_team->token_id) ?>" >	
								<img title="<?php echo __('View Team Setting').' ( '.' Task '.' #:'.$_team->id ?> )" src="<?php echo image_path('icons/setting_large') ?>">			
							</a>
						</li> 
						<li>
							<a href="<?php echo url_for('team/view?team_id='.$_team->id.'&token_id='.$_team->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_team->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('team/edit?team_id='.$_team->id.'&token_id='.$_team->token_id) ?>" >	
								<img title="<?php echo __('Edit Team').' ( '.' Task '.' #:'.$_team->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_team->id ?>" onclick="Javascript:deleteProduct(<?php echo $_team->id ?>);" rel="<?php echo $_team->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_team->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
