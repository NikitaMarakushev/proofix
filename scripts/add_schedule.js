//Getting necessary input data to move it in schedule list
const write_region = $('#region');
const write_date_from_insert = $('#date_from');
const write_courier = $('#courier');
const write_date_to_insert = $('#date_to');
const send_schedule = $('#send_schedule');


$(send_schedule).click(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'http://proofix/p_scripts/add_schedule.php',
        data: {
            region: write_region.value, date_from: write_date_from_insert.value,
            courier: write_courier.value, date_to: write_date_to_insert.value
        },
        success: function (data) {
            const p_stat = $('status');
            p_stat.innerHTML = data;
        }
    });
})

$(window).on('click', function() {
    const p_stat = $('#status');
    p_stat.innerHTML = '-';
});