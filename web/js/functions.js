
	function processEntry(data, url )
	{
		//if(validateEntry(datas)) {
		//processAjaxLoadergModal
		//$("#processAjaxLoadergModal").show();
		$('#processAjaxLoadergModal').modal('show');
			$.ajax({
				type: "GET",
				data: data,
				url: url, 
				success: function(html) { 
					$('#ui-success-message-box').removeClass('ui-display-none');  
					$('#processAjaxLoadergModal').modal('hide').delay(500);
					location.reload(); 
					
				},
				error: function(html) {
					$('#ui-error-message-box').removeClass('ui-display-none');
					location.reload().delay(500);
				},
				async: false
				});
				
		return true;
	} 
	function processSelection ( data, divName, url )
	{ 
		divListName = 'ui-data-table-list-'+divName;
		totalValueDiv = 'data-list-total-value-'+divName;
		//alert(data); 
		$.ajax({
			type: "GET",
			data: data,
			url: url,
			success: function(html) {   
				$('#'+divListName).html(html)   
				}, 
			async: false
			}).responseText;

		return false;
	}
	function processDataSelection ( data, divName, url )
	{ 
		divListName = 'ui-modal-data-table-list-'+divName;
		totalValueDiv = 'modal-total-value-'+divName;
		//alert(data); 
		$.ajax({
			type: "GET",
			data: data,
			url: url,
			success: function(html) {   
				$('#'+divListName).html(html)   
				}, 
			async: false
			}).responseText;

		return false;
	}
	
	function generateValidData (formName)
	{
		var datas = '';
		var formObj = document.forms[formName];  
		
		for(var i=1; i < formObj.length; i++)	{
			switch(formObj.elements[i].type) {
				case 'hidden':
				case 'select-one':
				case 'text': 
				case 'file': 
				case 'password': 
				case 'textarea':
					if(datas == '' || datas == 'undefined') { 
						datas = formObj.elements[i].id+'='+formObj.elements[i].value;
					} else {
						datas += '&'+formObj.elements[i].id+'='+formObj.elements[i].value;
					}
				break;	 
				case 'checkbox': 
					var checked = formObj.elements[i].checked ? 1:0;
					if(datas == '' || datas == 'undefined') { 
						datas = formObj.elements[i].name+'='+checked;
					} else {
						datas += '&'+formObj.elements[i].id+'='+checked;
					}
				break;	
				case 'radio': 
					var input = formObj.elements[i].checked ? 1:0;
					if(datas == '' || datas == 'undefined') { 
						datas = formObj.elements[i].id+'='+input;
					} else {
						datas += '&'+formObj.elements[i].id+'='+input;
					}
				break; 
			} 
		}
		return datas; 
	}
	
	function makeBatchActionURLDataList ( dataListLength, docDivName, actionValueDocName )
	{
		var listIDArray = [];  
		var valueArray = [];  
		var tokenArray = [];  
		var j = 1;  
		
		for( i = 0; i < dataListLength; i++)
		{ 	
			listIDArray[i] = $('#'+docDivName+'_'+j).val(); 
			tokenArray[i] = $('#'+docDivName+'_'+j).attr('rel'); 
			valueArray[i] = $('#'+actionValueDocName+'_'+j).val(); 
			j++;
		}
		var datas = '&action_data_list_values='+listIDArray+'&action_data_list_token_values='+tokenArray+'&action_values='+valueArray; 
		
		return datas;
	}
	function makeBatchActionURLData ( dataListLength, docDivName )
	{
		var listIDArray = [];  
		var valueArray = [];  
		var tokenArray = [];  
		var j = 1;  
		
		for( i = 0; i < dataListLength; i++)
		{ 	
			listIDArray[i] = $('#'+docDivName+'_'+j).val(); 
			tokenArray[i] = $('#'+docDivName+'_'+j).attr('rel'); 
			j++;
		}
		var datas = '&action_data_list_values='+listIDArray+'&action_data_list_token_values='+tokenArray; 
		
		return datas;
	}
	
	function makeNavigation (navButton, divName, totalLimitValue )
	{
		var displayDiv =  $('#'+divName);
		var navLimitValue =  document.getElementById('pagination-limit').value;
		var navTotalLimitValue =  totalLimitValue;
		var offsetValue = document.getElementById('pagination-offset').value;
		var nextOffsetValue = (parseInt(offsetValue) + parseInt(navLimitValue));
		var minOffsetValue = (parseInt(offsetValue));
				
		switch(navButton) {
			case 'first': 
				if(offsetValue == '')	offsetValue = 0;  
				
				document.getElementById('pagination-offset').value = 0;	
				makeButtonDisabled ('prev', divName  );
				makeButtonEnabled ('next', divName  );
				makeButtonEnabled ('last', divName  );
				makeButtonDisabled ('first', divName  );
				
			break;
			case 'prev': 
				if(offsetValue == '')	offsetValue = 0; 
				
				document.getElementById('pagination-offset').value =  (parseInt(offsetValue)-parseInt(navLimitValue));	
				minOffsetValue = (parseInt(minOffsetValue)-parseInt(navLimitValue))
				if(offsetValue <= 0 || minOffsetValue <= 0 ) { 
					document.getElementById('pagination-offset').value = 0;	
					makeButtonDisabled ('prev', divName  ); 
					makeButtonDisabled ('first', divName  ); 
				}
				makeButtonEnabled ('next', divName  );
				makeButtonEnabled ('last', divName  );
				
			break;
			case 'next': 
				if(offsetValue == '')	offsetValue = 0; 
				
				document.getElementById('pagination-offset').value = (parseInt(offsetValue) + parseInt(navLimitValue));	
				nextOffsetValue = (parseInt(nextOffsetValue) + parseInt(navLimitValue));
				
				 makeButtonEnabled ('first', divName  );
				 makeButtonEnabled ('prev', divName  );
				if(offsetValue >= navTotalLimitValue || nextOffsetValue >= navTotalLimitValue ) {
					makeButtonDisabled ('next', divName  ); 
					makeButtonDisabled ('last', divName  ); 
				}
			break;
			case 'last': 
				if(offsetValue == '')	offsetValue = 0;  
					
				document.getElementById('pagination-offset').value = (parseInt(navTotalLimitValue)-parseInt(navLimitValue));	
				
				 makeButtonEnabled ('first', divName  );
				 makeButtonEnabled ('prev', divName  );
				 makeButtonDisabled ('next', divName  );
				 makeButtonDisabled ('last', divName  ); 
			break;
			case 'limit': 
				if(offsetValue == '')	offsetValue = 0;  
				
				nextOffsetValue = (parseInt(offsetValue) + parseInt(navLimitValue));
				
				if(nextOffsetValue >= navTotalLimitValue || navTotalLimitValue <= navLimitValue ) {
					makeButtonDisabled ('next', divName  ); 
					makeButtonDisabled ('last', divName  ); 
				} else {
					
					makeButtonEnabled ('next', divName  ); 
					makeButtonEnabled ('last', divName  ); 
				}
				
			break; 
			
			
		} 
		 
	}
	function makePageNavigation (serializedData, recordURL, navButton, divName, totalLimitValue )
	{
		
		makeNavigation (navButton, divName, totalLimitValue );
		var dataRecords = serializedData+'&offset='+document.getElementById('pagination-offset').value+'&limit='+document.getElementById('pagination-limit').value; 
		//alert(dataRecords);
		$('#'+divName).load(recordURL, dataRecords ); 
		checkNavigationStatus (divName, totalLimitValue );
		makeNavigationDisplayText (divName, totalLimitValue );
	}
	function makeButtonEnabled (navButton, divName  )
	{
			$("#ui-pagination-"+navButton+"-"+divName).removeAttr("disabled").removeClass("ui-disabled-pagination-button-btn");
			$("#ui-nav-enabled-"+navButton+"-img").removeClass("ui-display-none");
			$("#ui-nav-disabled-"+navButton+"-img").addClass("ui-display-none");
	}
	function makeButtonDisabled (navButton, divName  )
	{
			$("#ui-pagination-"+navButton+"-"+divName).attr("disabled", "disabled").addClass("ui-disabled-pagination-button-btn");
			$("#ui-nav-enabled-"+navButton+"-img").addClass("ui-display-none");
			$("#ui-nav-disabled-"+navButton+"-img").removeClass("ui-display-none");
	}
	function checkNavigationStatus (divName, totalLimitValue  )
	{
		var navLimitValue =  document.getElementById('pagination-limit').value;
		var totalLimit = document.getElementById('ui-total-data-list-'+divName).value;
		
		if(parseInt(totalLimit) < parseInt(navLimitValue) ) {
			makeButtonDisabled ('prev', divName  ); 
			makeButtonDisabled ('first', divName  ); 
			makeButtonDisabled ('next', divName  ); 
			makeButtonDisabled ('last', divName  ); 
		} 
	}
	function makeNavigationDisplayText (divName, totalLimitValue )
	{
		$('#ui-total-pages-'+divName).html('Page:&nbsp;&nbsp;'+makeNaviigationPageNumberText(divName, totalLimitValue));
		$('#ui-total-content-display-'+divName).html('Displaying:&nbsp;&nbsp;'+makeNaviigationPageDisplayText(divName, totalLimitValue));
	}
	function makeNaviigationPageNumberText( divName, totalLimitValue )
	{
		var offsetValue = document.getElementById('pagination-offset').value;
		var navLimitValue =  document.getElementById('pagination-limit').value;
		var totalLimitValue =  document.getElementById('ui-total-data-list-'+divName).value;
		var totalPages = Math.floor(parseInt(totalLimitValue)/parseInt(navLimitValue));
		var lastOffsetValue = parseInt(offsetValue) == 0 ? '1':offsetValue; 
		
		var offsetPlustLimit = parseInt(offsetValue) + parseInt(navLimitValue);	
		
		var pageNumber = offsetValue == 0 ? 1:Math.floor(parseInt(offsetPlustLimit)/parseInt(navLimitValue));
		var pages = parseInt(totalLimitValue)%parseInt(navLimitValue) == 0 ? totalPages:(parseInt(totalPages)+1);
		var navText = pageNumber+' of '+pages;
		
		return navText;
	}
	 
	function makeNaviigationPageDisplayText( divName, totalLimitValue )
	{
		var num=1;
		var offsetValue = document.getElementById('pagination-offset').value;
		var navLimitValue =  document.getElementById('pagination-limit').value;
		var totalLimitValues =  document.getElementById('ui-total-data-list-'+divName).value;
		var lastOffsetValue = parseInt(offsetValue) == 0 ? '1':offsetValue; 

		var offsetPlustLimit = parseInt(offsetValue) + parseInt(navLimitValue);	
		
		offsetValue = parseInt(offsetValue)+parseInt(num); 
		if(offsetPlustLimit >= totalLimitValue) {
			offsetValue = totalLimitValue;
			navLimitValue = totalLimitValue;
			offsetPlustLimit = totalLimitValue; 
		}  
		
		var navText = lastOffsetValue+' - '+offsetPlustLimit+' of '+totalLimitValue+'&nbsp;&nbsp;Records';
		
		return navText;
	}
	 
		
	 
