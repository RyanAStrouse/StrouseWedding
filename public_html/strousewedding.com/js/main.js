$('#guestbookEntry').submit(function() {
	console.log('run');
	console.log($('#guestbookEntry').serializeArray());
	$.ajax({
		type: 'POST',
		url: 'Guestbook.php',
		data: {
			action: 'submitGuestMessage',
			values: $('#guestbookEntry').serializeArray()
		},
		success: function (data) {
			console.log(data);
			if (data == 'Success') {
				$('#guestConfirm').toggle();
			}
		}
	})

	return false;
});