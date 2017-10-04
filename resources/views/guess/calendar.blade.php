<div class="row">
    <div class="col-md-12">
        <div id="calendar"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hire</h4>
            </div>
            <div class="modal-body">
            <b>*Time in UTC+7
                <div class="modal-time"> 
                </b>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="add-hire-time" type="button" class="btn btn-default">Hire</button>
            </div>
        </div>

    </div>
</div>
<script>

    $(document).ready(function() {
        var listTimes = [];
        var listEvent = [];
        @foreach($schedules as $schedule)
            var startTime = moment('{{$schedule->datetime}}');
            var endTime = moment('{{\Carbon\Carbon::parse($schedule->datetime)->addHour()}}');
            var event = {
                id:'{{$schedule->id}}',
                start: startTime.format(),
                end: endTime.format()
            } ;
            listEvent.push(event);
        @endforeach
                console.log(listEvent);

        $('#calendar').fullCalendar({
            selectable: true,
            editable: false,
            defaultDate: moment().format(),
            defaultView: 'agendaWeek',
            slotMinutes: 60,
            select: function(start, end) {
                if(start.isBefore(moment())) {
                    $('#calendar').fullCalendar('unselect');
                    return false;
                }
                $("#myModal").modal();
                $(".modal-time").html(start.format());
            },
            events: listEvent,
            eventOverlap: false
        });

        $("#add-hire-time").click(function(){
            var timeValue = $(".modal-time").html();
            listTimes.push(timeValue);
            var newEvent = new Object();
            newEvent.title = "abc";
            var dateObj = new Date(timeValue);
            var momentObj = moment(dateObj);
            newEvent.start = momentObj.format();
            newEvent.end = momentObj.add(1,'hours').format();
            newEvent.allDay = false;
            $('#calendar').fullCalendar('renderEvent', newEvent);
            $("#myModal").modal('hide');
            $('#ordered-schedule').val(listTimes);
        });

    });

</script>