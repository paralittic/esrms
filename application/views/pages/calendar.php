<h2 style="text-transform: uppercase;">Calendar</h2>
<hr />
<div id='calendar'></div>
<script>
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'

            },
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: false, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-05-01',
                    url: '<?php echo base_url(); ?>issues/1'
                },
                {
                    title: 'Long Event',
                    start: '2017-05-07',
                    end: '2017-05-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-06-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-06-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2017-06-11',
                    end: '2017-06-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-06-12T10:30:00',
                    end: '2017-06-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2017-06-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2017-06-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2017-06-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2017-06-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2017-06-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2017-05-28'
                }
            ]
        });

    });
</script>