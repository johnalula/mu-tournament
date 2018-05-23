 
<div class="ui-content-box" >
	<div class="containers">
		<div class="row">	
			
			<div class="col-sm-12">
				<?php include_partial('tournament_news_events', array('_tornamentNewsEvents' => $_tornamentNewsEvents)) ?>
			</div><!-- /.carousel -->
			
		</div><!-- /.carousel -->
		<div class="row">
			<div class="col-sm-4">
				<div class="ui-table-panel-box">
					<div class="ui-table-panel">
						<h2><?php echo __('Team Standings') ?></h2>
						<div class="ui-panel">
							<?php include_partial('team_standing', array('_participantTeams' => $_participantTeams)) ?>
						</div>
					</div><!-- /.carousel -->
				</div><!-- /.carousel -->
			</div><!-- /.carousel -->
			<div class="col-sm-8">
				<div class="ui-table-panel-box">
					<div class="ui-table-panel">
						<h2><?php echo __('Time Table') ?></h2>
						<div class="ui-panel">
							<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchFixtures)) ?>
						</div>
					</div><!-- /.carousel -->
				</div><!-- /.carousel -->
			</div><!-- /.col-sm -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-sm-12">
				<?php include_partial('teams', array('_candidateTeams' => $_candidateTeams)) ?> 
			</div><!-- /.col-sm --> 
		</div><!-- /.row -->
		
	</div><!-- /.carousel -->
</div><!-- /.carousel -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
