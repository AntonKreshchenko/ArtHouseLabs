$(document).ready(function() {
	$('#form').submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
            alert('Message sent successfully');
            $(this).find('input').val('');
            $(this).find('textarea').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});