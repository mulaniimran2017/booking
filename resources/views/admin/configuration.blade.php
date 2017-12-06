@extends('admin/layouts')
@section('content')
<section id="main-content">
      <section class="wrapper">
<div class="container">
	<h1 style="color:white;">Configuration</h1>
</div>

<div class="row" style="color:white;">
	<div class="container">
		<legend>Time Intervals</legend>
		<p> When setting availability. the application will use this interval to segment the available appointment dates.</p>
		<p>The time interval is currently set to <strong>{{ $configuration->timeInterval->interval }} </strong> {{ $configuration->timeInterval->metric }} </p>
		{!! Form::open(['action' => 'AdminController@anySetTime', 'class' => 'form-horizontal', 'data-abide' => true]) !!}
	</div>
</div>
</section>
</section>
@endsection