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
        <!-- <form action="/contact" method="POST"> -->
          @if (Auth::check())
            <!-- <div class="form-group">
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
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button> -->

            {{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->

            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>

            {{ Form:: label ('first_name', 'First Name*' )}}
            {{ Form:: text ('first_name', '' )}}

            {{ Form:: label ('last_name', 'Last Name*' )}}
            {{ Form:: text ('last_name', '' )}}

            {{ Form:: label ('phone_number', 'Phone Number' )}}
            {{ Form:: text ('phone_number', '', array('placeholder' => '0280021xx')) }}

            {{ Form:: label ('email', 'E-mail Address*') }}
            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}

            {{ Form:: label ('subject', 'Subject') }}
            {{ Form:: select ('subject', array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4'), '1' ) }}

            {{ Form:: label ('comment', 'Message*' )}}
            {{ Form:: textarea ('comment', '')}}

            {{ Form::reset('Clear', array('class' => 'you css class for button')) }}
            {{ Form::submit('Send', array('class' => 'you css class for button')) }}

            {{ Form:: close() }}
          @else
            <div class="content-box">
              <h4 class="page-header">Oops!</h4>
              You need to be signed in to submit an e-mail to us.
            </div>
          @endif
        <!-- </form> -->
      </div> <!-- .panel-body -->
    </div> <!-- .panel panel-default -->
  </div> <!-- .col-md-8 -->
</div> <!-- .row -->

@stop
