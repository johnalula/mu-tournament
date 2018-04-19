<div class="table-responsive"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Team').' #' ?></th>
			<th class="" style="text-left:center!important;"><?php echo __('Participant Name') ?></th>
			<th class="ui-th-center-text" style="text-align:left;"><?php echo __('Team') ?></th>
			<th class="ui-th-center-text" style="text-align:left;"><?php echo __('Country') ?></th> 
			<th class="ui-th-center-text" style="text-align:center;"><?php echo __('Unit Price') ?></th>
			<th class="ui-th-center-text" style="text-align:left;"><?php echo __('Description') ?></th> 
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('...') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	  <?php foreach ( $_candidateTeamMemberParticipants as $_key => $_candidateTeamMemberParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('module_setting/view?course_id='.$_candidateTeamMemberParticipant->id.'&token_id='.$_candidateTeamMemberParticipant->token_id) ?>">
					<?php echo SystemCore::processDataID($_candidateTeamMemberParticipant->id) ?>
				</a>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_candidateTeamMemberParticipant->id ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01 ui-table-td-form"> 
				<?php echo $_candidateTeamMemberParticipant->memberFullName ?>
			</td>   
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_candidateTeamMemberParticipant->teamName.' ('.$_candidateTeamMemberParticipant->teamAlias.' )' ?>
			</td>   
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_candidateTeamMemberParticipant->teamCountry ?> 
			</td>   
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				 
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_candidateTeamMemberParticipant->description, 6) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<span rel="<?php echo $_product->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateTeamMemberParticipant->id ?>">
					<img title="<?php echo $_candidateTeamMemberParticipant->id ?>" src="<?php echo image_path($_candidateTeamMemberParticipant->id == TournamentCore::$_ACTIVE ? 'status/new':'status/used')  ?>"> 
					<img title="<?php echo $_candidateTeamMemberParticipant->id ?>" src="<?php echo image_path($_candidateTeamMemberParticipant->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td>
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/view?team_id='.$_candidateTeamMemberParticipant->id.'&token_id='.$_candidateTeamMemberParticipant->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Team '.' #:'.$_candidateTeamMemberParticipant->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('registration/edit?task_id='.$_candidateTeamMemberParticipant->id.'&token_id='.$_candidateTeamMemberParticipant->token_id) ?>" >	 
								<img title="<?php echo __('Edit registration task').' ( '.' Task '.' #:'.$_candidateTeamMemberParticipant->id ?> )" src="<?php echo image_path('icons/del')  ?>" >
							</a>    
						</li>  
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?> 
	  </tbody> 
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=11>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>
