<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)): 
	
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('game', array( '_sportGames' => $_sportGames, '_countSportGames' => $_countSportGames )) ?> 
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
    

<script>
	 
  function deleteTournamentSportGame(sportGameID, sportGameTokenID) {
	  
	 alert(sportGameID);
	return false;  
	}
</script>
