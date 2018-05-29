 
<div class="ui-content-box" >
	<div class="containers">
		<div class="row">	
			
			<div class="col-sm-8">
				<?php include_partial('tournament_news_events', array('_tornamentNewsEvents' => $_tornamentNewsEvents)) ?>
			</div><!-- /.carousel -->
			 <div class="col-sm-4">
					<div class="panel-title">
						<h4><a> Team Standings</a></h4>
					</div>
				<?php include_partial('team_standing', array('_participantTeams' => $_participantTeamsTop7)) ?>
			</div><!-- /.carousel -->
		</div><!-- /.carousel -->
		<div class="row" style="margin-left: -9px;margin-right: -9px;border-bottom: 1px solid #6f6d7d;padding-top: 20px;">
			<div class="col-sm-12 table-header">
				<h2 style="font-weight: 500;">Timetable-by-Day <span style="color:#fcb931">AAUG Championships Mekelle University - Ethiopia 2018</span></h2>
			</div>
		</div>
        

		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs" id="myTab" style="background-color: #325889;">
				  <li class="active">
					  <a href="#home">
						  <span style="display:block">Day 1</span>
						  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#profile">
						<span style="display:block">Day 2</span>
							  05 aug
					  </a>
				  </li>
				  <li>
					  <a href="#messages">
					  <span style="display:block">Day 3</span>
							  05 aug
					  </a>
				  </li>
				  <li><a href="#settings">Settings</a></li>
				</ul>
				 
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
						<?php include_partial('fixture', array('_tournamentMatchFixtures' => $_tournamentMatchFixtures)) ?>
					</div><!-- /.col-sm -->
					</div>
					<div class="tab-pane" id="profile">...</div>
					<div class="tab-pane" id="messages">...</div>
					<div class="tab-pane" id="settings">...</div>
				</div>
			</div>
		</div><!-- /.row -->
		
		<div class="row">
			<div class="col-sm-12">
				<?php include_partial('teams', array('_candidateTeams' => $_candidateTeams)) ?> 
			</div><!-- /.col-sm --> 
		</div><!-- /.row -->
		
		<div class="row">
			
			<div class="col-sm-12">
				<div class="panel-title">
					<h4><a>Participating Universities</a></h4>
				</div>
			</div><!-- /.col-sm --> 
		</div><!-- /.row -->
		<div class="row bakGr1">
			<?php include_partial('team_participating', array('_participantTeams' => $_participantTeams)) ?>				
	    </div>
	</div><!-- /.carousel -->
	<script>
	
	    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })
    </script>
</div><!-- /.carousel -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
