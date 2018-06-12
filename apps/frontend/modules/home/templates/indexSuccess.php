 
<div class="ui-content-box" style="border:0px solid #f00!important;">
	<div class="container" style="border:0px solid #ff0!important;">
		<div class="row">	
			<div class="col-sm-8">
				<?php include_partial('tournament_news_events', array('_tornamentNewsEvents' => $_tornamentNewsEvents)) ?>
			</div><!-- /.carousel -->
			 <div class="col-sm-4">
				<div class="panel-title">
					<h4><a> Team Standings</a></h4>
				</div>
				<div class="panel-content">
					<?php include_partial('team_standing', array('_participantTeamStandings' => $_participantTeamStandings)) ?>
				</div><!-- /.panel-content -->
			</div><!-- /.cols-m -->
		</div><!-- /.row -->
		
		<div class="row">
			<div class="col-sm-12 table-header">
				<h2 style="">Timetable-by-Day <span style="color:#fcb931">AAUG Championships Mekelle University - Ethiopia 2018</span></h2>
			</div> 
		</div>
        <?php echo CalendarCore::makeDateDifference($_activeTournament->start_date, $_activeTournament->end_date); 
			//echo $_date1;
        ?>

		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs" id="myTab" style="background-color: #325889;">
					<li class="active">
					  <a href="#day_one">
						  <span style="display:block">Day 1</span>
						  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#day_two">
						<span style="display:block">Day 2</span>
							  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#day_three">
					  <span style="display:block">Day 3</span>
							  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#day_three">
					  <span style="display:block">Day 4</span>
							  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#day_three">
					  <span style="display:block">Day 5</span>
							  05 aug
					  </a>
				  </li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="day_one"> 
						<div class="panel-title">
							<h4><a><?php echo TournamentCore::processTournamentSessionModeValue (TournamentCore::$_MORNING_SESSION ) ?></a></h4>
						</div>
					
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchMorningSessionFixtures)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm --> 
						
						<div class="col-sm-12">
							<div class="panel-title">
								<h4><a><?php echo TournamentCore::processTournamentSessionModeValue (TournamentCore::$_AFTERNOON_SESSION ) ?></a></h4>
							</div>
							<div class="panel-content">
								<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchAfternoonSessionFixtures)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm -->
					</div><!-- /.tab-pane -->
					
					<div class="tab-pane" id="day_two">
						<div class="">
							<div class="panel-title">
								<h4><a><?php echo TournamentCore::processTournamentSessionModeValue (TournamentCore::$_AFTERNOON_SESSION ) ?></a></h4>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchFixtures)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm -->
					
					</div><!-- /.tab-pane -->
					<div class="tab-pane" id="day_three">
						 <div class="panel-title">
							<h4><a><?php echo __('Morning Session') ?></a></h4>
						</div>
					
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchFixtures)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm --> 
						
						<div class="col-sm-12">
							<div class="panel-title">
								<h4><a><?php echo __('Afternoon Session') ?></a></h4>
							</div>
							<div class="panel-content">
								<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchFixtures)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm -->
					</div><!-- /.tab-pane -->
					
				</div><!-- /.col-sm-12 -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
		
		 
		
		<div class="row">
			<div class="col-sm-12">
				 <div class="panel-title">
					<h4><a><?php echo __('Participant Teams') ?></a></h4>
				</div>
				<div class="panel-content ui-panel-content-padding">
					<?php include_partial('team_participating', array('_participantTeams' => $_participantTeams)) ?>		
				</div><!-- /.row -->
			</div><!-- /.row -->
		</div><!-- /.row -->
		 
	</div><!-- /.carousel -->
</div><!-- /.carousel --> 

<script>
	
	$('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
	})
</script>
