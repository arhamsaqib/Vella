@extends('/admin/settings')
@section('tabData')

    <form action="{{route('bookingsettings')}}" method="POST">
        <div class="container" style="margin-top: 20px;">
            <p style="font-size: 12px; margin-bottom: -4px">Available Time Slots</p>
            <div>
                <input type="checkbox" id="15mins" name="15mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="15mins">15 Minutes</label>
            </div>
            <div>
                <input type="checkbox" id="30mins" name="30mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="30mins">30 Minutes</label>
            </div>
            <div>
                <input type="checkbox"  id="45mins" name="45mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="45mins">45 Minutes</label>
            </div>
            <div>
                <input type="checkbox" id="60mins" name="60mins" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="60mins">60 Minutes</label>
            </div>
        </div>
        <div class="container" style="margin-top: 20px;flex-direction: row">
            <p style="font-size: 12px; margin-bottom: -4px">Working Days</p>
            <div style="display: flex">
                <div style="margin-right: 5px;">
                    <input type="checkbox" id="monday" name="monday" style="height: 10px">
                <label style="font-size: 12px" class="form-check-label" for="monday">Monday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox" id="tuesday"  name="tuesday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="tuesday">Tuesday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox"  id="wednesday" name="wednesday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="wednesday">Wednesday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox" id="thursday" name="thursday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="thursday">Thursday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox" id="friday" name="friday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="friday">Friday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox" id="saturday" name="saturday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="saturday">Saturday</label>
                </div>
                <div style="margin-right: 5px">
                    <input type="checkbox" id="sunday" name="sunday" style="height: 10px">
                    <label style="font-size: 12px" class="form-check-label" for="sunday">Sunday</label>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 20px;">
            <p style="font-size: 13px; margin-bottom: 3px">Working Hours</p>
            <div class="container" style="display: flex;">
                <div style="display: flex; width: 300px; align-items: center;">
                <p style="font-size: 12px;">Starting time</p>
                    <div class="card" style="font-size: 12px; border-bottom-width: 2px; width: 200px;">
                        <select name="start-time" id="start-time" class="form-control">
                            @foreach ($collection as $item)
                                <option>{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div style="display: flex; width: 300px; align-items:center ">
                    <p style="font-size: 12px;"> Ending time</p>
                    <div class="card" style="font-size: 12px; border-bottom-width: 2px; width: 200px;">
                        <select name="end-time" id="end-time" class="form-control">
                            @foreach ($collection as $item)
                                <option>{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 20px; margin-bottom: 20px">
            <button class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab" type="submit">Save</button>
        </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
    <script>

        if($weekdays['monday'] === "on")
        {
            document.getElementById("monday").checked = true;

        }
    </script>
@endsection
