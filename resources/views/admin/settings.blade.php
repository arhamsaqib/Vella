@extends('/admin/menulayout')
@section('title')
    VELLA CONSULTING INC.
@endsection

@section('link')
    -> <a>Settings</a>
@endsection

@section('content-rest')

    <div class="container"  style="margin-top: 20px">
        <div class="mb-1" style="font-size: 12px; border-bottom-width: 2px">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab" data-toggle="tab" href="/settings/booking" role="tab" aria-controls="home" aria-selected="true">Booking Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="/settings/email" role="tab" aria-controls="profile" aria-selected="false">Email Preferences</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="messages-tab" data-toggle="tab" href="/settings/profile" role="tab" aria-controls="messages" aria-selected="false">Profile</a>
                </li>
             </ul>
        </div>
    </div>

    <div class="container">
        @yield('tabData')
    </div>



@endsection
