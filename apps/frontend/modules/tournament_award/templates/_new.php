<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="" style="">  
			<div class="ui-panel-grid" style="">
				<div class="ui-grid-box" id="" style=""> 
				
					<div class="ui-panel-header-default">
						<h2 class="ui-theme-panel-header">
							<img src="<?php echo image_path('settings/product') ?>" title="<?php echo __('Tournament Medal Award Management') ?>">
							<?php echo __('Tournament Medal Award') ?>
						</h2>
						<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
							<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
							<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
						</div>
					</div><!-- ui-panel-header-default -->
					
					<div class="" id="ui-list-collapsible-panel-one">
						<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
					<!-- Begining of toolbar -->
						<div class="ui-toolbar-menu-box  ui-toolbar-border">
							<div class="ui-toolbar-menu">
								<div id="" class="navbar-collapse ui-toolbar">
									<div class="">
										<?php include_partial('action_toolbar', array()) ?> 
									</div> 
								</div><!-- end of ui-filter-list -->
							</div>
						</div>
						<!--    End of toolbar      -->
						<div class="ui-panel-detail-form-container" style=""> 
							<div class="ui-panel-form-content"> 
								<?php include_partial('form', array('_activeTournament' => $_activeTournament, '_candidateRounds' => $_candidateRounds)) ?> 
							</div> <!-- ui-panel-content -->
						</div> <!-- ui-panel-content -->
					</div><!-- ui-panel-content-box -->
					
					<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box  ui-toolbar-border">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="row">
									<div class="col-sm-12">
										<?php include_partial('footer_navigation', array('_object' => $_tournamentMatch)) ?> 
									</div> 
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div  
					<!--    End of toolbar      -->
					
				</div><!-- end of ui-panel-box5 -->   
			</div><!-- end of ui-panel-box5 -->   
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   



<script>
	
		 
</script>


