@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.forgot_password') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3 class="page-header">Forgotten Password</h3>
        <p>We can send you instructions on how to reset your password.</p>
        
        {{ Confide::makeForgotPasswordForm() }}
      </div>
    </div>
  </div>
  <div class="col-md-3"></div>
</div>
@stop
