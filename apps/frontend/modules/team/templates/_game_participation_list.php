<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Category') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Match') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Event Type') ?>"><?php echo  __('Event') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Group') ?>"><?php echo  __('Group') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Round') ?>"><?php echo  __('Round') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('TIme') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_teamGameParticipations as $_key => $_teamGameParticipation ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_teamGameParticipation->id.'&token_id='.$_teamGameParticipation->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_teamGameParticipation->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_teamGameParticipation->gameCategoryName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_teamGameParticipation->sportGameName.' ( '.TournamentCore::processGenderAlias($_teamGameParticipation->genderCategoryID).' )' ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processEventTypeValue($_teamGameParticipation->eventType) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processGroupNumberValue($_teamGameParticipation->id) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processRoundNumberValue($_teamGameParticipation->id) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_teamGameParticipation->id ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_teamGameParticipation->id ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_teamGameParticipation->id ?>" class="ui-table-status-small-icon" id="<?php echo $_teamGameParticipation->id ?>">
					<img title="<?php echo $_teamGameParticipation->sportGameName ?>" src="<?php echo image_path($_teamGameParticipation->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_teamGameParticipation->id.'&token_id='.$_teamGameParticipation->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_teamGameParticipation->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('team/edit?product_id='.$_teamGameParticipation->id.'&token_id='.$_teamGameParticipation->token_id) ?>" >	
								<img title="<?php echo __('Edit Team').' ( '.' Task '.' #:'.$_teamGameParticipation->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_teamGameParticipation->id ?>" onclick="Javascript:deleteProduct(<?php echo $_teamGameParticipation->id ?>);" rel="<?php echo $_teamGameParticipation->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_teamGameParticipation->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
