<div class="ui-content-box" >
	<div class="containers">
		<div class="row">
			<div class="col-sm-4">
				<div class="ui-banner">
					<img class="logo-img" src="<?php echo image_path('images/african_university_games') ?>" title="<?php echo ('All African University Games') ?>">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="ui-main-body-content" id="">	
					<div class="ui-content"> 
						<div class="ui-main-intro"> 
								<b>International Journal of Business and Development Studies (IJBDS)</b> is a multi-disciplinary journal which seeks to explore ways of improving standards of living, and the human condition generally, by examining potential solutions to problems such as: poverty, unemployment, malnutrition, disease, lack of shelter, environmental degradation, inadequate scientific and technological resources, trade and payments imbalances, international debt, gender and ethnic discrimination, militarism and civil conflict, and lack of popular participation in economic and political life. Thus, high quality manuscripts dealing with any aspects of business and development studies are welcomed. The manuscripts may be theoretical, interpretative or experimental.
						</div>
					</div> 
				</div><!-- end of main -->
				<div class="clearFix"></div>

			</div><!-- end of ui-wrapper-box -->
			
			 
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="ui-sidebar-container">
					<div class="ui-sidebar-menu-box">
						<div class="ui-sidebar-menu">
							<div class="">
								<?php include_partial('global/left_menu', array('_tournamentGames' => $_tournamentGames,'_participantTeams' => $_participantTeams)) ?> 
							</div>  
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="ui-main-body-content" id="">	
					 
					<div class="ui-content"> 
					 <?php include_partial('content', array('_matchFixtures' => $_matchFixtures)); ?>	
					</div><!-- end of main -->
				</div><!-- end of main -->
				<div class="clearFix"></div>

			</div><!-- end of ui-wrapper-box -->
			
			 
		</div>
	</div>
</div>
