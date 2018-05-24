
			<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
			<div class="col-sm-2">
					<div style="height:120px; background-color:;text-align: center;padding-top: 2px;">
						<?php echo  $_participantTeam->team_logo_file_full_path ?>
						<img style="max-width:65px;" src="<?php echo image_path('images/mulogo') ?>" alt="First slide">
						</br>
						<div style="font-size:10px;">
						<?php echo  $_participantTeam->teamName ?>	
						</div>	
									
						<?php //echo  $_participantTeam->id ?>
						<img style="max-width:65px;" src="<?php echo image_path('flags/1030.png') ?>" alt="First slide">
						<?php echo  $_participantTeam->team_country_flag_file_full_path ?>
						
					</div>
			</div>					
			<?php endforeach; ?>		

