$('#guestbookEntry').submit(function() {
	$.ajax({
		type: 'POST',
		url: 'Guestbook.php',
		data: {
			action: 'submitGuestMessage',
			values: $('#guestbookEntry').serializeArray()
		},
		success: function (data) {
			if (data.indexOf('Success') > -1) {
				console.log('test');
				$('#guestConfirm').toggle();
				setTimeout(function(){
					location.reload();
				}, 2000);
			}
		}
	})

	return false;
});


$('#addNewGuest').submit(function() {
	$.ajax({
		type: 'POST',
		url: 'AdminRSVP.php',
		data: {
			action: 'submitNewGuest',
			values: $('#addNewGuest').serializeArray()
		},
		success: function (data) {
			if (data.indexOf('Success') > -1) {
				console.log('test');
				$('#submitNewGuest').toggle();
				setTimeout(function(){
					location.reload();
				}, 2000);
			}
		}
	})

	return false;
});

$('#guestConfirm').submit(function() {
	console.log('form submitted');
	$.ajax({
		type: 'POST',
		url: 'lookupRSVP.php',
		data: {
			action: 'guestConfirmPop',
			values: $('#guestConfirm').serializeArray()
		},
		success: function (data) {
			if (data.indexOf('Success') > -1) {
				console.log(data);
				$('#guestConfirmPop').toggle();
				setTimeout(function(){
					window.location = 'RSVP.php';
				}, 2000);
			}
		}
	})

	return false;
});

// Form validation code will come here.
function validate()
{
 
   if( document.Submit.txtFname.value == "" )
   {
     alert( "Please provide your name!" );
     document.Submit.txtFname.focus() ;
     return false;
   }
  
   return( true );
}


/* Was working on this myself */
$('#addNewGuest').submit(function() {
	console.log('input validated');
	$.ajax({
		type: 'POST',
		url: 'AdminRSVP.php',
		validated:{
			action: 'validate',
			values: $('#addNewGuest').serializeArray()
		},
		success: function(validated) {
			if (validated.indexOf('Validation') > -1) {
				console.log(validated);
				$('')
			}
		}
	});
});



/*
http://jqueryfordesigners.com/index.html%3Fp=6.html
$(document).ready(function () {
  var validateUsername = $('#validateUsername');
  $('#username').keyup(function () {
    var t = this; 
    if (this.value != this.lastValue) {
      if (this.timer) clearTimeout(this.timer);
      validateUsername.removeClass('error').html('<img src="images/ajax-loader.gif" height="16" width="16" /> checking availability...');
      
      this.timer = setTimeout(function () {
        $.ajax({
          url: 'ajax-validation.php',
          data: 'action=check_username&username=' + t.value,
          dataType: 'json',
          type: 'post',
          success: function (j) {
            validateUsername.html(j.msg);
          }
        });
      }, 200);
      
      this.lastValue = this.value;
    }
  });
});




http://www.tutorialspoint.com/javascript/javascript_form_validations.htm
<div>
    <label for="username">Username, valid: a-z.-_</label>
    <input type="text" name="username" value="<?=@$_REQUEST['username']?>" id="username" />
    <span id="validateUsername"><?php if ($error) { echo $error['msg']; } ?></span>
</div>

function check_username($username) {
  $username = trim($username); // strip any white space
  $response = array(); // our response
  
  // if the username is blank
  if (!$username) {
    $response = array(
      'ok' => false, 
      'msg' => "Please specify a username");
      
  // if the username does not match a-z or '.', '-', '_' then it's not valid
  } else if (!preg_match('/^[a-z0-9.-_]+$/', $username)) {
    $response = array(
      'ok' => false, 
      'msg' => "Your username can only contain alphanumerics and period, dash and underscore (.-_)");
      
  // this would live in an external library just to check if the username is taken
  } else if (username_taken($username)) {
    $response = array(
      'ok' => false, 
      'msg' => "The selected username is not available");
      
  // it's all good
  } else {
    $response = array(
      'ok' => true, 
      'msg' => "This username is free");
  }

  return $response;        
}
*/