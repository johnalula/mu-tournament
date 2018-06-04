<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)): 
	
	//echo TournamentCore::makeAthleticsGameName (6, 3, 4) ;
	//echo TournamentCore::makeTournamentSportGameName ($_contestantMode, $_playersNumberPerGame, $_gameDistance, $_measurementType, 6, 2, $_jumpTypeMode) ;
	//echo $_tournamentSportGame->id.' === ';
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('edit', array( '_tournamentSportGame' => $_tournamentSportGame )) ?> 
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

<!--- ************************  -->

 


<!-- Modal -->
<div class="modal fade" id="candidateSportGameCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate Sport Game Categories') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-toolbar-menu-box">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="">
									<?php include_partial('partials/insert_toolbar', array('_object' => $_task)) ?> 
								</div>
								<div class="">
									<?php include_partial('partials/modal_filter', array( )) ?> 
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div>
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							&nbsp;
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
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
	$('#createTournamentSportGame').click(function(){
		var url = '<?php echo url_for('sport_games/createTournamentSportGame')?>'; 
		var formName = 'createTournamentSportGameForm';
		var data = $("form#createTournamentSportGameForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateSportGameCategory').click(function() {   
		var url = '<?php echo url_for('sport_games/candidateSportGameCategorys')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-parent-categorys';   
		var data = '';
		processDataSelection(data, idName, url );		 
	});  
	
	//*********************************/
	
	$("#candidateSportGameCategoryModal").submit(function(e) { 
		if($("input[name=selectSportGameCategoryModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
			document.getElementById("tournament_sport_game_name").value = listArr[2];    
			document.getElementById("contestant_team_mode").value = listArr[4];    
			$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameCategoryModal').modal('hide');
		return e.preventDefault();
	});
 
</script>
