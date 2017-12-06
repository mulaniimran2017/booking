@extends('admin/layouts')
@section('content')
<section id="main-content">
      <section class="wrapper">
        
<div class="col-lg-8">
	<div id="error"></div>
	<div id="calendar" style="background-color:white;margin-bottom:20px;border:2px solid blue;padding:10px;"></div>
</div>
<div class="col-lg-4" style="color:white;">
	<legend> Details </legend>
	<div id="appointment-details">
		<p>Click on an appointment to show details.</p>
	</div>
</div>
</section>
</section>
<script src="{{ asset('/js/admin/appointments.js') }}"></script>

@endsection