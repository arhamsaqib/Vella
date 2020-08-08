@extends('./Layouts/profile')
<?php
    session_start();
   // $name = DB::table('users')->where('email', 'admin')->pluck('email');
   $user = Auth::user()->email;

?>
@section('title')
    Home
@endsection

@section('content')

<div class="container-fluid" style="background-color: whitesmoke">
    <div class="row-fluid">
        <div class="span2">
            @extends('./core/navbar-user')
        </div>

        <div class="span10">
            <div style="margin: 10px; margin-bottom: 30px">
                <div class="card" style="width:1100px; height: 30px;">
                    <p style="align-self: flex-end; margin-right: 20px">{{$user}}</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card" style="display: flex; justify-content: center;">
                    <p>hellHaylo</p>
                    <p>hellHaylo</p>
                    <p>hellHaylo</p>
                    <p>hellHaylo</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
