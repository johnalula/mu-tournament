 
<div class="ui-content-box" >
	<div class="containers">
		 
		<div class="row">
			<div class="col-sm-4">
				<?php include_partial('home/team_standing', array('_participantTeams' => $_participantTeams)) ?>
			</div><!-- /.carousel -->
			<div class="col-sm-8">
				<?php include_partial('fixture', array('_matchFixtureGroup' => $_matchFixtureGroup, '_participantTeams' => $_participantTeams, '_tournamentMatchFixtureParticipants' => $_tournamentMatchFixtureParticipants)) ?>
			</div><!-- /.col-sm -->
		</div><!-- /.row --> 
		
	</div><!-- /.carousel -->
</div><!-- /.carousel -->

<?php 
	echo count($_tournamentMatchFixtureParticipants).' == ';
?>
