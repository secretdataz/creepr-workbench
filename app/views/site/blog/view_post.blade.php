@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop

{{-- Content --}}
@section('content')

<div class="row">
	<div class="col-md-4">

		@include('site.layouts.sidebar')

	</div>

	<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="page-header"><h2 class="panel-heading">{{ $post->title }} &nbsp;<small>Posted {{{ $post->date() }}}</small></h2></div>
					<p>{{ $post->content() }}</p>
				</div>
				<div class="panel-footer">
					<h3 class="page-header">{{{ $comments->count() }}} Comments</h3>
					@if ($comments->count())
						@foreach ($comments as $comment)
						<div class="row">
							<div class="col-md-1">
								<img class="thumbnail" src="http://placehold.it/36x36" alt="">
							</div>
							<div class="col-md-11">
								<strong>{{{ $comment->author->username }}}</strong>&nbsp;&bull;&nbsp;{{{ $comment->date() }}}<br/>
								{{{ $comment->content() }}}
							</div>
						</div>
						<hr />
						@endforeach
					@else
						<hr />
					@endif

					@if ( ! Auth::check())
						You need to be logged in to add comments.<br /><br />
						Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
					@elseif ( ! $canComment )
						You don't have the correct permissions to add comments.
					@else

						@if($errors->has())
							<div class="alert alert-danger alert-block">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<h4>Add a Comment</h4>
						<form  method="post" action="{{{ URL::to($post->slug) }}}">
							<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

							<textarea class="col-md-12 input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" class="btn btn-default" id="submit" value="Submit" />
								</div>
							</div>
						</form>
					@endif
					
				</div>
			</div> <!-- .panel panel-default -->
	</div> <!-- .col-md-8 -->

</div> <!-- .row -->


@stop
