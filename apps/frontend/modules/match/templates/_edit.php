<div class="ui-panel-container" id="" style="border:0px solid #f0f;"> 
	<div class="ui-panel-grid-box" id="" style="border:0px solid #f0f;"> 
		<!-- First panel --> 
		<div class="col-sm-121" id="">  
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/product') ?>" title="<?php echo __('Match Management') ?>">
						<?php echo __('New Match') ?>
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
								<div class="row">
									<div class="col-sm-6">
										<?php include_partial('update_action_toolbar', array('_object' => $_tournamentMatch)) ?> 
									</div>
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div>
					<!--    End of toolbar      -->
					<div class="ui-panel-form-content"> 
						<?php include_partial('edit_form', array('_tournamentMatch' => $_tournamentMatch, '_activeTournament' => $_activeTournament, '_candidateRounds' => $_candidateRounds)) ?> 
					</div> <!-- ui-panel-conten -->
				</div><!-- ui-panel-content-box -->
				
				<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box  ui-toolbar-border">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="row">
									<div class="col-sm-6">
										<?php include_partial('footer_action_toolbar', array('_object' => $_tournamentMatch)) ?>
									</div>
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div  
					<!--    End of toolbar      -->
				
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   

<script>
	
		/*$('#product_class_id').change(function()	 {
			$('#product').load(
				$(this).parents('form').attr('action'),
				{ class_id: this.value, keyword: $('#product_keyword').val() } 
			);
			alert(query); 
		});*/
		$('#pagination-limit').change(function()	 {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
		});
	}); 
</script>


