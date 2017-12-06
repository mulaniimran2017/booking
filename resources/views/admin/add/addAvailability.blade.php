@extends('admin/layout')
@section('content')

<div class="col-md-8">
	<div id="error"></div>
	<div id="calendar" style="background-color:white;margin-bottom:20px;border:2px solid blue;padding:10px;"></div>
</div>

{{--  <div class="col-md-4" id="setform" style="background-color:white;">
	<div id="error"></div>
	<h2>Set availability</h2>
	<hr>
	<h4>Date :</h4>
	<br>
	From<input type="date"/>   To<input type="date" value="">
	<br><br>
	<h4>Time :</h4>
	<br>
	From<input type="time"/>   To <input type="time" value="">
	<br><br>
	Dates :<br>
	       All<input type="checkbox" >
	       Mon<input type="checkbox" >
		   Tue<input type="checkbox" >
		   Wed<input type="checkbox" >
		   Thu<input type="checkbox" >
		   Fri<input type="checkbox" >
		   Sat<input type="checkbox" >
		   Sun<input type="checkbox" >
	
    <br><br>
   <button type="submit" id="addave" class="btn btn-primary">ADD</button>
   <button type="submit" class="btn btn-danger">DELETE</button>
  --}}



<script src="{{ asset('/js/admin/availability.js') }}"></script>
@endsection