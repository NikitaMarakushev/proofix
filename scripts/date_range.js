
function addZero(num) {
    const str = num.toString();
    return str.length === 1? "0" + str : str;
}

const region = $('#region');

region.on('change', function(e) {

    const date_arriving = $('#date_arriving');
        date_arriving.value = '';
    const region_value = region.value;
    const date_leaving = $('#date_leaving');
    date_leaving.value = '';

     $.ajax({
         type: 'POST',
         url: 'http://proofix/p_scripts/date_ranger.php',
         data: {city:region_value},
         success: function(data){
             const qwe = data;
             console.log(qwe);

             const date_leaving = $('#date_leaving');
             date_leaving.on('change', function(e){
                 let new_date = new Date(date_leaving.value);
                 new_date = new_date.setMilliseconds(qwe * 60 * 60 * 1000);
                    new_date = new Date(new_date);
                 const date =
                     new_date.getFullYear() + "-" +
                     addZero((new_date.getMonth() + 1)) + "-" +
                     addZero(new_date.getDate()) + ' ' +
                     addZero(new_date.getUTCHours()) + ':' +
                     addZero(new_date.getUTCMinutes());
                 date_arriving .value = date;
             });

         }
     });
})

