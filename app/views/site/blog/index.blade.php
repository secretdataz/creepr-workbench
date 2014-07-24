@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-4">

		@include('site.layouts.sidebar')

	</div>

	<div class="col-md-8">
		@foreach ($posts as $post)
			@if ($post->image_src != "")
    		<div class="panel panel-default">
					<div class="panel-body">
						<img src="{{ $post->image_src }}" width="720" style="max-width: 100%">
					</div>
					<div class="panel-footer">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ $post->content() }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Comment <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
			@elseif ($post->video_src != "")
	    	<div class="panel panel-default">
					<div class="panel-body">
						<div class="video-container">
		      		<iframe src="//www.youtube.com/embed/{{ $post->video_src }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
		      	</div>
					</div>
					<div class="panel-footer">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ $post->content() }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Comment <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
			@else
	    	<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ $post->content() }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Comment <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
			@endif
		@endforeach
	</div> <!-- .col-md-8 -->

</div> <!-- .row -->

{{ $posts->links() }}

@stop
