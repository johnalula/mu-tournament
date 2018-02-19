<?php

class TemplateCore {

	private $_header;
	private $_object; 
	
	public function __construct ( $header = NULL, $object = NULL ) 
	{
		$this->_header = $header;
		$this->_object = $object; 
	}
	private function _createEventObj() 
	{
		
	}

	public function buildDataList()
	{	
		$dis = count($this->_object) > 0 ? '':'disabled' ;
		$html = "\n\t<table id='ui-data-list'>\n";
		if(count($this->_object) > 0) {
			$html .= "\t\t<thead>\n\t\t\t<tr>\n\t\t\t\t<th class='ui-table-border ui-none-sortable' style='width:15px;padding:2px 8px;'>"
					."\n\t\t\t\t\t<input type='checkbox' id='all-list-check-boxs' name='all-list-check-boxs' value='true' ".$dis." />"
					."</th>"
					."\n\t\t\t\t<th>Cash Request #</th>"
					."\n\t\t\t\t<th>Requested By</th>"
					."\n\t\t\t\t<th>Supervised By</th>"
					."\n\t\t\t\t<th>Req. Amount</th>"
					."\n\t\t\t\t<th>Description</th>"
					."\n\t\t\t\t<th>Status</th>"
					."\n\t\t\t\t<th class='ui-none-sortable'>Action</th>"
					."\n\t\t\t\t<th class='ui-table-border ui-none-sortable'></th>";
			$html .= "\n\t\t\t</tr>\n\t\t</thead>"; 
			}
			$html .= "\n\t\t<tbody>"; 
		if(count($this->_object) > 0) {
			foreach ( $this->_object as $key => $obj )	{
				$mod = fmod($key, 2) ? 'even':'odd';
				$task_status_image ="status/".TaskCore::processTaskStatusIcon($obj->status)."_small" ;
				$approval_status_image ="status/".TaskCore::processRequestStatusIcon($obj->approvalStatus)."_small" ;
				$html .= "\n\t\t\t<tr class=". $mod.">"
				."\n\t\t\t\t<td class='ui-table-list-border' style='width:8px!important;'>"
				."\n\t\t\t\t\t<input type='checkbox' id='list-check-box-".++$row."' name='list-check-box[".$obj->id."]' rel='".$obj->id."' value='".$obj->token_id."' class='list-check-box' /> </td>"
				."\n\t\t\t\t<td>".$obj->cashRequestNo."</td>"
				."\n\t\t\t\t<td title='".$obj->requesterFullName."'>".Wordlimit::wordlimiter($obj->requesterFullName, 2)."</td>"
				."\n\t\t\t\t<td title='".$obj->supervisorFullName."'>".Wordlimit::wordlimiter($obj->supervisorFullName, 2)."</td>"
				."\n\t\t\t\t<td class='ui-td-right-text'>".number_format($obj->processTotalRequestedAmount(), 2)."</td>"
				."\n\t\t\t\t<td title='".$obj->description."'>".Wordlimit::wordlimiter($obj->description, 2)."</td>"
				."\n\t\t\t\t<td style='width:35px!important;'>"
				."\n\t\t\t\t\t<img title=".TaskCore::processTaskStatusValue($obj->status)."Task (".$obj->cashRequestNo ." ) src=".image_path($task_status_image).">"	
				."\n\t\t\t\t\t<img title=".TaskCore::processRequestStatusTypeValue($obj->approvalStatus)."Task (".$obj->cashRequestNo ." ) src=".image_path($approval_status_image).">"	
				."</td>"
				."\n\t\t\t\t<td style='width:66px!important;' class='ui-action-list-box ui-list-action-box4'>"
				."\n\t\t\t\t\t<div class='ui-list-action' id='list-action-menu'>"
				."\n\t\t\t\t\t\t<ul id='ui-action-menu' style='width:66px!important;'>" 
				."\n\t\t\t\t\t\t\t<li>"
				."\n\t\t\t\t\t\t\t\t<a href=".url_for('cash_request/generateRequestPDF?task_id='.$obj->id.'&token_id='.$obj->token_id)." rel='".$obj->id."'>"
				."\n\t\t\t\t\t\t\t\t\t<img title='Generate PDF for ".$obj->cashRequestNo ."' src=".image_path('icons/pdf')." >"
				."\n\t\t\t\t\t\t\t\t</a>"
				."\n\t\t\t\t\t\t\t</li>"
				."\n\t\t\t\t\t\t\t<li>"
				."\n\t\t\t\t\t\t\t\t<a href=".url_for('cash_request/edit?task_id='.$obj->id.'&token_id='.$obj->token_id)." rel='".$obj->id."'>"
				."\n\t\t\t\t\t\t\t\t\t<img title='View ".$obj->cashRequestNo ."' src=".image_path('icons/view')." >"
				."\n\t\t\t\t\t\t\t\t</a>"
				."\n\t\t\t\t\t\t\t</li>"
				."\n\t\t\t\t\t\t\t<li>"
				."\n\t\t\t\t\t\t\t\t<a href=".url_for('cash_request/edit_request?task_id='.$obj->id.'&token_id='.$obj->token_id)." rel='".$obj->id."'>"
				."\n\t\t\t\t\t\t\t\t\t<img title='Edit ".$obj->cashRequestNo ."' src=".image_path('icons/edit')." >"
				."\n\t\t\t\t\t\t\t\t</a>"
				."\n\t\t\t\t\t\t\t</li>"
				."\n\t\t\t\t\t\t\t<li>"
				."\n\t\t\t\t\t\t\t\t<a href=".url_for('cash_request/generateRequestPDF?task_id='.$obj->id.'&token_id='.$obj->token_id)." rel='".$obj->id."'>"
				."\n\t\t\t\t\t\t\t\t\t<img title='Delete ".$obj->cashRequestNo ."' src=".image_path('icons/del')." >"
				."\n\t\t\t\t\t\t\t\t</a>"
				."\n\t\t\t\t\t\t\t</li>"  
				."\n\t\t\t\t\t\t</ul>"
				."\n\t\t\t\t\t</div>"	
				."\n\t\t\t\t</td>"
				."\n\t\t\t\t<td class='ui-table-list-border' style='width:2px!important;'></td>"
				."\n\t\t\t</tr>"; 
			} 
			
		} else {
			
			$html .= "\n\t\t<tr><td class='ui-td-center-text' style='padding:10px!important;border-right:none!important;'>"
			."<img style='vertical-align:middle;margin-right:5px!important;' title='No result found' src='".image_path('icons/notice')."' >"
			."No result found!"	
			."</td></tr>";
		}
		$html .= "\n\t</tbody>"; 
		$html .= "\n\t<tfoot>";
		if(count($this->_object) > 0) {
			$html .="\n\t\t<tr>"
				."\n\t\t\t<td class='ui-table-list-border ui-td-last-row-border-left'></td>"
				."\n\t\t\t<td colspan=7 class='ui-td-last-row-border-middle' ></td>"
				."\n\t\t\t<td class='ui-table-list-border ui-td-last-row-border-right' style='padding:7px!important;'></td>"
				."\n\t\t</tr>";
		}
		$html .="\n\t\t<tr>"
			."\n\t\t\t<td colspan=9 class='ui-panel-table-list-footer' >&nbsp;</td>"
			."\n\t\t</tr>";
		$html .= "\n\t</tfoot>\n\t</table>\n\n"; 
		
		return $html;
	}
	public function buildHeader()
	{	
	}
	public function buildFooter()
	{	
	}
	public function buildLayout()
	{	
	}
	public function buildModal()
	{	
	}
	public function buildPagination()
	{	
	}
	public function buildMenuBar()
	{	
	}
	public function buildToolBar()
	{	
	}

}

