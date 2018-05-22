
<form action="<?php echo url_for('product/search') ?>" method="get" class="">
<ul class="nav navbar-nav ui-toolbar-action navbar-right"> 
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	 
	<li class="ui-toolbar-sm-2">  
		<select id="member_gender_category_id" name="member_gender_category_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Tournament Group Participants Gender Classification') ?>">
			<option value="0"><?php echo __('All') ?></option>
			<?php foreach(TournamentCore::processPlayerGender() as $_key => $_gender): ?>								 
				<option value="<?php echo $_key ?>" >
					<?php echo $_gender ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li>	 
	<li class="ui-toolbar-sm-2">  
		<select id="member_gender_category_id" name="member_gender_category_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Tournament Group Participants Gender Classification') ?>">
			<option value="0"><?php echo __('All') ?></option>
			<?php foreach(TournamentCore::processPlayerGender() as $_key => $_gender): ?>								 
				<option value="<?php echo $_key ?>" >
					<?php echo $_gender ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li>	 
	<li class="ui-toolbar-sm-3">  
		<input type="text" class="form-control ui-toolbar-input-xsm-2" id="member_keyword" name="member_keyword" >
	</li>	
</ul>
 
</form>
