@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="row">
  <div class="col-md-4">

    @include('site.layouts.sidebar')

  </div>

  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="page-header"><h3 class="panel-heading">Contact Us</h3></div>
        <form action="/contact" method="POST">
          @if (Auth::check())
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control input-lg" id="username" value="{{{ Auth::user()->username }}}" disabled>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control input-lg" id="subject" placeholder="How can we help?">
            </div>
            <div class="form-group">
              <label for="response">Message</label>
              <textarea class="form-control input-lg" id="response" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button>
          @else
            <div class="content-box">
              <h4 class="page-header">Oops!</h4>
              You need to be signed in to submit an e-mail to us.
            </div>
          @endif
        </form>
      </div> <!-- .panel-body -->
    </div> <!-- .panel panel-default -->
  </div> <!-- .col-md-8 -->
</div> <!-- .row -->

@stop
