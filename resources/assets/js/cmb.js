/**
 * Created by dharshan on 5/31/18.
 */
$(document).ready(function(){
    var availableTags = [

        "Colombo - Bandaranayike International Airport(CMB) - Sri Lanka ",



    ];
    $( "#origin" ).autocomplete({
        source: availableTags
    });

    $( "#destination" ).autocomplete({
        source: availableTags
    });


    // $('#depart-date').datepicker().on('change',function (eve) {
    //     alert(eve);
    //
    // })
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#depart-date').datepicker({
        onRender: function(date) {

            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('change', function(ev) {
        if (ev.date > checkout.date) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);

        }

       // checkin.hide();
        setTimeout(function() {
            $('#arrival-date')[0].focus();
        },300);
    }).data('datepicker');


    var checkout = $('#arrival-date').datepicker({
        onRender: function(date) {
            return date <= checkin.date ? 'disabled' : '';
        }
    }).on('change', function(ev) {
       // checkout.hide();
    }).data('datepicker');

});