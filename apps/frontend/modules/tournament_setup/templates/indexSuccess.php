<?php
	//ournament_name=asdfasdf&tournament_alias=asdfasdf&season=1&status=1&start_date=02/23/2018&end_date=02/28/2018&description=asdfasdfasdfad asdfasdf
	//processSave ( $_orgID, $_orgTokenID,  $_tournamentName, $_tournamentAlias, $_tournamentSeason, $_startDate, $_effectiveDate, $_endDate, $_description )
	
	//$_flag =  TournamentTable::processNew ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', 1, $_description, $_userID, $_userTokenID  ); 
	//$_flag =  TournamentTable::processSave ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', $_description ); 
	//$_flag =  TeamTable::processNew ( $_orgID, $_orgTokenID,  'Nirobi University', 'NU', 44, 'Nirobi', $_description, $_userID, $_userTokenID  );  
	//$_flag =  RoundTypeTable::processNew ( $_orgID, $_orgTokenID, 'Round One', $_roundTypeAlias, 1, 1, $_description, $_userID, $_userTokenID  );  
?>
<div class="ui-content-page">
	<?php include_partial('tournament_setup', array( '_sportGames' => $_sportGames, '_gameCategorys' => $_gameCategorys,  '_countGameCategorys' => $_countGameCategorys, '_gameRounds' => $_gameRounds )) ?> 
</div>		  
       
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
	$('#createGameCategory').click(function(){
		var url = '<?php echo url_for('tournament_setup/createGameCategory')?>'; 
		var formName = 'createGameCategoryForm';
		var data = $("form#createGameCategoryForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('#createSportGame').click(function(){
		var url = '<?php echo url_for('tournament_setup/createSportGame')?>'; 
		var formName = 'createSportGameForm';
		var data = $("form#createSportGameForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('#createGameRoundType').click(function(){
		var url = '<?php echo url_for('tournament_setup/createGameRoundType')?>'; 
		var formName = 'createGameRoundTypeForm';
		var data = $("form#createGameRoundTypeForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	
	 
	 
</script>
