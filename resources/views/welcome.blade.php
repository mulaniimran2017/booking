
<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ASHA THE HOPE</title>

         {{--  <link href="{{ asset ('css/formCSS.css')}}" rel='stylesheet' type='text/css' />     --}}
                <!-- Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Raleway:100,600')}}" rel="stylesheet" type="text/css">
       
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">  
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
         <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script> 
      
         {{--  <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">   --}}

        <style>
            html, body {
               
               
                height: 100vh;
               
            }

            body {
                 font-family: 'Raleway', sans-serif;
               background: url(../images/ban5.jpg)no-repeat center top;
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                
                
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #f6f6f6;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin:30px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .caro{margin-top: 200px;}
            .jumbo{margin-top: 10px;
                     width: 70%;height:70%;
                     font-weight: 400;
                     }
        .navbar{
            font-size:18px;
            font-weight: 400;
           
        }
        </style>
    </head>
    <body>
        {{--  <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>  --}}


          {{--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    <a href="booking">ASHA THE HOPE</a>
                        
                    @else
                       
                         <a href="userlogin">Book Appointment</a>
                        <a href="{{ url('/userlogin') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            </div>  --}}
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Asha the hope</a>
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="userlogin">login</a></li>
      <li><a href="#">Register</a></li>
     
    </ul>
  </div>
</nav>



        <div class="container jumbo">
        <div class="jumbotron">
            <h1 style="color:red; font-weight:700;">Ashathehope.com at a Glance</h1> 
                <h3 >1.Free Daily Horoscope: Created especially for you<br>
                2.Quality: We offer horoscope interpretations of prime quality<br>
                3.All our free Horoscopes: Enjoy your expedition!<br>
                4.Knowledge: Dive into the depths of "Understanding Astrology"<br>
                5.Astro.com Forum: Visit the great Astrodienst Discussion Forum<br>
                6.Knowledge: Dive into the depths of "Understanding Astrology"<br>
                7.Astro.com Forum: Visit the great Astrodienst Discussion Forum<br><br><br>
                <a href="#">Most read</a></h3>
        </div>
    
</div>


            <!-- <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="panel">
                    @component('components.who')
                    @endcomponent
                  </div>
                </div>
              </div>
            </div> -->
        </div>
        <div class="copy w3ls ">
        <p>&copy; 2017. Justify Consultation Form . All Rights Reserved <a href="ashathehope.com/ " target="_blank ">ASHA THE HOPE</a> </p>
    </div>
    </body>
</html>

   