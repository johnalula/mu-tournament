<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/module') ?>" title="<?php echo __('Module Setting') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_module->moduleName ?>" src="<?php echo image_path($_module->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
							<img title="<?php echo $_module->moduleName ?>" src="<?php echo image_path($_module->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
						</span>
						<?php echo __('Module Setting').' ( Module Name: '.$_module->moduleName.' )'  ?>
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
							<?php include_partial('global/toolbar_action', array('_object' => $_module)) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" id=""> 
							<div class="ui-panel-content-detail"> 
								<?php include_partial('module_detail', array('_module' => $_module)) ?> 
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
											</ul>
										</div><!-- end of ui-panel-tab-header-box --> 
									</div><!-- end of ui-panel-tab-header-box --> 
									
									<div class="tab-content">
										<div class="ui-tab-separater"></div>
										<div id="ui-main-tab-one" class="tab-pane active"> 
											<!-- Begining of toolbar --> 
												<div class="ui-toolbar-menu-box">
													<div class="ui-toolbar-menu">
														cc
													</div>
												</div>
											<!--    End of toolbar      -->
											<div id="ui-list-collapsible-panel-two" class="ui-panel-content-box-border">
												<div class="ui-tab-panel-grid">
													cc
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


