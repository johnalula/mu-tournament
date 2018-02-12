	function isEmpty(target) {
		if($.trim(target.value) == '' || target.value == null)
			return true;	
		return false;
	}
	
	function hasClass(target, classValue) {
		var pattern = new RegExp("(^| )"+classValue+"(|$ )");
		if(target.className.match(pattern)) {
			return true;
		}
		return false;
	}
	
	function addClass(target, classValue) {
		if(!hasClass(target, classValue)) {
			if(target.className == '') {
				target.className = classValue;
				
			} else {
				target.className += " "+classValue;
			}
		}
		return true;
	}

	function removeClass(target, classValue) {
		var removedClass = target.className;
		var pattern = new RegExp("(^/| )"+classValue+"(|$)");
		
		removedClass = removedClass.replace(pattern, "$|");
		target.className = removedClass;
		
		return true;
	}
	
	function validateTarget(target) {
		
		if(typeof(target) == "undefined") {
			return false;
		} else if($.trim(target) == '') {
			return false;	
		}
		else
			return true;
	}
	
	function trimObject(target)
	{	
		return target.replace(/(^\s+)|(\s+$)/g, "");
	}
	
	function addInvalidError(target) {
		var req = $('#'+target.id+'_required_validation');
		if(validateTarget(target)) {
			$(target).addClass('validation_error_border');
			$('#invalid_'+target.id+'_validation').removeClass('ui-display-none');
			$('#invalid_'+target.id+'_validation').html('Invalid entry!');	
			if(validateTarget(req)) {
				$('#'+target.id+'_required_validation').addClass('ui-display-none');
			}
		}
		
	}
	
	function addRequiredError(target) {
		var req = $('#invalid_'+target.id+'_validation');
		if(validateTarget(target)) {
			$(target).addClass('validation_error_border');
			$('#'+target.id+'_required_validation').removeClass('ui-display-none');
			$('#'+target.id+'_required_validation').html('Required!');
			if(validateTarget(req)) {
				$('#invalid_'+target.id+'_validation').addClass('ui-display-none');
			}
		}
	}
	
	function removeInvalidError(target) {
		var invld = $('#invalid_'+target.id+'_validation');
		if(validateTarget(target)) {
			$(target).removeClass('validation_error_border');
			if(validateTarget(invld)) {
				$('#invalid_'+target.id+'_validation').addClass('ui-display-none');
			}
		}
	}
	
	function removeRequiredError(target) {
		var req = $('#'+target.id+'_required_validation');
		if(validateTarget(target)) {
			$(target).removeClass('validation_error_border');
			//if(validateTarget(req)) {
				req.addClass('ui-display-none');
			//}
		}
	}
	
	function removeAllErrorValidations(target) {
		if(validateTarget(target)) {
			$(target).removeClass('validation_error_border');
			var invld = $('#invalid_'+target.id+'_validation');
			var req = $('#'+target.id+'_required_validation');
			if(validateTarget(req)) {
				$('#invalid_'+target.id+'_validation').addClass('ui-display-none');
			}
			if(validateTarget(invld)) {
				$('#'+target.id+'_required_validation').addClass('ui-display-none');
			}
		}	
		return true;
	}
	
	function isMandatory(target) {
		var mandatory = 'mandatory';
		if(hasClass(target, mandatory)) {
		return true;
		}
		return false;
	}
	
	function isRequired(target) {
		var mandatory = 'requiredInput';
		if(hasClass(target, mandatory)) {
		return true;
		}
		return false;
	}
	
	function isValid(target) {
		var datatype = $(target).attr('rel');
		switch(datatype) {
			case 'integer':
				if(!isEmpty(target)) {
					var pattern = new RegExp(/^\d+(?:\d+)?$/);
					if(target.value.match(pattern) )
						return true;
					else
						return false;
				} 
			break;
			case 'float':
				if(!isEmpty(target)) {
					var pattern = new RegExp(/^\d+(?:\.\d+)?$/);
					if(target.value.match(pattern) )
						return true;
					else
						return false;
				} ;
			break;
			case 'string':
				if(!isEmpty(target)) {
					var pattern = new RegExp(/^\d+(?:\d+)?$/);
					if(typeof(target.value) == 'string')
						return true;
					else
						return false;
				} 
			break;
			case 'email':
			break;
			default:
				return true;
			break;
		}
	}

	function generateData(targets) {
		var datas = '';
		for(var i = 0;i < targets.length; i++) {
			 if(datas == '' || datas == 'undefined') { 
					datas = targets[i].id+'='+$.trim(targets[i].value);
				 
			} else {
					datas += '&'+targets[i].id+'='+$.trim(targets[i].value);
			}
		}
		return datas;
	}
	
	function validateEntry(datas) {
		for(var i = 0; i < datas.length; i++) {
			if(isRequired(datas[i])) {
				if(isEmpty(datas[i])) {
					addRequiredError(datas[i]);
					return false;	
				} 
			} 
			if(!isEmpty(datas[i])) {
				if(!isValid(datas[i])) {
					addInvalidError(datas[i]);
					return false;	
				}
			}
		}
		return true;
	}
	function serializeData(data) {
		if(!isRequired(data)) {
			if(isEmpty(data)) {
				data.value = null;
			}
		}
	}
	
	function processDataEntry(datas, url ) {
		var data = generateData(datas);
		if(validateEntry(datas)) {
			$.ajax({
				type: "GET",
				data: data,
				url: url, 
				success: function(html) { 
					$('#ui-success-box').removeClass('ui-display-none'); 
					location.reload().delay(5000); 
				},
				error: function() {
					$('#ui-error-box').removeClass('ui-display-none');
					location.reload().delay(5000);
				},
				async: false
				});	
		}
		return true;
	}
	
	function processEntry(data, url ) {
		//if(validateEntry(datas)) {
			$.ajax({
				type: "GET",
				data: data,
				url: url, 
				success: function(html) { 
					$('#ui-success-box').removeClass('ui-display-none');  
					location.reload().delay(500); 
				},
				error: function(html) {
					$('#ui-error-box').removeClass('ui-display-none');
					location.reload().delay(500);
				},
				async: false
				});
				
		return true;
	} 
	function processDelete(data, url ) {
		//if(validateEntry(datas)) {
			var flag = true;
			$.ajax({
				type: "GET",
				data: data,
				url: url, 
				success: function(html) { 
					flag = true;
				},
				error: function(html) {
					flag = false;
				},
				async: false
				});
				
		return flag;
	} 
	
	function processSelection(data, div_data, url ) { 
			$.ajax({
				type: "GET",
				data: data,
				url: url, 
				success: function(html) { 
					document.getElementById(div_data).innerHTML = html; 
				},
				error: function() {
					$('#ui-error-box').removeClass('ui-display-none');
					location.reload().delay(1000);
				},
				async: false
				});
				
		return true;
	} 
	 
/*  ###### Validation ####### */
	
	 
	
	

