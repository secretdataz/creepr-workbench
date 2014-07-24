@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="page-header">Sign In</h3>
				<form method="POST" action="{{{ URL::to('/user/login') }}}" accept-charset="UTF-8">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<fieldset>
							<div class="form-group">
									<label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
									<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
							</div>
							<div class="form-group">
							<label for="password">
									{{{ Lang::get('confide::confide.password') }}}
									<small>
											<a href="{{{ URL::to('/user/forgot') }}}">Forget your password?</a>
									</small>
							</label>
							<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
							</div>
							<div class="form-group">
									<label for="remember" class="checkbox">Remember Me &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<input type="hidden" name="remember" value="0">
											<input tabindex="0" type="checkbox" name="remember" id="remember" value="1">
									</label>
							</div>
							@if (Session::get('error'))
									<div class="alert alert-error">{{{ Session::get('error') }}}</div>
							@endif

							@if (Session::get('notice'))
									<div class="alert">{{{ Session::get('notice') }}}</div>
							@endif
							<button tabindex="3" type="submit" class="btn btn-info btn-lg btn-block">Sign In</button>
							<a href="{{{ URL::to('/user/create') }}}" class="btn btn-primary btn-lg btn-block">Need an account?</a>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

@stop
