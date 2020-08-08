@extends('/admin/menulayout')
@section('title')
    VELLA CONSULTING INC.
@endsection

@section('link')
    -> <a>Create</a>
@endsection
@section('content-rest')

    <form action="{{route('createnew')}}" method="POST">
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">First Name</p>
            <input style="font-size: 12px; border-bottom-width: 2px" type="text" placeholder="First Name" name="fname" class="form-control" id="fname">
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Last Name</p>
            <input style="font-size: 12px; border-bottom-width: 2px" onchange="passval()" type="text" placeholder="Last Name" name="lname" class="form-control" id="lname">
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Client Password</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <input style="height: 30px; justify-content: center" type="text" readonly="readonly" id="pass" name="pass">
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Email</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <input style="font-size: 12px" type="text" placeholder="someone@example.com" name="email" class="form-control" id="email">
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Timezone</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <select name="timezone" id="timezone" class="form-control">
                    @foreach (timezone_identifiers_list() as $timezone)
                        <option value="{{ $timezone }}"{{ $timezone == old('timezone') ? ' selected' : '' }}>{{ $timezone }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="container" style="margin-top: 20px;">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="recurring" name="recurring">
                <label style="font-size: 12px" class="form-check-label" for="recurring">Can Book Recurring Appointments</label>
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">City</p>
            <input style="font-size: 12px; border-bottom-width: 2px" type="text" name="city" class="form-control" id="city">
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Phone</p>
            <input style="font-size: 12px; border-bottom-width: 2px" type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="container" style="margin-top: 20px; margin-bottom: 20px">
            <button class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab" type="submit">Add</button>
        </div>
          <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
    <script>
        function passval(){
            document.getElementById("pass").value = document.getElementById('lname').value + '123';
        }
    </script>
@endsection
