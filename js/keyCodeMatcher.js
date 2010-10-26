/**
 * @author ossreleasefeed
 */

var detectKeyMask = function(event) {
	var _result = {
		is_mask:"false",
		key_value:""
	}
	
	if(event.shiftKey) {
		_result['is_mask'] = 'true';
		_result['key_value'] = 'shift';
	} else if(event.ctrlKey || event.metaKey) {
		_result['is_mask'] = 'true';
		_result['key_value'] = 'ctrl';
	} else if(event.altKey) {
		_result['is_mask'] = 'true';
		_result['key_value'] = 'alt';
	} else {
		_result['is_mask'] = 'false';
	}	
	return _result;
}

var getKeyCode = function(event) {
	_keyCode = "";
	
	if(event.keyCode != undefined) {
		_keyCode = event.keyCode;
	} else if(event.charCode != undefined) {
		_keyCode = event.charCode;
	}
	
	return _keyCode;
}

var getKey = function(event) {
	_keyCode = "";
	
	if(event.keyCode != undefined) {
		_keyCode = event.keyCode;
	} else if(event.charCode != undefined) {
		_keyCode = event.charCode;
	}
	return String.fromCharCode(_keyCode);
}

jQuery.event.special.alt = {
	setup: function(data, namespaces) {
		var elem = this, $elem = jQuery(elem);
		$elem.bind('keyup', jQuery.event.special.alt.handler);
	},
	
	teardown: function(namespaces) {
		var elem = this, $elem = jQuery(elem);
        $elem.unbind('keyup', jQuery.event.special.alt.handler);
	},
	
	handler: function(event) {
		if(event.altKey) {
			event.type = "alt";
			jQuery.event.handle.apply(this, arguments);
		}
	}
}