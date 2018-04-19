<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/group') ?>" title="<?php echo __('Team Management') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
							<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
							<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
						</span>
						<?php echo __('Team').' ( Name: '.$_team->teamName.' - Country: '.SystemCore::processCountryAliasValue($_team->teamCountry).' - ID #: '.$_team->teamNumber.' )'  ?>
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
							<?php include_partial('action_toolbar', array()) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" id=""> 
							<div class="ui-panel-content-detail"> 
								<?php include_partial('team_view', array('_team' => $_team)) ?> 
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
														<img class="" src="<?php echo image_path('settings/team') ?>">
														<?php echo __('Game Participation') ?>
													</a>
												</li> 
												<li class="">
													<a href="#ui-main-tab-two" data-toggle="tab">
														<img class="" src="<?php echo image_path('settings/team') ?>">
														<?php echo __('Team Members') ?>
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
													<div id="" class="navbar-collapse ui-toolbar">
														<div class="">
															<?php include_partial('game_participation_toolbar', array()) ?> 
														</div> 
													</div><!-- end of ui-filter-list -->
												</div>
											</div>
											<!--    End of toolbar      -->
											<div id="ui-list-collapsible-panel-two">
												<div class="ui-panel-grid-list-form ui-panel-form-border">
													<?php include_partial('game_participation_form', array('_team' => $_team )) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											
											<div class="ui-panel-footer-default-container">
												<div class="ui-panel-footer-default-box ui-panel-footer-default-box-border">
													<div class="ui-panel-footer-default-header ui-panel-footer-default-header-border">
														<h2 class="ui-theme-panel-header-title">
															<img src="<?php echo image_path('settings/category') ?>" title="<?php echo __('Team Game Participation') ?>">
															<?php echo __('Game Participation') ?>
														</h2> 
													</div>
												</div><!-- ui-panel-footer-default -->
											</div>
						
											<div id="ui-list-collapsible-panel-five">
												<div class="ui-tab-panel-grid">
													<?php include_partial('game_participation_list', array('_gameParticipations' => $_gameParticipations,'_countGameParticipations' => $_countGameParticipations )) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											<div class="ui-panel-footer-default">
												<div class="ui-panel-list-pagination-default">
													<div class="ui-panel-list-pagination">
														<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
													</div>
												</div>
											</div>
										</div><!-- end of ui-tab-content --> 
										
										<div id="ui-main-tab-two" class="tab-pane">
											<div id="ui-list-collapsible-panel-two">
												<!-- Begining of toolbar -->
												<div class="ui-toolbar-menu-box">
													<div class="ui-toolbar-menu">
														<div id="" class="navbar-collapse ui-toolbar">
															<div class="">
																<?php include_partial('team_member_toolbar', array()) ?> 
															</div> 
														</div><!-- end of ui-filter-list -->
													</div>
												</div>
												<!--    End of toolbar      -->
												<div id="ui-list-collapsible-panel-two">
													<div class="ui-panel-grid-list-form ui-panel-form-border">
														<?php include_partial('team_member_form', array('_team' => $_team )) ?> 
													</div>		
												</div><!-- ui-tab-panel-grid -->
												
												<div class="ui-panel-footer-default-container">
													<div class="ui-panel-footer-default-box ui-panel-footer-default-box-border">
														<div class="ui-panel-footer-default-header ui-panel-footer-default-header-border">
															<h2 class="ui-theme-panel-header-title">
																<img src="<?php echo image_path('settings/category') ?>" title="<?php echo __('Team Members') ?>">
																<?php echo __('Team Members') ?>
															</h2> 
														</div>
													</div><!-- ui-panel-footer-default -->
												</div>
							
												<div id="ui-list-collapsible-panel-five">
													<div class="ui-tab-panel-grid">
														<?php include_partial('team_member_list', array( '_memberParticipants' => $_memberParticipants )) ?> 
													</div>		
												</div><!-- ui-tab-panel-grid -->
												
												<div class="ui-panel-footer-default">
													<div class="ui-panel-list-pagination-default">
														<div class="ui-panel-list-pagination">
															<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
														</div>
													</div>
												</div>
												
											</div><!-- ui-panel-footer-default -->
										</div><!-- end of ui-tab-content --> 
										
										 
										
									</div><!-- end of ui-tab-content -->  
								</div><!-- end of ui-main-tab-box --> 
							</div><!-- end of ui-main-tab-box --> 
							
						</div><!-- end of ui-panel-footer-default-box --> 
						 
						
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


