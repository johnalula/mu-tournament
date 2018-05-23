 
<div class="ui-content-box" >
	<div class="containers">
		 
		<div class="row">
			<div class="col-sm-4">
				<div class="ui-table-panel-box">
					<div class="ui-table-panel">
						<h2><?php echo __('Team Standings') ?></h2>
						<div class="ui-panel">
							<?php include_partial('home/team_standing', array('_participantTeams' => $_participantTeams)) ?>
						</div>
					</div><!-- /.carousel -->
				</div><!-- /.carousel -->
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
