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
					@if ($post->image_src != "")
						<img src="{{ $post->image_src }}" width="720" style="max-width: 100%">
						<hr>
					@elseif ($post->video_src != "")
						<div class="video-container">
							<iframe src="//www.youtube.com/embed/{{ $post->video_src }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
						</div>
						<hr>
					@endif
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

							<textarea class="form-control" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

							<input type="submit" class="btn btn-default btn-lg btn-block" id="submit" value="Submit" />

						</form>
					@endif

				</div>
			</div> <!-- .panel panel-default -->
	</div> <!-- .col-md-8 -->

</div> <!-- .row -->


@stop
