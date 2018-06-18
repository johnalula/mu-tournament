<div class="ui-panel-container" id=""> 

	<input type="hidden" class="form-control" id="match_fixture_group_id" name="match_fixture_group_id" value="<?php echo $sf_request->getParameter('match_fixture_id') ?>"> 
	<input type="hidden" class="form-control" id="match_fixture_group_token_id" name="match_fixture_group_token_id" value="<?php echo $sf_request->getParameter('token_id') ?>"> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="" style="">  
			<div class="ui-panel-grid" style="">
				<div class="ui-grid-box" id="" style=""> 
				
					<div class="ui-panel-header-default">
						<h2 class="ui-theme-panel-header">
							<img src="<?php echo image_path('settings/championship') ?>" title="<?php echo __('Tournament Match Match Fixture Result Management') ?>">
							<span class="ui-header-status-icon">
								<img title="<?php echo $_tournamentMatchFixtureGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatchFixtureGroup->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
								<img title="<?php echo $_tournamentMatchFixtureGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatchFixtureGroup->activeFlag ? 'status/active':'status/other')  ?>"> 
							</span>
							<?php echo __('Match Fixture Result').' ( Sport Game: '.$_tournamentMatchFixtureGroup->sportGameName.' ( '.TournamentCore::processGenderAlias($_tournamentMatchFixtureGroup->teamGroupGenderCategoryID).' ) - ( '.$_tournamentMatchFixtureGroup->gameCategoryName.' ) - Code #: '.$_tournamentMatchFixtureGroup->tournamentMatchFixtureFullNumber.' )'  ?>
						</h2>
						<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
							<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
							<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
						</div>
					</div><!-- ui-panel-header-default -->
					
					<div class="" id="ui-list-collapsible-panel-one">
						<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
					<!-- Begining of toolbar -->
						<div class="ui-toolbar-menu-box  ui-toolbar-border">
							<div class="ui-toolbar-menu">
								<div id="" class="navbar-collapse ui-toolbar">
									<div class="col-sm-6">
										<?php include_partial('action_toolbar', array('_participantTeams' => $_participantTeams)) ?> 
									</div>
									<div class="col-sm-6">
										&nbsp;
									</div>
								</div><!-- end of ui-filter-list -->
							</div>
						</div  
						<!--    End of toolbar      -->
						<div class="ui-panel-grid-list-form">
							<?php include_partial('result_list', array( '_candidateMatchFixtureParticipants' => $_candidateMatchFixtureParticipants )) ?> 
						</div> <!-- ui-panel-content -->  
					</div><!-- ui-panel-content-box -->
					
					<div class="ui-panel-footer-default">
						<div class="ui-panel-list-pagination-default">
							<div class="ui-panel-list-pagination">
								&nbsp;
							</div>
						</div>
					</div>
					
				</div><!-- end of ui-panel-box5 -->   
			</div><!-- end of ui-panel-box5 -->   
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   

 
