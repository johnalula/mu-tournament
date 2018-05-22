<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/sport_games') ?>" title="<?php echo __('Sport Game Management') ?>">
						<span class="ui-header-status-icon">
						</span>
						<?php echo __('Sport Games')  ?>
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
							<?php include_partial('action_toolbar', array('_teamGroup' => $_tournamentTeamGroup)) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" style=""> 
							<div class="ui-panel-form-content"> 
								<?php include_partial('form', array('_tournamentTeamGroup' => $_tournamentTeamGroup, '_candidateGroups' => $_candidateGroups,'_activeTournament' => $_activeTournament,'_candidateGameCategorys' => $_candidateGameCategorys) ) ?> 
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
														<img src="<?php echo image_path('settings/sport_games') ?>" title="<?php echo __('Team Groups') ?>">
														<?php echo __('Sport Games') ?>
													</a>
												</li>  
											</ul>
										</div><!-- end of ui-panel-tab-header-box --> 
									</div><!-- end of ui-panel-tab-header-box --> 
									
									<div class="tab-content">
										<div class="ui-tab-separater"></div>
										<div id="ui-main-tab-one" class="tab-pane active"> 
											<!-- Begining of toolbar -->
											<div class="ui-toolbar-menu-box  ui-toolbar-border1">
												<div class="ui-toolbar-menu">
													<div id="" class="navbar-collapse ui-toolbar">
														<div class="">
															<?php include_partial('footer_action_toolbar', array()) ?> 
														</div>
														<div class="">
															<?php include_partial('filter', array( )) ?> 
														</div><!-- end of ui-filter-list -->
													</div><!-- end of ui-filter-list -->
												</div>
											</div  
											<!--    End of toolbar      -->
											
											<div id="ui-list-collapsible-panel-five">
												<div class="ui-tab-panel-grid">
													<?php include_partial('list', array('_sportGames' => $_sportGames, '_countSportGames' => $_countSportGames)) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											
											<div class="ui-panel-footer-default ui-panel-footer-margin">
												<div class="ui-panel-list-pagination-default">
													<div class="ui-panel-list-pagination">
														<?php include_partial('global/pagination', array('_totalRecords' => $_countSportGames , '_pager'=> 'sport-games')) ?>
													</div>
												</div>
											</div>
										</div><!-- end of ui-tab-content --> 
										
										
										 <!-- Begining of toolbar -->
										<div class="ui-toolbar-menu-box  ui-toolbar-border1 ui-panel-footer-margin ui-panel-footer-border">
											<div class="ui-toolbar-menu">
												<div id="" class="navbar-collapse ui-toolbar">
													<div class="row">
														<div class="col-sm-12">
															x
														</div> 
													</div><!-- end of ui-filter-list -->
												</div><!-- end of ui-filter-list -->
											</div>
										</div  
										<!--    End of toolbar      -->
									
										
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


