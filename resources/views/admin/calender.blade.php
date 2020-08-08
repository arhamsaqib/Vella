@extends('/admin/menulayout')
@section('title')
    VELLA CONSULTING INC.
@endsection

@section('link')
-> <a>Calender</a>
@endsection

@section('content-rest')
    <div class="container">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
        <div style="margin: 20px"></div>
        <div id="calendar" style="margin-bottom: 10px"></div>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
        <script>
            $(document).ready(function() {
                // page is now ready, initialize the calendar...
                $('#calendar').fullCalendar({
                    // put your options and callbacks here
                    events : [
                        @foreach($bookings as $b)
                        {
                            title : '{{$b->client_name}}',
                            start : '2020-09-17',
                        },
                        @endforeach
                    ] })
                });
        </script>
    </div>
@endsection
