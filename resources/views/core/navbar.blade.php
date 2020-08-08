<!DOCTYPE html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            d='XX';
            document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
        </script>
    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-light" style="flex-direction: column; background-color: #9b7c91 ">
             <h4 style="color: whitesmoke">VELLA CONSULTING INC.</h4>
                <div class="container" style="margin: 15px; border-bottom-style: solid; border-width: 2px; border-color: #d5bdab" >
                    <ul class="navbar-nav">
                        <a class="nav-link" href="/home-admin"><h6 style="color: whitesmoke; font-size: 14px">Home</h6></a>
                    </ul>
                </div>
             <div class="container" style="margin-top: 15px; border-bottom-style: solid; border-width: 2px; border-color: #d5bdab">
                <ul class="navbar-nav" style="flex-direction: column">
                  <li class="nav-item">
                    <a class="nav-link" href="/booknow"><h6 style="color: whitesmoke; font-size: 14px">Book Now</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/clients"><h6 style="color: whitesmoke; font-size: 14px">Clients</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/calender"><h6 style="color: whitesmoke; font-size: 14px">Calender</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><h6 style="color: whitesmoke; font-size: 14px">Reports</h6></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/settings"><h6 style="color: whitesmoke; font-size: 14px">Settings</h6></a>
                  </li>
                </ul>
             </div>
             <div class="container" style="margin: 15px; border-bottom-style: solid; border-width: 2px; border-color: #d5bdab" >
                <ul class="navbar-nav" style="flex-direction: column">
                    <li class="nav-item">
                         <h6 class="nav-link" style="color: whitesmoke; font-size: 14px">{{ date('d-m-Y') }}</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signin"><h6 style="color: whitesmoke; font-size: 14px">Log Out</h6></a>
                    </li>
                </ul>
            </div>
            <div class="container" style="margin: 15px; flex-direction: column" >
                <p style="font-size:9px; color: whitesmoke">© 2020 VELLA CONSULTING INC.</p>
                <p style="font-size: 10px; color: whitesmoke">PROUDLY POWERED BY UCP</p>
            </div>
          </nav>
    </body>
</html>
