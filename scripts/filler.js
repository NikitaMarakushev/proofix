const pull = $('#pull');
const number_fields = $('#number_fields');
const numfil = number_fields.value;

$(pull).bind('click', function(e) {
	const pull = $('#pull');
	const number_fields = $('#number_fields');
	const numfil = number_fields.value;
	e.preventDefault();

	$.ajax({
		type: 'POST',
		url: 'http://proofix/p_scripts/filler.php',
		data: {'numfil':numfil, },
		success: function(data) {
			alert(data);
		}
	})
});