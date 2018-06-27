 
<div class="ui-content-box" style="border:0px solid #f00!important;">
	<div class="container" style="border:0px solid #ff0!important;">
		<div class="row ui-row-container">	 
			<div class="col-sm-6">
				<div class="ui-content-detail-box">
					<h2><?php echo $_participantTeam->teamName.' ( '.$_participantTeam->teamAlias.' )'?> </h2> 
					<div class="ui-content-detail">
						<h3>
							<?php  $_contryFlag = 'flags/'.$_participantTeam->teamCountry ?>
							<img style="max-width:85px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
							<?php echo SystemCore::processCountryValue($_participantTeam->teamCountry).' ( '.SystemCore::processCountryAliasValue($_participantTeam->teamCountry).' )'  ?> </h3>
						<span><?php echo $_participantTeam->tournamentName.' ( '.$_participantTeam->tournamentAlias.' ) - '.$_participantTeam->tournamentSeason.' - MEKELLE' ?></span>
						<span><?php echo date('d M Y',strtotime($_participantTeam->tournamentStartDate)).' - '.date('d M Y',strtotime($_participantTeam->tournamentEndDate)) ?></span>
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
		</div><!-- /.row -->

		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs" id="myTab" style="background-color: #325889;">
					<li class="active">
					  <a href="#day_one">
						 <span style="display:block"><?php echo __('Medal Standing') ?></span> 
					  </a>
				  </li>
				  <li>
					  <a href="#day_two">
						 <span style="display:block"><?php echo __('Team Members') ?></span> 
					  </a>
				  </li>
				  <li>
					  <a href="#day_three">
					  <span style="display:block"><?php echo __('Participating Games') ?></span> 
					  </a>
				  </li> 
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="day_one"> 
						<div class="panel-title">
							<h4><a><?php echo __('Medal Standing') ?></a></h4>
						</div>
					
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('team_medal_list', array('_teamParticipatingGames' => $_teamParticipatingGames)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm --> 
						
					</div><!-- /.tab-pane -->
					
					<div class="tab-pane" id="day_two">
						<div class="">
							<div class="panel-title">
								<h4><a><?php echo __('Team Members') ?></a></h4>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('team_member_list', array('_candidateParticipants' => $_candidateParticipants)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm -->
					
					</div><!-- /.tab-pane -->
					<div class="tab-pane" id="day_three">
						 <div class="panel-title">
							<h4><a><?php echo __('Participating Games') ?></a></h4>
						</div>
					
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('participant_role_list', array('_candidateParticipants' => $_candidateParticipants)) ?>
							</div><!-- /.col-sm -->
						</div><!-- /.col-sm --> 
						 
					</div><!-- /.tab-pane -->
					
				</div><!-- /.col-sm-12 -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
		 
	</div><!-- /.carousel -->
</div><!-- /.carousel --> 

<script>
	
	$('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
	})
</script>
