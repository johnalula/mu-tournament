<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12">
			<div class="ui-panel-grid"> 
				<!-- Begining of Tab -->
				<div class="ui-panel-tab-container-box-header"> 
				
					<div class="ui-panel-main-tab-box"> 
						<div class="ui-tabs" id="ui-tabs">
							<div class="ui-panel-tab-main-header-box">
								<div class="ui-tabs">
									<ul class="nav nav-tabs ui-main-tab">
										<li class="active selesctCandidateCourseSubject" id="selesctCandidateCourseSubject">
											<a href="#ui-main-tab-one" data-toggle="tab">
												<img class="" src="<?php echo image_path('settings/curriculum') ?>">
												<?php echo __('Sport Games') ?>
											</a>
										</li> 
										<li class="selectCandidateActiveCourses" id="selectCandidateActiveCourses">
											<a href="#ui-main-tab-two" data-toggle="tab">
												<img class="" src="<?php echo image_path('settings/courses') ?>">
												<?php echo __('Sport Category') ?>
											</a>
										</li>  
										<li class="selectCourseAssessmentTypes" id="selectCourseAssessmentTypes">
											<a href="#ui-main-tab-three" data-toggle="tab">
												<img class="" src="<?php echo image_path('settings/assessment_type') ?>">
												<?php echo __('Game Rounds') ?>
											</a>
										</li>  
									</ul>
								</div><!-- end of ui-panel-tab-header-box --> 
							</div><!-- end of ui-panel-tab-header-box -->  
							
							<!-- Begining of Tab content -->
							<div class="tab-content">
								<div class="ui-tab-separater"></div>
								<div id="ui-main-tab-one" class="tab-pane active">
									<div id="ui-list-collapsible-panel-one">
										<!-- Begining of toolbar -->
										<div class="ui-toolbar-menu-box">
											<div class="ui-toolbar-menu">
												<?php include_partial('sport_game_type_action_toolbar', array()) ?> 
											</div>
										</div>
										<!--    End of toolbar      -->
										<div class="ui-panel-form-content-box ui-tab-panel-form-box"> 
											<?php include_partial('sport_game_type_form', array('_countGameCategorys' => $_countGameCategorys)) ?> 
										</div> <!-- ui-panel-content -->
									
										<div class="ui-tab-panel-default-header-box">
											<div class="ui-tab-panel-default-header">
												<h2 class="ui-theme-panel-header-title">
													<img src="<?php echo image_path('settings/curriculum') ?>" title="<?php echo __('Course subject management') ?>">
													<?php echo __('Sport Games') ?>
												</h2>
												<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
													<span id="ui--tab-panel-content-up-arrow-two" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
													<span id="ui--tab-panel-content-down-arrow-two" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
												</div>
											</div>
										</div><!-- ui-panel-footer-default -->
										
										<div id="ui-tab-panel-content-collapsible-one">
											<div class="ui-tab-separater"></div>
											<div class="ui-toolbar-menu-box">
												<div class="ui-toolbar-menu">
													1
												</div>
											</div>
											<div class="ui-panel-content-box ">
												<div class="ui-tab-panel-grid">  
													<?php include_partial('sport_game_type_list', array('_sportGames' => $_sportGames)) ?> 
												</div>
											</div>  
										</div><!-- ui-panel-footer-default -->	
									</div><!-- ui-panel-footer-default -->
						
								</div><!-- ui-main-tab-one --> 
								
								<div id="ui-main-tab-two" class="tab-pane">
									<div id="ui-list-collapsible-panel-two">
										<!-- Begining of toolbar -->
										<div class="ui-toolbar-menu-box">
											<div class="ui-toolbar-menu">
												<?php include_partial('game_category_action_toolbar', array()) ?> 
											</div>
										</div>
									<!--    End of toolbar      -->
										<div class="ui-panel-form-content-box ui-tab-panel-form-box"> 
											<?php include_partial('game_category_form', array()) ?> 
										</div> <!-- ui-panel-content -->
									
										<div class="ui-tab-panel-default-header-box">
											<div class="ui-tab-panel-default-header">
												<h2 class="ui-theme-panel-header-title">
													<img src="<?php echo image_path('settings/curriculum') ?>" title="<?php echo __('Course management') ?>">
													<?php echo __('Sport Game Categories') ?>
												</h2>
												<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-two" style="">	
													<span id="ui-tab-panel-contentup-arrow-two" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>	
													<span id="ui--tab-panel-content-down-arrow-two" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
												</div>
											</div>
										</div><!-- ui-panel-footer-default -->
										
										<div id="ui-tab-panel-content-collapsible-two">
											<div class="ui-tab-separater"></div>
											<div class="ui-toolbar-menu-box">
												<div class="ui-toolbar-menu">
													2
												</div>
											</div>
											<div class="ui-panel-content-box ">
												<div class="ui-tab-panel-grid">  
													<?php include_partial('game_category_list', array('_gameCategorys' => $_gameCategorys)) ?> 
												</div>
											</div>  
										</div><!-- ui-panel-footer-default -->	
									</div><!-- ui-panel-footer-default -->
									
								</div><!-- ui-main-tab-one --> 
								
								<div id="ui-main-tab-three" class="tab-pane">
									<div id="ui-list-collapsible-panel-three">
										<!-- Begining of toolbar -->
										<div class="ui-toolbar-menu-box">
											<div class="ui-toolbar-menu">
												<?php include_partial('game_round_action_toolbar', array()) ?> 
											</div>
										</div>
										<!--    End of toolbar      -->
										<div class="ui-panel-form-content-box ui-tab-panel-form-box"> 
											<?php include_partial('round_form', array()) ?> 
										</div> <!-- ui-panel-content -->
									
										<div class="ui-tab-panel-default-header-box">
											<div class="ui-tab-panel-default-header">
												<h2 class="ui-theme-panel-header-title">
													<img src="<?php echo image_path('settings/assessment_types') ?>" title="<?php echo __('Game Round Management') ?>">
													<?php echo __('Game Rounds') ?>
												</h2>
												<div class="ui-panel-content-minimize opened" id="ui-list-collaps-tab-panel-three" style="">	
													<span id="ui--tab-panel-content-up-arrow-three" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
													<span id="ui--tab-panel-content-down-arrow-three" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
												</div>
											</div>
										</div><!-- ui-panel-footer-default -->
										
										<div id="ui-tab-panel-content-collapsible-tthree">
											<div class="ui-tab-separater"></div>
											<div class="ui-toolbar-menu-box">
												<div class="ui-toolbar-menu">
													<?php include_partial('game_category_action_toolbar', array()) ?> 
												</div>
											</div>
											<div class="ui-panel-content-box ">
												<div class="ui-tab-panel-grid">  
													<?php include_partial('round_list', array('_gameRounds' => $_gameRounds)) ?> 
												</div>
											</div>  
										</div><!-- ui-panel-footer-default -->
									</div><!-- ui-panel-footer-default -->	
									
								</div><!-- ui-main-tab-one --> 
								
							</div><!-- tab-content --> 

						</div><!-- ui-panel-content-box --> 
					</div><!-- ui-panel-content-box --> 
				</div><!-- ui-panel-content-box --> 
				<!-- end of tab -->
				
				<div class="ui-panel-footer-default-box">
				&nbsp;
				</div><!-- ui-panel-footer-default -->
					
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   
<script>
	 
</script>


