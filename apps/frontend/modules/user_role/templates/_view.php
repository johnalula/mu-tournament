<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/user_role') ?>" title="<?php echo __('User role management') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
							<img title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
						</span>
						<?php echo __('User Role').' ( Role Name: '.$_userRole->userRoleName.' )'  ?>
					</h2>
					</h2>
					<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
						<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow"><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
						<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
					</div>
				</div><!-- ui-panel-header-default --> 
				<div id="ui-list-collapsible-panel-one" >
					<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
				<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box ui-panel-content-border">
						<div class="ui-toolbar-menu">
							<?php include_partial('global/toolbar_action', array('_object' => $_userRole)) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" id=""> 
							<div class="ui-panel-content-detail"> 
								<?php include_partial('user_role_detail', array('_userRole' => $_userRole)) ?> 
							</div> <!-- ui-panel-content -->
						</div> <!-- ui-panel-content -->
						
						
						<div class="ui-panel-tab-container-box"> 
							<div class="ui-panel-main-tab-box"> 
								<div class="ui-tabs" id="ui-tabs">
									<div class="ui-panel-tab-header-box">
										<div class="ui-tabs">
											<ul class="nav nav-tabs ui-main-tab">
												<li class="active">
													<a href="#ui-main-tab-one" data-toggle="tab">
														<img class="" src="<?php echo image_path('settings/user_role') ?>">
														<?php echo __('Access Levels') ?>
													</a>
												</li> 
												<li class="">
													<a href="#ui-main-tab-two" data-toggle="tab">
														<img class="" src="<?php echo image_path('settings/user') ?>">
														<?php echo __('Users') ?>
													</a>
												</li>   
											</ul>
										</div><!-- end of ui-panel-tab-header-box --> 
									</div><!-- end of ui-panel-tab-header-box --> 
									
									<div class="tab-content">
										<div class="ui-tab-separater"></div>
										<div id="ui-main-tab-one" class="tab-pane active"> 
											<!-- Begining of toolbar --> 
												<div class="ui-toolbar-menu-box">
													<div class="ui-toolbar-menu">
														<?php include_partial('access_level_action_menu', array( '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?> 
													</div>
												</div>
											<!--    End of toolbar      -->
											<div id="ui-list-collapsible-panel-two" class="ui-panel-content-box-border">
												<div class="ui-tab-panel-grid">
													<?php include_partial('access_level_list', array( '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?>  
												</div>		
											</div><!-- ui-panel-footer-default -->
										</div><!-- end of ui-tab-content --> 
										<div id="ui-main-tab-two" class="tab-pane">
											<div id="ui-list-collapsible-panel-two">
												<!-- Begining of toolbar -->
												<div class="ui-toolbar-menu-box">
													<div class="ui-toolbar-menu">
														<?php include_partial('access_level_user_action_menu', array( '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?> 
													</div> 
												</div>
												<!--    End of toolbar      -->
												<div id="ui-list-collapsible-panel-three" class="ui-panel-content-box-border">
													<div class="ui-tab-panel-grid">
														<?php include_partial('user/user_list', array('_systemUsers' => $_systemUsers )) ?> 
													</div>		
												</div>		
											</div><!-- ui-panel-footer-default -->
										</div><!-- end of ui-tab-content --> 
										 
										
									</div><!-- end of ui-tab-content -->  
								</div><!-- end of ui-main-tab-box --> 
							</div><!-- end of ui-main-tab-box --> 
							
						</div><!-- end of ui-panel-footer-default-box --> 
						
						<div class="ui-panel-footer-default-box">
						&nbsp;
						</div><!-- ui-panel-footer-default -->
						
					</div><!-- end of ui-panel-content-box --> 
								
				</div><!-- ui-panel-content-box --> 
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   
<script>
	 
</script>


