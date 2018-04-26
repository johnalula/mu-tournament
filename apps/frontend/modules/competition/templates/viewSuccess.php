<div id="jobs"> 
	<?php foreach ($_gameCategorys as $_gameCategory): ?>
		<div class="category_">
			<div class="category">
				<div class="feed">
					<a href="">Feed</a>
				</div>
				<h1><?php echo $_gameCategory->categoryName ?></h1>
			</div> 
			<?php echo count($_gameCategory->selectCandidates()) ?>
			<?php include_partial('list', array('_matchFixtures' => $_gameCategory->selectCandidates())) ?> 
		</div>
	</div>
</div>
<?php endforeach; ?>
