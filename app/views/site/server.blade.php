@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="row">
  <div class="col-md-4">

    @include('site.layouts.sidebar-status')

  </div>

  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="page-header"><h3 class="panel-heading">The Creepr Server</h3></div>
        <p class="lead">Our server is growing every day.</p>
        <p>We currently offer a vanilla survival experience, and plan to make additional worlds available very soon! If you are looking for a friendly, mature community,
        you are welcome to check us out.</p>
      </div> <!-- .panel-body -->
    </div> <!-- .panel panel-default -->
  </div> <!-- .col-md-8 -->
</div> <!-- .row -->

@stop
