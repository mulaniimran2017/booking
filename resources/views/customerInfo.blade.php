@extends('layout')
@section('content')

<!DOCTYPE HTML>
<html>

<head>
    <title>Justify Consultation Form :: ASHATHEHOPE</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Justify Consultation Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script src="{{ asset ('https://code.jquery.com/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset ('https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset ('https://cdn.rawgit.com/FezVrasta/snackbarjs/1.1.0/dist/snackbar.min.js') }}"></script>
    <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.iife.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset ('https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="{{ asset ('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ asset ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script> -->
     <link rel="stylesheet" href="{{ asset ('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}" /> 

    <script type="application/x-javascript">
        $('body').bootstrapMaterialDesign();
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tags -->
    <!-- font-awesome-icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- Stylesheet -->
    <link href="{{ asset ('css/formCSS.css')}}" rel='stylesheet' type='text/css' />
    <!-- //Stylesheet -->
    <!--fonts-->
    <link href="{{ asset ('//fonts.googleapis.com/css?family=Roboto:300,400,500,700 ') }}" rel="stylesheet">
    <link href="{{ asset ('//fonts.googleapis.com/css?family=Poiret+One') }}" rel="stylesheet">
    <!--//fonts-->
</head>

<body>


<!-- Output correct data for checking -->
<div class="row jumbotron text-center">
  {{--  <h3> You chose {{ $package_name }} </h3>  --}}
  <h1> To be conducted on </h1>
  <h2> {{ $dateFormat }} </h2>

</div>
<br>
<!-- <div class="col-md-6 center-block" style="float:none;"> -->
<div class="row col-md-10 center-block" style="float:none;">
    
  
  <!-- Hidden forms to be used later for appointment confirmation -->
{!! Form::open(array('action' => 'BookingController@anyConfirm', 'class' => 'form-horizontal', 'data-abide'=>true)) !!}
{!! Form::hidden('pid', $pid) !!}


    
        <!--background-->
    <h1> <span>J</span>ustify <span>C</span>onsultation <span>F</span>orm </h1>
    <div class="bg-agile">
        <div id="appointment_form" class="book-appointment">
            <h2>Make Your Appointment Here</h2>
            <div class="book-form agileits-login">
                <form action="#" method="post">
                    <div class="agileits_reservation_grid">
                        <div class="phone_email">
                            <label>Full name : </label>
                            <div class="form-text">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="fname" id="fname" placeholder="" required="">
                            </div>
                        </div>
                        <div class="phone_email phone_email1">
                            <label>Email : </label>
                            <div class="form-text">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email"  id="email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="phone_email">
                            <label>Phone number : </label>
                            <div class="form-text">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="text" name="number" id="number" placeholder="" required="">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="span1_of_1">
                            <label>Date : </label>
                            <div class="book_date">
                                <i  aria-hidden="true"></i>
                                <input  name="Text" type="text" value="  {{ $dateFormat }}" onfocus="this.value = '';" onblur="if (this.value == '{{ $dateFormat }}') {this.value = 'mm/dd/yyyy';}" required="">
                               
                                 </input>  
                                 
                            </div>
                        </div>
                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <label>Type of Services : </label>
                            <div class="section_room">
                                <i class="fa fa-gavel" aria-hidden="true"></i>
                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value=""></option>
												<option value="">ASTRO INFORMATION</option>
												<option value="">PALMISTRY</option>         
												<option value="">VASTU SHASTRA</option>
												<option value="">GEMOLOGY</option>
												<option value="">REIKI HEALING</option>
                                                <option value="">PSYCHOTHERAPY</option>
                                                <option value="">PRODUCTS</option>
											</select>
                            </div>
                        </div>
                        <div class="span1_of_1">
                            <label>Cost Of Consulting: </label>
                            <!-- start_section_room -->
                            <div class="section_room">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
												<option value=""></option>
												<option value="">Rs.200(1 hour)</option>
												<option value="">Rs.500(2 hours)</option>
												<option value="">Rs.800(3 hours)</option>         
												<option value="">Rs.1000(4 hours)</option>
												
											</select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="span1_of_1">
                            <!-- start_section_room -->
                            <label>Send your Questions in DETAIL *: </label>
                            <p>These questions will be considered at the time of appointment.</p>
                            <div class="section_room">
                                <div class="phone_email">

                                    <div class="form-text">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" name="Question" id="Question" placeholder="" required="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="wthree-text">
                        <h6>About Client</h6>
                        <ul>
                            <li>
                                <label class="anim">
									<input type="checkbox" class="checkbox">
									<span>New client</span> 
								</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Existing client</span> 
														</label>
                            </li>
                        </ul>

                        <h6>What is the best way to reach you</h6>
                        <ul class="radio-w3ls">
                            <li>
                                <input type="radio" id="a-option" name="selector1">
                                <label for="a-option">
																Phone
															</label>
                                <div class="check"></div>
                            </li>
                            <li>
                                <input type="radio" id="b-option" name="selector1">
                                <label for="b-option">
																Email
															</label>
                                <div class="check">
                                    <div class="inside"></div>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                        <h6>Days available for appointment</h6>
                        <ul>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Monday</span> 
														</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Tuesday</span> 
														</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>wednesday</span> 
														</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Thursday</span> 
														</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Friday</span> 
														</label>
                            </li>
                        </ul>
                        <h6>Time of day for appointment</h6>
                        <ul>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Morning</span> 
														</label>
                            </li>
                            <li>
                                <label class="anim">
															<input type="checkbox" class="checkbox">
															<span>Afternoon</span> 
														</label>
                            </li>
                        </ul>
                        <div class="clear"> </div>
                    </div>
                    
                    <div class="clear"> </div>
                     <div class="text-center">
                         <button type="submit" class="btn btn-primary">Get Appointment</button>
                    </div>
                   
                    {{--  <a href="calender2.html" class="btn btn-default btn-block" style="margin-top:15px;"><i class="fa fa-angle-double-left"></i> Back </a>  --}}
                </form>
            </div>

        </div>
    </div>
    <!--copyright-->
    <div class="copy w3ls ">
        <p>&copy; 2017. Justify Consultation Form . All Rights Reserved <a href="ashathehope.com/ " target="_blank ">ASHA THE HOPE</a> </p>
    </div>
    <!--//copyright-->
    <script type="text/javascript " src="{{asset('js/jquery-2.1.4.min.js')}} "></script>
    <!-- Calendar -->
    <link rel="stylesheet " href="{{asset ('css/jquery-ui.css')}} " />
    <script src="{{asset ('../js/jquery-ui.js')}} "></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3 ").datepicker();
        });

        $(document).ready(function() {
            $("#appointment_form").submit(function() {
                alert("You have successfully posted your requirement. We will email you the info shortly.");

            });
        });
    </script>
    <!-- //Calendar -->
    <script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>
