var myValidator = {}
	myValidator.generateData = function(formName) {
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
					if(datas == '' || datas == 'undefined' ) { 
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
