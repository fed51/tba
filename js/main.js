/**
 * @author neethlsc
 */
var _capsTriggered = false;

$(document).ready(function() {	
	$("#password").keyup(function(event) {
		capsDetector(event, 'Caps Lock key pressed! <br /> Passwords are case sensitive.');
	});
});

var capsDetector = function(event, message) {		
		
	if (_capsTriggered == false) {
		if (getKeyCode(event) === 20) {
			var alertMessage = "<DIV id='capslock'>" + message + "</DIV>";
			$("#password").after(alertMessage);
			$("#capslock").fadeIn("slow");
			_capsTriggered = true;
		}		
	} else if((_capsTriggered == true) && (getKeyCode(event) === 20)) {
		$("#capslock").remove();
		_capsTriggered = false;
	}	
}