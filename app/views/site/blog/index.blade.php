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
						<div id="post-image">
							<img src="{{ $post->image_src }}">
						</div>
					</div>
					<div class="panel-footer">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ String::tidy(Str::limit($post->content, 200)) }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Read more <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
				<script type="text/javascript">
					(function() {
						var img = document.getElementById('post-image').firstChild;
						img.onload = function() {
		  				if(img.height > img.width) {
		      			img.height = '100%';
		      			img.width = 'auto';
		  				}
						};
					}());
				</script>
			@elseif ($post->video_src != "")
	    	<div class="panel panel-default">
					<div class="panel-body">
						<div class="video-container">
		      		<iframe src="//www.youtube.com/embed/{{ $post->video_src }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
		      	</div>
					</div>
					<div class="panel-footer">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ String::tidy(Str::limit($post->content, 200)) }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Read more <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
			@else
	    	<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
						<p>{{ String::tidy(Str::limit($post->content, 200)) }}</p>
						<hr>
						<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Read more <span class="octicon octicon-chevron-right"></span></a></p>
					</div>
				</div> <!-- .panel panel-default -->
			@endif
		@endforeach
	</div> <!-- .col-md-8 -->

</div> <!-- .row -->

{{ $posts->links() }}

@stop
