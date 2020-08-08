@extends('./Layouts/master')

@section('title')
    Sign In - Vella Consultations
@endsection


@section('content')
<div>
<div style="display: flex; justify-content: center; margin-top: 15%">
        <div class="card">
            <div class="card-body">
                <form action="{{route('signin')}}" method="POST">
                    <div class="mb-3" style="display: flex; justify-content: center">
                        <h6>VELLA CONSULTING INC.</h6>
                    </div>
                    <div class="form-group">
                        <input style="font-size: 12px; border-bottom-width: 2px" type="email" placeholder="Email Address" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <input style="font-size: 12px" type="password" placeholder="Password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group form-check" style="display: flex;">
                        <div class="mr-4"><input style="height: 10px" type="checkbox" class="form-check-input" id="rememberMeCheck"></div>
                        <label style="font-size: 11px; margin-top:2px" class="form-check-label" for="rememberMeCheck">Remember me</label>
                    </div>
                <button style="width: 100%; background-color: #d5bdab; border: #d5bdab; font-size: 12px" type="submit" class="btn btn-primary">Login</button>
                <div style="display: flex; justify-content: center"><a style="font-size: 12px; margin-top: 6px;color: #d5bdab" href="/forget-password">Forgot Your Password?</a></div>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
            </div>
        </div>
</div>
</div>
@endsection
