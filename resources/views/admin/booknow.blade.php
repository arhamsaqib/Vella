@extends('/admin/menulayout')
@section('title')
    VELLA CONSULTING INC.
@endsection

@section('link')
    -> <a>Appointments</a>
    -> <a>Book Appointment</a>
@endsection

@section('content-rest')
    <form action="{{route('bookappointment')}}" method="POST">
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Client</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <select name="client" id="client" class="form-control">
                    {{$users = DB::table('user_info')->select('user_id','firstname','lastname')->get()}}
                    @foreach ($users as $user)
                        <option value="{{ $user->user_id }}"{{ $user == old('user') ? ' selected' : '' }}><h6>{{$user->firstname}} {{ $user->lastname }}</h6></option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <div>
                <p style="font-size: 13px; margin-bottom: 3px">Booking Date and Time</p>
              <input class="date form-control" type="text" id="datepicker" name="date">
           </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Duration</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <select name="duration" id="duration" class="form-control">
                    {{$dur = DB::table('durations')->select('duration','status')->get()}}
                    @foreach ($dur as $user)
                        @if ($user->status === 'on')
                        <option value="{{ $user->duration }}"{{ $user == old('user') ? ' selected' : '' }}><h6>{{$user->duration}}</h6></option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <div class="form-group form-check" style="display: flex;">
                <input style="height: 10px" type="checkbox" onchange="change()" class="form-check-input" id="recurring">
                <label style="font-size: 12px; margin-top:2px" class="form-check-label" for="recurring">Recurring</label>
            </div>
        </div>
        <div style="display: flex">
            <div class="container" style="margin-top: 20px">
                <p style="font-size: 13px; margin-bottom: 3px">Reccur Frequency</p>
                <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                    <select name="frequency" id="frequency" class="form-control">
                        <option value="Daily"><h6>Daily</h6></option>
                        <option value="Weekly"><h6>Weekly</h6></option>
                        <option value="Monthly"><h6>Monthly</h6></option>
                    </select>
                </div>
            </div>
            <div class="container" style="margin-top: 20px">
                <div>
                    <p style="font-size: 13px; margin-bottom: 3px">Reccur Until</p>
                <input class="date form-control" type="text" id="reccur_until" name="reccur_until">
            </div>
            </div>
        </div>
        <div class="container" style="margin-top: 20px; margin-bottom: 20px">
            <button class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab" type="submit">Book Appointment</button>
        </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
    <script type="text/javascript">
        document.getElementById("frequency").disabled = true;
        document.getElementById("reccur_until").disabled = true;
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
        $('#reccur_until').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
         function change()
         {
            if( !document.getElementById("recurring").checked)
            {
                document.getElementById("frequency").disabled = true;
                document.getElementById("reccur_until").disabled = true;
            }
            else{
                document.getElementById("frequency").disabled = false;
                document.getElementById("reccur_until").disabled = false;
            }
         }
    </script>
@endsection
