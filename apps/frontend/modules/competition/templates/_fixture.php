<div class="row">
			<div class="col-sm-12">
				 
				<div class="tab-content">
					<div class="tab-pane active" id="home">
				  
				
					<div class="">
						<div class="panel-title">
							<h4><a> Session</a></h4>
						</div>
						
					</div>
					<!--<div class="col-sm-4">
						<?php //include_partial('team_standing', array('_participantTeams' => $_participantTeams)) ?>
					</div> /.carousel -->
					<div class="col-sm-12">
						<?php include_partial('participant_list', array('_tournamentMatchFixtureParticipants' => $_tournamentMatchFixtureParticipants)) ?>
					</div><!-- /.col-sm -->
					</div>
					<div class="tab-pane" id="profile">...</div>
					<div class="tab-pane" id="messages">...</div>
					<div class="tab-pane" id="settings">...</div>
				</div>
			</div>
		</div><!-- /.row -->
		
