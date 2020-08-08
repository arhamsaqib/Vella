@extends('/admin/settings')
@section('tabData')

    <form action="">
        <div class="container" style="margin-top: 20px;">
            <div>
                <input type="checkbox" id="15mins" name="15mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="15mins">Email Notification to Client on Booking Appointment</label>
            </div>
            <div>
                <input type="checkbox" id="30mins" name="30mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="30mins">Email Notification to Client on Appointment Cancellation</label>
            </div>
            <div>
                <input type="checkbox"  id="45mins" name="45mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="45mins">Email Notification to Client for Booking Reminder (2 Hours Before)</label>
            </div>
            <div>
                <input type="checkbox" id="60mins" name="60mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="60mins">Email Notification to Owner on Booking Appointment</label>
            </div>
            <div>
                <input type="checkbox" id="60mins" name="60mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="60mins">Email Notification to Owner on Appointment Cancellation</label>
            </div>
            <div>
                <input type="checkbox" id="60mins" name="60mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="60mins">Email Notification to Owner for Booking Reminder (2 Hours Before)</label>
            </div>
        </div>
         <div class="container" style="margin-top: 20px; margin-bottom: 20px">
            <button class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab" type="submit">Save</button>
        </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
@endsection
