<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->isAuthenticated()): 	
	//echo sha1(md5('94f12f125643718e20d329aef595bc3e')); 
	
	//$_flag =  TournamentParticipantTeamMedalStandingTable::processGenerate ( 1, '94f12f125643718e20d329aef595bc3e', 1, $_participantTeamID, $_participantTeamTokenID, $_description, $_userID, $_userTokenID );
	//$teams = TeamTable::processAll (  1, '94f12f125643718e20d329aef595bc3e', $_tournamentID, true, $_keyword) ;
	//echo count($teams).' == ';
		//echo sha1(md5('afccda09e18b3ebfd6734f446fd6e2a4e91f95c1'));
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('team', array( '_teams' => $_teams, '_countTeams' => $_countTeams )) ?> 
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
 

<script>
	$('#generateTournamentMedalAwardStanding').click(function(){
		var url = '<?php echo url_for('team/generateTournamentMedalAwardStanding')?>'; 
		var datas = '';
		processEntry(datas, url )
		//alert('Hello');
		return true; 
	});  
	
</script>
