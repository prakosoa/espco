<div class="row">
    <div class="col-md-12">
        <div id="calendar"></div>
    </div>
</div>

<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            selectable: true,
            defaultDate: '2014-06-12',
            defaultView: 'agendaWeek',
            slotMinutes: 60,
            dayClick: function(date, jsEvent, view) {
                console.log(date.format());
            },
            editable: true,
            events: [
                {
                    title: 'All Day Event',
                    start: '2014-06-01'
                },
                {
                    title: 'Long Event',
                    start: '2014-06-07',
                    end: '2014-06-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-06-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2014-06-16T16:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2014-06-12T10:30:00',
                    end: '2014-06-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2014-06-12T12:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2014-06-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2014-06-28'
                }
            ]
        });

    });

</script>