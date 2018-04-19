<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_MATCH)):
?> 

<form class="form-horizontal" role="form" action="<?php echo url_for('match/createTournamentMatch') ?>" id="createTournamentMatchForm" name="createTournamentMatchForm" method="post"> 
	<div class="ui-page-box">
		<div class="ui-main-content-box" >
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('new', array( '_activeTournament' => $_activeTournament, '_candidateRounds' => $_candidateRounds, '_productClasses' => $_productClasses )) ?> 
				</div><!-- end of ui-tab-three-->
			</div> <!-- end of ui-detail-tab-list -->
			<div class="ui-clear-fix"></div>
		</div> <!-- end of ui-main-list-default -->
	</div>		  
</form>
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

<!--- ************************  -->
 
<!-- Modal -->
<div class="modal fade" id="candidateSportGameCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
									<span class="ui-header-status-icon"> 
									</span>
									<?php echo __('Candidate Sport Game Types')   ?>
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
											<?php include_partial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
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


<!--- ************************  -->

<div class="modal fade" id="processAjaxLoadergModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog-xxsm">
		<div class="modal-contents ui-ajax-loader-text" style="text-align:center!important;padding:5px!important;">
			<div class="ui-ajax-loader-content">
				<img src="/images/icons/ajax-loader.png"><br>
				<?php echo __('Loading . . .') ?>
			</div>	<!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog --> 
</div><!-- /.modal -->

 

<script>
	/*$('#createTournamentMatch').click(function(){
		var url = '<?php echo url_for('match/reateTournamentMatch')?>'; 
		var formName = 'createTournamentMatchForm';
		var data = $("form#createTournamentMatchForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return false; 
	}); 
	$('#createTournamentMatchFooter').click(function(){
		var url = '<?php echo url_for('team/createTeam')?>'; 
		var formName = 'createTournamentMatchForm';
		var data = $("form#createTournamentMatchForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return true; 
	}); */
	
	//*********************************/
	
	$("#candidateSportGameCategoryModal").submit(function(e) { 
		if($("input[name=selectSportGameCategoryModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("contestant_team_mode").value = listArr[4];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
			$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameCategoryModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
