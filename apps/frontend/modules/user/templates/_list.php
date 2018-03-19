<div class="table-responsive"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Sysstem User Full Name') ?>"><?php echo  __('Full Name') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Sysstem Username') ?>"><?php echo  __('Username') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sysstem User Group Name') ?>"><?php echo  __('Group') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sysstem User Role Name ') ?>"><?php echo  __('Role') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sysstem User Last Login Date') ?>"><?php echo  __('Last Login') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sysstem Description') ?>"><?php echo  __('Description') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sysstem Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style=""><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	  <?php foreach ( $_systemUsers as $_key => $_user ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('user/view?user_id='.$_user->id.'&token_id='.$_user->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_user->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo $_user->personFullName ?> 
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-01">
				<a href="<?php echo url_for('course/view?course_id='.$_user->id.'&token_id='.$_user->token_id) ?>">
					<?php echo $_user->username ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_user->userGroupName ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_user->userRoleName ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-0"> 
				<?php echo $_user->lastLoginDate ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_user->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_user->id ?>" class="ui-table-status-small-icon" id="<?php echo $_user->id ?>">
					<img title="<?php echo $_user->id ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_user->id))  ?>"> 
					<img title="<?php echo $_user->id ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleApplicableStatusIcon($_user->id))  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('user/view?user_id='.$_user->id.'&token_id='.$_user->token_id) ?>" >	
								<img title="<?php echo __('View user').' ( '.' Task '.' #:'.$_user->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('user/view?user_id='.$_user->id.'&token_id='.$_user->token_id) ?>" >	 
								<img title="<?php echo __('Edit user').' ( '.' Task '.' #:'.$_user->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_user->id ?>" onclick="Javascript:deleteUser(<?php echo $_user->id ?>);" rel="<?php echo $_user->token_id ?>">	
							<img title="<?php echo __('Can not Delete user').' ( '.' Task '.' #:'.$_user->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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
