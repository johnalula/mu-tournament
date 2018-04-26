 
<div class="ui-content-box" >
	<div class="containers">
		<div class="row">	
			
			<div class="col-sm-12">
				<?php include_partial('tournament_news_events', array('_tornamentNewsEvents' => $_tornamentNewsEvents)) ?>
			</div><!-- /.carousel -->
			
		</div><!-- /.carousel -->
		<div class="row">
			<div class="col-sm-4">
				<?php include_partial('team_standing', array('_participantTeams' => $_participantTeams)) ?>
			</div><!-- /.carousel -->
			<div class="col-sm-8">
				<?php include_partial('fixture', array('_candidateMatchFixtures' => $_candidateMatchFixtures)) ?>
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
