@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-4">

		@include('site.layouts.sidebar')

	</div>

	<div class="col-md-8">
		@foreach ($posts as $post)
			<div class="panel panel-default">
		  	<div class="panel-body">
			  	{{ $post->image_src }} 
		    </div>
		    <div class="panel-footer">
		    	<h3 class="page-header"><a href="{{{ $post->url() }}}" class="post-title">{{ String::title($post->title) }}</a> <small>Posted {{{ $post->date() }}}</small></h3>
		      <p>{{ String::tidy(Str::limit($post->content, 200)) }}</p>
					<hr>
					<p><a class="btn btn-default btn-lg" href="{{{ $post->url() }}}">Read more <span class="octicon octicon-chevron-right"></span></a></p>
		    </div>
		  </div> <!-- .panel panel-default -->
		@endforeach
	</div> <!-- .col-md-8 -->

</div> <!-- .row -->

{{ $posts->links() }}

@stop
