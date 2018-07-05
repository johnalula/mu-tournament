 
<div class="ui-content-box" >
	<div class="containers">
		<div class="row ui-row-container">
			<div class="col-sm-6">
				<div class="ui-content-detail-box">
					<h2><?php echo strtoupper($_matchFixtureGroup->gameCategoryName) ?> </h2> 
					<div class="ui-content-detail">
						<h3><?php echo $_matchFixtureGroup->sportGameName.' ( '.TournamentCore::processGenderValue($_matchFixtureGroup->genderCategoryID).' )'?> </h3>
						<span><?php echo $_matchFixtureGroup->tournamentName.' ( '.$_matchFixtureGroup->tournamentAlias.' ) - '.$_matchFixtureGroup->tournamentSeason.' - MEKELLE' ?></span>
						<span><?php echo date('d M Y',strtotime($_matchFixtureGroup->tournamentStartDate)).' - '.date('d M Y',strtotime($_matchFixtureGroup->tournamentEndDate)) ?></span>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="ui-image-banner">
					<img class="ui-img-banner" src="<?php echo image_path('images/owner_logo') ?>" alt="AAUG">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="ui-image-banner">
					<img class="ui-img-banner" src="<?php echo image_path('images/african_university_games') ?>" alt="AAUG">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php include_partial('fixture', array('_matchFixtureGroup' => $_matchFixtureGroup, '_participantTeams' => $_participantTeams, '_tournamentMatchFixtureParticipants' => $_tournamentMatchFixtureParticipants)) ?>
			</div><!-- /.col-sm -->
		</div><!-- /.row --> 
		
	</div><!-- /.carousel -->
</div><!-- /.carousel -->

 
