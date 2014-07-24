@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="page-header">Register</h3>
				{{ Confide::makeSignupForm()->render() }}
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
@stop
