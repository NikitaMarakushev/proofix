const date_beginning = $('#date_beginning');
const date_finishig = $('#date_finishig');
const submit_show = $('#submit_show');
const result = $('#result');

$(submit_show).bind('click', function(e) {
			e.preventDefault();
42233575
			$.ajax({
				type: 'POST',
				url: 'http://proofix/p_scripts/get_schedule.php',
				data: {date_beginning:date_beginning.value, date_finishig: date_finishig.value},
				success: function(data) {
					result.innerHTML = data + "\n";
				}
			});
		})