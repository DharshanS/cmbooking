/**
 * Created by dharshan on 5/31/18.
 */
$(document).ready(function(){



  var  airports=new Array();

    $( "#origin" ).autocomplete({

        source: function( request, response ) {
            $.ajax( {
                url: "api/findAirports",
                dataType: "json",
                data: {
                    query: request.data
                },
                success: function( data ) {
                    //console.log(data);
                    airports=null;
                    data.forEach(function (index) {
                        console.log(index)
                       var airport={
                           label: index.airport_name,
                           value: index.iata_code,
                           category: ""
                       }
                      airports=airport;

                    })

                    response(airports) ;


                }
            } );
        },
        minLength: 1,
        select: function( event, ui ) {
            log( "Selected: " + ui.item.value + " aka " + ui.item.id );
        }
       // source: availableTags
    });

    $( "#destination" ).autocomplete({
       // source: availableTags
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