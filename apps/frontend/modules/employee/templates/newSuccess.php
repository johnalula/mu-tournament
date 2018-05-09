<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)):
	
	//sport_game_category_name=Athletics (ATHLETICS)&sport_game_category_id=1&sport_game_category_token_id=fea2553fcd57307b5e9907b2350cd52ed542bb41&contestant_team_mode=2&sport_game_category=&sport_game_type=1&sport_game_type_mode=1&sport_game_measurement=1&sport_game_distance=400&sport_game_type_name=400M&sport_game_throw_type=&sport_game_jump_type_mode=&sport_game_player_mode=4&sport_game_status=2&description=asdfas dfasdf asdf
	
	//$_flag =  SportGameTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 1, 'fea2553fcd57307b5e9907b2350cd52ed542bb41', 'Athletics (ATHLETICS)', '400M', $_sportGameAlias, 1, 400, 1, 1, $_throwTypeMode, $_jumpTypeMode, 4, 2, 2, 'asdfas dfasdf asdf', $_userID, $_userTokenID  );  
	 
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('new', array( '_employees' => $_employees, '_countEemployees' => $_countEemployees)) ?> 
			</div><!-- end of ui-tab-three-->
		</div> <!-- end of ui-detail-tab-list -->
		<div class="ui-clear-fix"></div>
	</div> <!-- end of ui-main-list-default -->
</div>		  
<?php else: ?> 
	<div class="ui-error-container" id="ui-error-box" >
		<?php echo include_partial('global/credential_denied', array()) ?>
	</div>  
<?php endif; ?>

<?php else: ?>

	<div class="ui-success-container" id="ui-success-box" >
		<?php echo include_partial('global/authorization_denied', array()) ?>
	</div>
<?php endif; ?>         



<!-- Modal -->
<div class="modal fade" id="candidateOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog-xlg">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/organization') ?>" title="<?php echo __('Employee Management') ?>">
									<span class="ui-header-status-icon">
									</span>
									<?php echo __('Candidate Organization')   ?>
								</h2>
								<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
							</div><!-- ui-panel-header-default -->
							<div class="" id="ui-list-collapsible-panel-one">
								<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
							<!-- Begining of toolbar -->
								<div class="ui-toolbar-menu-box ui-panel-content-border">
									<div class="ui-toolbar-menu">
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_candidateSportGames)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('organization/candidate_organization', array( '_candidateOrganizations' => $_candidateOrganizations )) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
											</div>
										</div>
									</div>
											
								</div> 			
							</div><!-- ui-panel-content-box --> 
						</div><!-- end of ui-panel-grid --> 
					<!-- First panel --> 
					<div class="clearFix"></div>		
				</div><!-- end of ui-panel-grid-box --> 
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->



<script>
	$('#createOrganizationEmployee').click(function(){
		var url = '<?php echo url_for('employee/createEmployee')?>'; 
		var formName = 'createEmployeeForm';
		var data = $("form#createEmployeeForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return true; 
	});
	$('.selectCandidateOrganization').click(function() {   
		var url = '<?php echo url_for('sport_games/candidateSportGameCategorys')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-parent-categorys';   
		var data = '';
		processDataSelection(data, idName, url );		 
	});  
	
	//*********************************/
	
	$("#candidateOrganizationModal").submit(function(e) { 
		if($("input[name=selectSportGameCategoryModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
			document.getElementById("contestant_team_mode").value = listArr[4];    
			$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateOrganizationModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
