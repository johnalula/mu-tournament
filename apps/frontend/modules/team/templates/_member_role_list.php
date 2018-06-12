<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Member Name') ?></th>   
			<th class="" style="text-align:left!important;"><?php echo __('Sport Game')  ?></th>
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Member Gender') ?>"><?php echo  __('Gender') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Participant Role') ?>"><?php echo  __('Role') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Description') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_memberParticipantRoles as $_key => $_memberPartcipantRole ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_memberPartcipantRole->id.'&token_id='.$_memberPartcipantRole->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_memberPartcipantRole->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo $_memberPartcipantRole->memberFullName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-0">
				<?php echo $_memberPartcipantRole->sportGameName.' '.($_memberPartcipantRole->categoryContestantTeamMode == TournamentCore::$_MULTIPLE_TEAM? (' - '.TournamentCore::processAthleticsTypeValue($_memberPartcipantRole->sportGameTypeMode)):'') ?>
			</td>
			
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processGenderValue($_memberPartcipantRole->genderCategoryID) ?> 
			</td> 
			<td class="ui-td-lef-text ui-td-xsmall-1">
				<?php echo TournamentCore::processContestantNameModeValue($_memberPartcipantRole->memberRoleID) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				 <?php echo Wordlimit::Wordlimiter($_memberPartcipantRole->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_memberPartcipantRole->id ?>" class="ui-table-status-small-icon" id="<?php echo $_memberPartcipantRole->id ?>">
					<img title="<?php echo $_memberPartcipantRole->memberFullName ?>" src="<?php echo image_path($_memberPartcipantRole->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team/view?team_id='.$_memberPartcipantRole->id.'&token_id='.$_memberPartcipantRole->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_memberPartcipantRole->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_memberPartcipantRole->id ?>" onclick="Javascript:deleteProduct(<?php echo $_memberPartcipantRole->id ?>);" rel="<?php echo $_memberPartcipantRole->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_memberPartcipantRole->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
