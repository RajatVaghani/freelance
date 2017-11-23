<html><!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` --><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Agendando - Clients</title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="css/bootstrap-material-design.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fullcalendar.css">


    <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>



</head>
<body style="">


    <?php

        include 'include/nav2.php';

    ?>









    <div class="container-fluid" style="padding:0px;">





        <section class="section">
            <div class="row" style="padding:10px 50px;">

                <div class="col-md-12">


                    <div class="col-md-2">
                        <div class="panel panel-info">
                          <div class="panel-heading">Appointments</div>
                          <div class="panel-body">
                              <p class="perfpara"><a href="clients.php">Client List</a></p>
                              <p class="perfpara"><a href="import.php">Import/Export</a></p>
                          </div>

                        </div>
                    </div>

                    <div class="col-md-10">

                        <ul class="breadcrumb">
                          <li>Dashboard</li>
                          <li class="active">Clients</li>
                        </ul>


                        <div id='wrap'>

                            <div class="panel panel-default">
                                <div class="panel-heading c-list">
                                    <span class="title">Clients</span>
                                    <ul class="pull-right c-controls">
                                        <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-ellipsis-v"></i></a></li>
                                    </ul>
                                </div>


                                <div class="panel-body">
                                    <div class="col-md-12" style="padding-bottom:30px;border-bottom:1px solid #ddd;">
                                        <div class="col-md-4">

                                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="" class="img-responsive circle" style="border-radius:50%;margin-top:11px">

                                        </div>

                                        <div class="col-md-6">

                                            <h4 class="page-header">John Doe</h2>
                                            <p>johndoe@gmail.com</h4>
                                            <p>New York, USA</h4>

                                        </div>
                                    </div>

                                        <div class="col-md-12" style="padding-bottom:30px;border-bottom:1px solid #ddd;">
                                            <div class="col-md-4">

                                                <img src="http://api.randomuser.me/portraits/men/29.jpg" alt="" class="img-responsive circle" style="border-radius:50%;margin-top:11px">

                                            </div>

                                            <div class="col-md-6">

                                                <h4 class="page-header">John Doe 2</h2>
                                                <p>johndoe2@gmail.com</h4>
                                                <p>New York, USA</h4>

                                            </div>
                                        </div>

                                            <div class="col-md-12" style="padding-bottom:30px;">
                                                <div class="col-md-4">

                                                    <img src="http://api.randomuser.me/portraits/women/22.jpg" alt="" class="img-responsive circle" style="border-radius:50%;margin-top:11px">

                                                </div>

                                                <div class="col-md-6">

                                                    <h4 class="page-header">John Doe 3</h2>
                                                    <p>johndoe3@gmail.com</h4>
                                                    <p>New York, USA</h4>

                                                </div>
                                            </div>
                                </div>


                                <div class="row" style="display: none;">
                                    <div class="col-xs-12">
                                        <div class="input-group c-search">
                                            <input type="text" class="form-control" id="contact-list-search">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>



                            </div>


                            <div style='clear:both'></div>

                        </div>

                    </div>



                </div>

            </div>

        </section>





    </div>








    <div class="modal" id="appointmentModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title" style="text-align:center">NEW APPOINTMENT</h4>
          </div>
          <div class="modal-body">
            <hr>


            <form class="form" action="" method="post" style="padding:10px 20px;">
                <div class="form-group">
                  <label class="control-label" for="inputDefault">Time</label>
                  <input type="time" class="form-control" id="inputDefault">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputDefault">Telephone</label>
                  <input type="phone" class="form-control" id="inputDefault">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputDefault">Email</label>
                  <input type="email" class="form-control" id="inputDefault">
                </div>
                <div class="form-group" style="margin-top:0px;">
                  <label class="control-label" for="inputDefault">Name</label>
                  <input type="name" class="form-control" id="inputDefault">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-lg btn-block btn-raised" name="button">Create Appointment</button>
                </div>
            </form>


          </div>

        </div>
      </div>
    </div>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

<script>
$(function () {
    $.material.init();

    $('[data-command="toggle-search"]').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('hide-search');

        if ($(this).hasClass('hide-search')) {
            $('.c-search').closest('.row').slideUp(100);
        }else{
            $('.c-search').closest('.row').slideDown(100);
        }
    })

    $('#contact-list').searchable({
        searchField: '#contact-list-search',
        selector: 'li',
        childSelector: '.col-xs-12',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
</script>

<script>




	$(document).ready(function() {


        $(".sample").hide();



	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		/*  className colors

		className: default(transparent), important(red), chill(pink), success(green), info(blue)

		*/


		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events div.external-event').each(function() {

			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};

			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});


		/* initialize the calendar
		-----------------------------------------------------------------*/

		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',

			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped

				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');

				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);

				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;

				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}

			},

			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/',
					className: 'success'
				}
			],
    eventClick: function(calEvent, jsEvent, view) {
    //    alert('Event: ' + calEvent.title);
        $(".sample").show();
        $(".event-title").text(calEvent.title);
        $(".event-date").text(calEvent.start);
        // change the border color just for fun
        $(this).css('border-color', 'red');
    },
		});


	});

</script>

<div id="snackbar-container"></div>
</body>
</html>
