@extends('layout')
@section('content')
<?php $link = Request::root(); ?>
<div col-md-4 class="row jumbotron text-center">
  <h1>Select a Day</h1>
  {{--  <p>You chose <b> {{ $packageName }} </b></p>  --}}
  <p id="currentDate">  </p>
</div>

<div class="col-md-12  text-center">
  <div class="col-md-offset-1 col-lg-offset-1 col-md-11 col-lg-7">
    <div id="calendar"></div>
  </div>
  <div class="col-md-offset-1 col-lg-offset-1 col-md-2 col-lg-2">
    <div class="panel panel-primary">
      <div class="panel-heading" id="daySelect">
        Select a Day
      </div>
      <div class="panel-body">
     
        <p id="dayTimes"></p>
      </div>
    </div>
  </div>
</div>

<!-- Calendar Functionality -->
<script src="{{ asset('/js/calendar.js') }}"></script>
@endsection

