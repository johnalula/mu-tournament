<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->isAuthenticated()): 	
	//echo sha1(md5('94f12f125643718e20d329aef595bc3e')); 
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
		return true; 
	});  
	
</script>
