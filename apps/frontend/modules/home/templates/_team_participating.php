<div class="col-sm-12 col-sm-offset-0 col-md-offset-0 " style="border:0px solid #f00;">
	<div class="row placeholders">
	<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
		<div class="col-xs-2 col-sm-2 placeholder ui-placeholder">
			<a href="<?php echo url_for('competition/participant_team?team_id='.$_participantTeam->id.'&token_id='.$_participantTeam->token_id) ?>" >	
				<img style="max-width:50px;" src="<?php echo image_path('images/participant_teams') ?>" alt="First slide">
				<h4><?php echo  $_participantTeam->teamName ?>	</h4>
				<h4><?php echo  $_participantTeam->teamFullAlias ?>	</h4>
				<?php  $_contryFlag = 'flags/'.$_participantTeam->teamCountry ?>
				<div class="ui-flag">
					<img style="max-width:65px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">
				</div> 
			</a>
		</div>			
	<?php endforeach; ?>		
		<span>
			<?php echo __('Read More') ?>
		</span>
	</div>
</div>

<style>
h4 { 
	color:#fff!important;
	font-weight:bold!important;
	}
</style>
