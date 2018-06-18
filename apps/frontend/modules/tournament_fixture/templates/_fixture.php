<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="" style="">  
			<div class="ui-panel-grid" style="">
				<div class="ui-grid-box" id="" style=""> 
				
					<div class="ui-panel-header-default">
						<h2 class="ui-theme-panel-header">
							<img src="<?php echo image_path('settings/product') ?>" title="<?php echo __('Tournament Match Fixture Management') ?>">
							<?php echo __('Tournament Match Fixtures') ?>
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
									<div class="col-sm-6">
										<?php include_partial('action_toolbar', array('_participantTeams' => $_participantTeams)) ?> 
									</div>
									<div class="col-sm-6">
										<?php include_partial('filter', array( )) ?> 
									</div>
								</div><!-- end of ui-filter-list -->
							</div>
						</div  
						<!--    End of toolbar      -->
						<div class="ui-panel-grid-list" id="fixture"> 
							<?php include_partial('fixture_list', array( '_candidateMatchFixtureGroups' => $_candidateMatchFixtureGroups )) ?> 
						</div> <!-- ui-panel-content -->  
					</div><!-- ui-panel-content-box -->
					
					<div class="ui-panel-footer-default">
						<div class="ui-panel-list-pagination-default">
							<div class="ui-panel-list-pagination">
								&nbsp;
							</div>
						</div>
					</div>
					
				</div><!-- end of ui-panel-box5 -->   
			</div><!-- end of ui-panel-box5 -->   
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   



<script>
	$(document).ready(function()	{ 
		$('.participantTeamGoldMedalAward').keyup(function(key) {
			var idValue = $(this).attr('rel');   
			var goldMedalAward = $(this).val();   
			var silverMedalAward = $('#participantTeamSilverMedalAward_'+idValue).val();   
			var bronzeMedalAward = $('#participantTeamBronzMedalAward_'+idValue).val();   
			//var thisIDName = $(this).attr('id');   
			//document.getElementById("participantTeamTotalMedalAward_"+idValue).value = parseInt(goldMedalAward)+parseInt(silverMedalAward)+parseInt(bronzeMedalAward);
			//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
			//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
			return false;
		}); 
		 
	}); 
</script>


