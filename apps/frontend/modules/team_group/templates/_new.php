<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
						<?php echo __('Tournament Team Group') ?>
					</h2>
					<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
						<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
						<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
					</div>
				</div><!-- ui-panel-header-default -->
				<div class="" id="ui-list-collapsible-panel-one">
					<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
				<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box ui-panel-content-border">
						<div class="ui-toolbar-menu">
							<?php include_partial('action_toolbar', array()) ?> 
						</div>
					</div>
					<!--    End of toolbar      -->
					<div class="ui-panel-content-box">
						<div class="ui-panel-detail-form-container" style=""> 
							<div class="ui-panel-form-content"> 
								<?php include_partial('form', array('_candidateGroups' => $_candidateGroups,'_activeTournament' => $_activeTournament,'_candidateGameCategorys' => $_candidateGameCategorys) ) ?> 
							</div> <!-- ui-panel-content -->
						</div> <!-- ui-panel-content -->
						
						<div class="ui-panel-footer-default-box">
							<h2 class="ui-theme-panel-header-title">
								<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Groups') ?>">
								<?php echo __('Tournament Groups') ?>
							</h2>
						</div><!-- ui-panel-footer-default -->
						
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list"> 
								<?php include_partial('list', array('systemModules' => $_systemModules)) ?> 
							</div>
						</div> 
						
					<div class="ui-panel-footer-default-box">
						&nbsp;
					</div><!-- ui-panel-footer-default -->			
					</div> 			
					 
				</div><!-- ui-panel-content-box --> 
					
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   
<script>
	 
</script>


