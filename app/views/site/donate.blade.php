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
        <div class="page-header"><h3 class="panel-heading">Donate to the Creepr Network</h3></div>
        <p class="lead">Thank you for supporting our server!</p>
        <p>The Creepr Network is not yet set up to automatically process payments. Therefore, if you are interested in donating, you will have to contact us about doing so.</p>
        <div class="row">
          <div class="col-md-12">
            <div class="content-box">
              <h4 class="page-header">VIP Benefits</h4>
              <p>Throughout the Creepr Network, you get...</p>
              <br>
              <ul>
                <li>an exclusive in-game <strong>VIP</strong> prefix,</li>
                <li>the option to use a nickname,</li>
                <li>priority access to the Creepr worlds, and</li>
                <li>access to upcoming VIP-exclusive worlds!</li>
              </ul>
              <br>
              <p><em>More features coming in the near future.</em></p>
            </div><!-- .profile -->
          </div>
        </div><!-- .row -->
      </div> <!-- .panel-body -->
    </div> <!-- .panel panel-default -->
  </div> <!-- .col-md-8 -->
</div> <!-- .row -->

@stop
