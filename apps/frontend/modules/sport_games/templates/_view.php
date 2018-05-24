<div class="ui-panel-container" id=""> 
	<input type="hidden" class="form-control" id="tournament_match_id" name="tournament_match_id" value="<?php echo $sf_request->getParameter('match_id') ?>"> 
	<input type="hidden" class="form-control" id="tournament_match_token_id" name="tournament_match_token_id" value="<?php echo $sf_request->getParameter('token_id') ?>"> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
							<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
						</span>
						<?php echo __('Match Participant Teams').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->tournamentMatchFullNumber.' )'  ?>
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
							xx
						</div>
					</div>
					<!--    End of toolbar      -->
					
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" id=""> 
							<div class="ui-panel-content-detail"> 
								<?php include_partial('sport_game_view', array('_sportGame' => $_sportGame)) ?> 
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
														<?php echo __('Teams') ?>
													</a>
												</li>  
												<li class="">
													<a href="#ui-main-tab-two" data-toggle="tab">
														<img class="" src="<?php echo image_path('settings/team') ?>">
														<?php echo __('Men Participants') ?>
													</a>
												</li>  
												<li class="">
													<a href="#ui-main-tab-three" data-toggle="tab">
														<img class="" src="<?php echo image_path('settings/team') ?>">
														<?php echo __('Women Participants') ?>
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
															xx
														</div> 
													</div><!-- end of ui-filter-list -->
												</div>
											</div>
											
											<div id="ui-list-collapsible-panel-five">
												<div class="ui-tab-panel-grid">
													<?php include_partial('participant_team_list', array('_candidateParticipantTeams' => $_candidateParticipantTeams,'_countCandidateParticipantTeams' => $_countCandidateParticipantTeams )) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											
											<div class="ui-panel-footer-default ui-panel-footer-margin">
												<div class="ui-panel-list-pagination-default">
													<div class="ui-panel-list-pagination">
														xx
													</div>
												</div>
											</div>
										</div><!-- end of ui-tab-content --> 
										
										<div id="ui-main-tab-two" class="tab-pane"> 
											<!-- Begining of toolbar -->
											<div class="ui-toolbar-menu-box">
												<div class="ui-toolbar-menu">
													<div id="" class="navbar-collapse ui-toolbar">
														<div class="">
															xx
														</div> 
													</div><!-- end of ui-filter-list -->
												</div>
											</div>
											
											<div id="ui-list-collapsible-panel-five">
												<div class="ui-tab-panel-grid">
													<?php include_partial('men_participant_list', array( '_candidateMenParticipants' => $_candidateMenParticipants,'_countCandidateMenParticipants' => $_countCandidateMenParticipants )) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											
											<div class="ui-panel-footer-default ui-panel-footer-margin">
												<div class="ui-panel-list-pagination-default">
													<div class="ui-panel-list-pagination">
														xx
													</div>
												</div>
											</div>
										</div><!-- end of ui-tab-content --> 
										<div id="ui-main-tab-three" class="tab-pane"> 
											<!-- Begining of toolbar -->
											<div class="ui-toolbar-menu-box">
												<div class="ui-toolbar-menu">
													<div id="" class="navbar-collapse ui-toolbar">
														<div class="">
															xx
														</div> 
													</div><!-- end of ui-filter-list -->
												</div>
											</div>
											
											<div id="ui-list-collapsible-panel-five">
												<div class="ui-tab-panel-grid">
													<?php include_partial('women_participant_list', array( '_candidateWomenParticipants' => $_candidateWomenParticipants,'_countCandidateWomenParticipants' => $_countCandidateWomenParticipants )) ?> 
												</div>		
											</div><!-- ui-tab-panel-grid -->
											
											<div class="ui-panel-footer-default ui-panel-footer-margin">
												<div class="ui-panel-list-pagination-default">
													<div class="ui-panel-list-pagination">
														xx
													</div>
												</div>
											</div>
										</div><!-- end of ui-tab-content --> 
										
										 <!-- Begining of toolbar -->
										 
										
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


