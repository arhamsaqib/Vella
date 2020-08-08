@extends('./Layouts/profile')

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
                    <p style="align-self: flex-end; margin-right: 20px">Hello Admin Clients</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card" style="display: flex; justify-content: center;">
                    <div class="container" style="margin-top: 20px">
                        <div class="card" style="height: 40px; justify-content: center; background-color: white">
                            <div class="container" style="flex-direction: row; display: flex; align-items: center;">
                                <a href="/home-admin">Home -> </a>
                                <a href="#">Clients</a>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-top: 20px">
                        <a href="/user/create" style="background-color: #d5bdab; border-color: #d5bdab; font-size: 12px" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col" style="font-size: 12px">ID</th>
                            <th scope="col" style="font-size: 12px">Name</th>
                            <th scope="col" style="font-size: 12px">City</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Phone</th>
                            <th scope="col" style="font-size: 12px">Appointments</th>
                            <th scope="col" style="font-size: 12px"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <th scope="row">{{$client->user_id}}</th>
                                    <td>{{$client->firstname}} {{$client->lastname}}</td>
                                    <td>{{$client->city}}</td>
                                    <td>{{DB::table('users')->where('id', $client->user_id)->value('email')}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{DB::table('booked_appointments')->where('client_id' , $client->user_id)->count()}}</td>
                                    <td>
                                        <div style="display: flex">
                                            <div class="mr-2">
                                                <a href="#" class="btn btn-primary" style="font-size: 12px;background-color: #d5bdab; border-color: #d5bdab">Edit</a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-primary" style="font-size: 12px;background-color: #b63939; border-color: #b63939">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