</body>

</html>

  
  {{--  <!-- First Name Input -->
  <div class="form-group">
    <label for="fname" class="col-lg-2 control-label">First Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="fname" id="fname" placeholder="First">
    </div>
  </div>

  
  
  <!-- Last Name Input -->
  <div class="form-group">
    <label for="lname" class="col-lg-2 control-label">Last Name</label>
    <div class="col-lg-10">
       <input type="text" class="form-control" name="lname" id="lname" placeholder="Last">
    </div>
  </div>
  
  <!-- Contact Number -->
  <div class="form-group">
    <label for="number" class="col-lg-2 control-label">Contact Number</label>
    <div class="col-lg-10">
       <input type="text" class="form-control" name="number" id="number" placeholder="5555555555">
    </div>
  </div>
  
  <!-- Email -->
   <div class="form-group">
    <label for="email" class="col-lg-2 control-label">E-Mail</label>
    <div class="col-lg-10">
       <input type="text" class="form-control" name="email" id="email" placeholder="you@example.com">
    </div>
  </div>
  
  <div class="checkbox text-center">
      <label>
        <input id="newsletterBox" name="newsletterBox" type="checkbox" checked> YES, I want to receive newsletters with this email</input>
    </label>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
   --}}
  </div>
  
   {!! Form::close() !!} 
@stop
