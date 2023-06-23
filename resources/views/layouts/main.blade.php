<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental | @yield ('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .btn-purple{
        background: #567189;
        border: 1px solid #8CA6DB;
        color: #fff;
        width: 100%;
    }

    .btn-purple:hover{
        background: #8CA6DB;
        color: #fff;
    }


    .sidebar{
        background: #C4D7B2 ;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: black;
        display: block;
    }

    .sidebar a:hover{
        background-color: #CAC6E1;
        /* width: 213px;
        margin-left: -25px; */
    }

    .sidebar a.active{
        background-color: #CAC6E1;
        border-right: solid 4px #F49F95;
        /* width: 213px;
        margin-left: -25px; */
    }

    .navbar{
        background: #A0C49D;

    }

    .navbar-brand{
        margin-left: 5px;
    }

    .books{       
         background-color: #579BB1;  

    }

    .cate{
        background-color: #7B8FA1;
    }

    .user{
    background-color: #567189;

    }
</style>
<body>

    <div class="main d-flex flex-column justify-content-between">
    <!--navbar-->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <i class="bi bi-car-front-fill" style="font-size: 30px"></i>
          <div class="navbar-brand"><b> Rental Mobil</b></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2  sidebar collapse d-lg-block" id="navbarSupportedContent">
                <div class="active">
 
                <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class='active' @endif>
                    <i class="bi bi-house-dash-fill">
                    <b>Dashboard</b>
                    </i>
                </a>
                <a href="/rental" @if (request()->route()->uri == 'rental') |  class='active' @endif>
                    <img src="https://cdn-icons-png.flaticon.com/512/75/75702.png" alt="" srcset="" height="20px">                  
                    <b> Rental</b>
                </a>
                
                <a href="/rental/trash/all" @if (request()->route()->uri == 'rental/trash/all') class='active' @endif>
                    <i class="bi bi-recycle"></i>
                <b> Trashed</b>
                </i></a>
    

            </div>
            </div>
            <div class="col-lg-10 p-5">
                    @yield('content')
            </div>
        </div>
      </div>
</div>
   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>