 
<div class="ui-content-box" style="border:0px solid #f00!important;">
	<div class="container" style="border:0px solid #ff0!important;">
		<div class="row ui-row-container" id="top_page">	 
			<div class="col-sm-6">
				<div class="ui-content-detail-box">
					<h2><?php echo strtoupper("Participants") ?> </h2> 
					<div class="ui-content-detail">
						<h3><?php echo $_activeTournament->tournamentName.' (FASU'.''.')'?> </h3>
						<span><?php echo ' MEKELLE' ?></span>
						<span><?php echo date('d M Y',strtotime($_activeTournament->startDate)).' - '.date('d M Y',strtotime($_activeTournament->endDate)) ?></span><br>
						&nbsp;
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
						 <span style="display:block"><?php echo __('Participants') ?></span> 
					  </a>
				  </li> 
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="day_one"> 
						<div class="panel-title">
							<h4><a><?php echo __('FASU Participants') ?></a></h4>
						</div>
					
						<div class="col-sm-12">
							<div class="panel-content">
								<?php include_partial('team_member_list', array('_candidateParticipants' => $_candidateParticipants)) ?>
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
