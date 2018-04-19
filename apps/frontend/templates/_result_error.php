<table class="" id="ui-result-data-list" >
	<thead class="ui-panel-table-header"> 
		<tr>
			<td colspan=3 class="ui-panel-table-list-footer">&nbsp;</td>
		</tr>
	</thead>
	<tbody>
		<?php if(count($_dataResult) <= 0): ?>
			<tr class="<?php echo fmod($_i, 2) ? 'even' : 'odd' ?>"> 
				<td class="ui-table-list-border" style="width:15px;min-width:15px;" >&nbsp;</td>
				<td style="width:100%;min-width:20px;text-align:center!important;"> 
					<img style="vertical-align:middle;margin-right:5px!important;width:18px;min-width:18px;padding:6px!important;" title="No result found" src="<?php echo image_path('icons/notice')  ?>" >
					<?php echo 'No result found!' ?>
				</td> 
				<td class="ui-table-list-rihgt-border" style="width:15px;min-width:15px;">&nbsp;</td>
				<?php $_row++ ?> 
			</tr>
		<?php endif; ?>  
	</tbody> 
	<tfoot> 
		<tr>
			<td colspan=3 class="ui-panel-table-list-footer">&nbsp;</td>
		</tr>
	</tfoot>
</table>
 





