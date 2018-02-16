		<div class="ui-list-header-footer-default">	 
			<div id="ui-footer-action-toolbar-container">
				<div id="ui-footer-action-toolbar-box">
					<?php if($_object): ?>
						<?php include_partial('global/footer_toolbar', array('_object' => $_object)) ?> 	
					<?php elseif($sf_request->getParameter('action') != 'index'): ?>
						<?php include_partial('global/footer_toolbar', array()) ?> 	
					<?php else: ?>
						<span style="padding:25px 0px!important;">&nbsp;</span>
					<?php endif; ?> 
						<span style="padding:25px 0px!important;"><br></span>
				</div><!-- end of ui-footer-action-toolbar-box -->
				<div class="clearFix"></div>
			</div><!-- end of ui-footer-action-toolbar-container -->
		</div><!-- end of ui-list-header-footer-default --> 
	</div><!-- end of ui-list-header -->
</div><!-- end of ui-list-header -->
