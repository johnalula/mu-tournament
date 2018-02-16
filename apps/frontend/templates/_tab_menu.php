<ul class="ui-tab-list" id="" >  
		<li class="ui-active-header-tab" title="<?php echo str_replace('_',' ',ucwords($sf_request->getParameter('module'))) ?>"> 
			<img width="" class="ui-header-tab-img" src="<?php echo image_path('settings/dashboard') ?>">
			<?php echo str_replace('_',' ',ucwords($sf_request->getParameter('module'))) ?> 
		</li>  
</ul>
<div class="ui-clear-fix"></div>
