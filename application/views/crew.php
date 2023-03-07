<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crew</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/ionicons.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/fullcalendar.print.min.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap3/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/DataTables/datatables.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/calendar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/DataTables/DateTime-1.3.1/css/dataTables.dateTime.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/DataTables/Buttons-2.3.5/css/buttons.bootstrap.css">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">


</head>

<body class="crew">

    <!--------------------------- detail of members -------------------------->
    <section class="user-filter-data">
        <div class="crew-container">
            <!-- <div class="minor-detail">
                <span style="color: #000;"><input id="search" type="text" placeholder="Search"></span>
            </div> -->

            <table id="myTable">
                <thead>
                    <tr>
                        <td class="row-id">date</td>
                        <td>block</td>
                        <td>name</td>
                        <td>city</td>
                        <td class="id">id</td>
                        <td>position</td>
                    </tr>
                </thead>

                <tbody id="mytable_filter">
                    <?php foreach ($filter as $filterItem) : ?>

                        <tr>
                            <td class="row-id">
                                <?php echo $filterItem->date; ?>
                            </td>
                            <td>
                                <?php echo $filterItem->block; ?>
                            </td>
                            <td>
                                <?php echo $filterItem->name; ?>
                            </td>
                            <td>
                                <?php echo $filterItem->base; ?>
                            </td>
                            <td class="id">
                                <?php echo $filterItem->id; ?>
                            </td>
                            <td>
                                <?php echo $filterItem->position; ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </section>

    <!--------------------------- Calender -------------------------->
    <section class="calender-container">
        <div class="wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h4 class="box-title">Draggable Events</h4>
                            </div>
                            <div class="box-body">
                                <!-- the events -->
                                <div id="external-events">
                                    <div class="external-event bg-green">Lunch</div>
                                    <div class="external-event bg-yellow">Go home</div>
                                    <div class="external-event bg-aqua">Do homework</div>
                                    <div class="external-event bg-light-blue">Flight timing</div>
                                    <div class="external-event bg-red">Sleep tight</div>
                                    <div class="checkbox">
                                        <label for="drop-remove">
                                            <input type="checkbox" id="drop-remove">
                                            remove after drop
                                        </label>
                                    </div>
                                    <div id="fcTrash">
                                        <button>remove event</button>
                                    </div>

                                </div>
                            </div>

                            <!-- /.box-body -->
                        </div>
                        <!-- /. box -->
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Create Event</h3>
                            </div>
                            <div class="box-body">
                                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                    <ul class="fc-color-picker" id="color-chooser">
                                        <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                                        <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="input-group">
                                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                                    <div class="input-group-btn">
                                        <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                                    </div>
                                    <!-- /btn-group -->
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-body no-padding">
                                <!-- THE CALENDAR -->
                                <div id="calendar"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /. box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </section>

    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/demo.js"></script>
    <!-- fullCalendar -->
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/moment.js"></script>
    <script src="<?php echo base_url() ?>/assets/bootstrap3/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/DataTables/datatables.js"></script>
    <script src="<?php echo base_url() ?>/assets/DataTables/DateTime-1.3.1/js/dataTables.dateTime.js"></script>
    <script src="<?php echo base_url() ?>/assets/DataTables/Buttons-2.3.5/js/buttons.bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function init_events(ele) {
                ele.each(function() {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            init_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    month: 'month',
                    week: 'week',
                    day: 'day'
                },
                //Random default events
                events: function(start, end, timezone, callback) {
                    // Retrieve the data from the table rows
                    var eventData = [];
                    $('#myTable tbody tr').each(function() {
                        var rowData = $(this).children('td').map(function() {
                            return $(this).text();
                        }).get();

                        // Format the row data into FullCalendar event format
                        var event = {
                            title: rowData[2],
                            start: rowData[0],
                            end: rowData[0],
                            base: rowData[3]
                            // You can add more properties as needed
                        };
                        eventData.push(event);
                    });

                    callback(eventData)
                },



                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!

                drop: function(date, allDay) { // this function is called when something is dropped


                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject')

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject)

                    // assign it the date that was reported
                    copiedEventObject.start = date
                    copiedEventObject.allDay = allDay
                    copiedEventObject.backgroundColor = $(this).css('background-color')
                    copiedEventObject.borderColor = $(this).css('border-color')

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)


                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove()
                    }

                }

            })


            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                //Save color
                currColor = $(this).css('color')
                //Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                //Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                //Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.html(val)
                $('#external-events').prepend(event)

                //Add draggable funtionality
                init_events(event)

                //Remove event from text input
                $('#new-event').val('')
            })
        })
    </script>
    <script>
        //it will add the row as event if click on it 
        $(document).ready(function() {
            $('#myTable tbody tr').click(function() {
                var rowData = $(this).children('td').map(function() {
                    return $(this).text();
                }).get();
                var eventData = {
                    title: rowData[2],
                    start: rowData[0], // assuming Date is in format '2023-03-03 10:00:00'
                    end: rowData[0], // you can set end time based on your need

                };
                $('#calendar').fullCalendar('renderEvent', eventData);
                console.log(eventData); // You can do whatever you want with this JSON data
            });
        });
    </script>

    <script>
        //for displaying info when hover over events
        $('#calendar').on('mouseenter', '.fc-event', function() {
            var title = $(this).find('.fc-title').text(); // Get the event title
            var rowData = $('#myTable tbody tr:contains(' + title + ')').children('td').map(function() {
                return $(this).text();
            }).get(); // Find the corresponding table row data using the event title

            // Create the tooltip
            var tooltip = $('<div class="event-tooltip"><span>Title: ' + rowData[2] + '</span><span>Base: ' + rowData[3] + '</span><span>Start: ' + rowData[0] + '</span></div>');
            $('body').append(tooltip);
        });

        $('#calendar').on('mouseleave', '.fc-event', function() {
            $('.event-tooltip').remove(); // Remove the tooltip when the mouse leaves the event
        });
    </script>

    <!---------------------------- search and pagination -------------------------------->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>