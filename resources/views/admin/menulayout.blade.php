@extends('./Layouts/profile')

@section('title')
    @yield('title')
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
                                @yield('link')
                            </div>
                        </div>
                    </div>
                    @yield('content-rest')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
