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
        <div class="page-header"><h3 class="panel-heading">Meet the Staff</h3></div>
        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/sampsonian/100.png"><br>
              <strong>sampsonian</strong>
              <p>Sam</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/Newtzor/100.png"><br>
              <strong>Newtzor</strong>
              <p>Brandon</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/Newby1223/100.png"><br>
              <strong>Newby1223</strong>
              <p>Jacob</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/Nelon_THA_Melon/100.png"><br>
              <strong>Nelon_THA_Melon</strong>
              <p>Nelson</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/Failmaster9000/100.png"><br>
              <strong>Failmaster9000</strong>
              <p>Mike</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/DJ_Flapjack/100.png"><br>
              <strong>DJ_Flapjack</strong>
              <p>Daret</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <img class="profile-pic" src="https://minotar.net/helm/Lord_Reekris/100.png"><br>
              <strong>Lord_Reekris</strong>
              <p>Aaron</p>
            </div>
          </div>
        </div>
      </div> <!-- .panel-body -->
    </div> <!-- .panel panel-default -->
  </div> <!-- .col-md-8 -->
</div> <!-- .row -->

@stop
