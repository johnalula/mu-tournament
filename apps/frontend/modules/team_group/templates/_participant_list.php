<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Group').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Participant Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Name') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Sport Game Name') ?>"><?php echo  __('Sport Game') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Description') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_candidateParticipantMembers as $_key => $_teamMemberParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_teamMemberParticipant->id.'&token_id='.$_teamMemberParticipant->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_teamMemberParticipant->id) ?>
				</a>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_teamMemberParticipant->sportGameGroupCode  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_teamMemberParticipant->memberFullName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_teamMemberParticipant->participantTeamName.' ( '.$_teamMemberParticipant->participantTeamAlias.' ) -'.SystemCore::processCountryValue($_teamMemberParticipant->participantTeamCountry) ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_teamMemberParticipant->sportGameName.' '.($_teamMemberParticipant->sportGameDistanceTypeID ? (' - '.TournamentCore::processDistanceTypeValue($_teamMemberParticipant->sportGameDistanceTypeID)):'').'  '.($_teamMemberParticipant->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_teamMemberParticipant->sportGameTypeMode)):'') ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg" title="<?php echo $_teamMemberParticipant->description ?>">
				<?php echo Wordlimit::Wordlimiter($_teamMemberParticipant->description, 5 ) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_teamMemberParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_teamMemberParticipant->id ?>">
					<img title="<?php echo $_teamMemberParticipant->participantTeamName ?>" src="<?php echo image_path($_teamMemberParticipant->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_teamMemberParticipant->id.'&token_id='.$_teamMemberParticipant->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_teamMemberParticipant->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_teamMemberParticipant->id ?>" onclick="Javascript:deleteProduct(<?php echo $_teamMemberParticipant->id ?>);" rel="<?php echo $_teamMemberParticipant->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_teamMemberParticipant->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
