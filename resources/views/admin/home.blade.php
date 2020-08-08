@extends('./Layouts/profile')
<?php
    session_start();
?>
@section('title')
    Home
@endsection

@section('content')

<div class="container-fluid" style="background-color: whitesmoke">
    <div class="row-fluid">
        <div class="span2">
            @extends('./core/navbar')
        </div>

        <div class="span10">
            <div style="margin: 10px; margin-bottom: 30px">
                <div class="card" style="width:1100px; height: 30px;">
                <p style="align-self: flex-end; margin-right: 20px">Hi, {{$user->firstname}} {{$user->lastname}}</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card" style="display: flex">
                    <div class="mt-5" style="height: 100px; display: flex; justify-content: center">
                        <div class="mr-2">
                            <a href="/user/create" class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab">Add Client</a>
                        </div>
                        <div class="mr-2">
                            <a href="/booknow" class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab">Add Appointment</a>
                        </div>
                        <div class="mr-2">
                            <a href="/appointments" class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab">All Appointments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
