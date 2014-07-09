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
	$.ajax({
		type: 'POST',
		url: 'RSVP.php',
		data: {
			action: 'guestConfirmPop',
			values: $('#guestConfirm').serializeArray()
		},
		success: function (data) {
			if (data.indexOf('Success') > -1) {
				console.log('test');
				$('#guestConfirmPop').toggle();
				setTimeout(function(){
					location.reload();
				}, 2000);
			}
		}
	})

	return false;
});