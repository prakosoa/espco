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
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="modal-time">

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

        $('#calendar').fullCalendar({
            selectable: true,
            editable: false,
            defaultDate: moment().format(),
            defaultView: 'agendaWeek',
            slotMinutes: 60,
            dayRender: function(date, cell) {
                console.log(date.format());
            },
            select: function(start, end) {
                if(start.isBefore(moment())) {
                    $('#calendar').fullCalendar('unselect');
                    return false;
                }
                $("#myModal").modal();
                $(".modal-time").html(start.format());
            },
            events: [],
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
            console.log(timeValue);
            console.log(momentObj.format());
            $('#calendar').fullCalendar('renderEvent', newEvent);
            $("#myModal").modal('hide');
        });

    });

</script>