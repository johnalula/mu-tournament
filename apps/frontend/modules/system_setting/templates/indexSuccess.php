<?php if(!$sf_user->isAuthenticated()): ?>
<div class="ui-list-box-container">
	<div class="ui-list-box-layer">		
		<div class="ui-list-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-2" style="">  
						<div class="ui-content-container">
							<div class="ui-content-header">
								 <h2 class="ui-theme-header">User Administration</h2>
							</div>
							<div class="ui-admin-menu-box">
								 <?php include_partial('global/admin_menu', array()) ?> 
							</div>
							
						</div>
					</div> 
					
					<div class="col-sm-10" style="">  
						<div class="ui-main-content-panel-box">
							<div class="ui-main-tab-content">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#ui-main-tab-one" data-toggle="tab">
											<img class="" src="<?php echo image_path('settings/user') ?>">
											<?php echo 'Users' ?>
										</a>
									</li>   
									<li class="">
										<a href="#ui-main-tab-four" data-toggle="tab">
											<img class="" src="<?php echo image_path('settings/author') ?>">
											<?php echo __('User Role') ?>
										</a>
									</li>   
								</ul>
							</div>
							
							<div class="ui-main-content-panel">
								<div class="tab-content" id="ui-tab-panel-content-collapsible-one">
									
									<div id="ui-main-tab-one" class="tab-pane active"> 
										<div class="ui-toolbar-menu-box">
											<div class="ui-toolbar-menu ui-toolbar-menu-border">
												<div id="" class="navbar-collapse ui-toolbar ">
													<div class="">
														<ul class="nav navbar-nav ui-toolbar-action">
															<li class="">
																<a href="<?php echo url_for('administrator/new_user') ?>" title="<?php echo __('Create New User') ?>" id="createNewUser" class="" >
																	<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
																	<?php echo __('New') ?>
																</a>
															</li>	  
														</ul>
													</div> 
												</div><!-- end of ui-filter-list -->
											</div>
										</div>
										<div class="ui-content-panel ui-panel-grid-list">
											xx
										</div>
									</div>
									
									<div id="ui-main-tab-two" class="tab-pane"> 
										<div class="ui-content-panel ui-panel-grid-list">
											xx
										</div>
									</div>
									
									<div id="ui-main-tab-three" class="tab-pane"> 
										
										<div class="ui-content-panel ui-panel-grid-list">
											xx
										</div>
									</div>
									
									<div id="ui-main-tab-four" class="tab-pane"> 
										
										<div class="ui-toolbar-menu-box ">
											<div class="ui-toolbar-menu ">
												<div id="" class="navbar-collapse ui-toolbar ">
													<div class="">
														<ul class="nav navbar-nav ui-toolbar-action">
															<li class="">
																<a href="<?php echo url_for('author/new') ?>" title="<?php echo ('Create New Author') ?>" id="createNewAuthor" class="" >
																	<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
																	<?php echo ('New') ?>
																</a>
															</li>	  
														</ul>
													</div> 
												</div><!-- end of ui-filter-list -->
											</div>
										</div>
										<div class="ui-content-panel ui-panel-grid-list">
											xx
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearFix"></div> 
</div>  
<?php else: ?>

	<div class="ui-success-container" id="ui-success-box" >
		<?php echo include_partial('global/authorization_denied', array()) ?>
	</div>
<?php endif; ?>
