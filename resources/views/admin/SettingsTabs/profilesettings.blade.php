@extends('/admin/settings')
@section('tabData')
<form action="{{route('updateinfo')}}" method="POST">
    <div class="container" style="margin-top: 20px">
    <p style="font-size: 13px; margin-bottom: 3px">First Name</p>
    <input style="font-size: 12px; border-bottom-width: 2px" type="text" value="{{$info->firstname}}" placeholder="First Name" name="fname" class="form-control" id="fname">
    </div>
    <div class="container" style="margin-top: 20px">
        <p style="font-size: 13px; margin-bottom: 3px">Last Name</p>
        <input style="font-size: 12px; border-bottom-width: 2px" type="text" value="{{$info->lastname}}" placeholder="Last Name" name="lname" class="form-control" id="lname">
    </div>
    <div class="container" style="margin-top: 20px">
        <p style="font-size: 13px; margin-bottom: 3px">Email</p>
        <div class="card" style="font-size: 12px; border-bottom-width: 2px">
            <input style="font-size: 12px" type="text" value="{{$user->email}}" placeholder="someone@example.com" name="email" class="form-control" id="email">
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
    <div style="display: flex">
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Password</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <input style="height: 30px; justify-content: center" type="text" id="pass" name="pass">
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <p style="font-size: 13px; margin-bottom: 3px">Confirm Password</p>
            <div class="card" style="font-size: 12px; border-bottom-width: 2px">
                <input style="height: 30px; justify-content: center" type="text" id="confirmpass" name="confirmpass">
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px">
        <p style="font-size: 13px; margin-bottom: 3px">City</p>
        <input style="font-size: 12px; border-bottom-width: 2px" value="{{$info->city}}" type="text" name="city" class="form-control" id="city">
    </div>
    <div class="container" style="margin-top: 20px">
        <p style="font-size: 13px; margin-bottom: 3px">Phone</p>
        <input style="font-size: 12px; border-bottom-width: 2px" value="{{$info->phone}}" type="text" name="phone" class="form-control" id="phone">
    </div>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <button class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab" type="submit">Update</button>
    </div>
      <input type="hidden" name="_token" value="{{Session::token()}}">
</form>

@endsection
