<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="" style="">  
			<div class="ui-panel-grid" style="">
				<div class="ui-grid-box" id="" style=""> 
				
					<div class="ui-panel-header-default">
						<h2 class="ui-theme-panel-header">
							<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
						<span class="ui-header-status-icon">
							<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
							<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
						</span>
						<?php echo __('Match Fixture').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
									<div class="">
										<?php include_partial('action_toolbar', array('_object' => $_tournamentMatch)) ?> 
									</div> 
								</div><!-- end of ui-filter-list -->
							</div>
						</div  
						<!--    End of toolbar      -->
						<div class="ui-panel-detail-form-container" style=""> 
							<div class="ui-panel-form-content"> 
								<?php include_partial('fixture_form', array('_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament,'_candidateRounds' => $_candidateRounds)) ?> 
							</div> <!-- ui-panel-content -->
						</div> <!-- ui-panel-content -->
					</div><!-- ui-panel-content-box -->
					
					<div class="ui-panel-footer-default-box">
						<div class="ui-panel-footer-default-header">
							<h2 class="ui-theme-panel-header-title">
								<img src="<?php echo image_path('settings/category') ?>" title="<?php echo __('Participant Teams') ?>">
								<?php echo __('Participant Teams') ?>
							</h2>
							<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-two" style="">	
								<span id="ui-panel-form-up-arrow-two" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
								<span id="ui-panel-form-down-arrow-two" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
							</div>
						</div>
					</div><!-- ui-panel-footer-default -->
					
					<div class="ui-panel-content-box ">
						<div class="ui-panel-grid-list"> 
							<?php include_partial('fixture_list', array('_matchFixtures' => $_matchFixtures)) ?> 
						</div>
					</div> 
						
					<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box  ui-toolbar-border">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="row">
									<div class="col-sm-12">
										<?php include_partial('footer_navigation', array('_object' => $_tournamentMatch)) ?> 
									</div> 
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div  
					<!--    End of toolbar      -->
					
				</div><!-- end of ui-panel-box5 -->   
			</div><!-- end of ui-panel-box5 -->   
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   



<script>
	 
</script>


