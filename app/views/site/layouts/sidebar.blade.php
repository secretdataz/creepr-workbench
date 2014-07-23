<div class="panel panel-default">
  <div class="panel-body">
    <div class="page-header"><h4 class="panel-heading">Server Status</h4></div>
      <?php
        $status = new MinecraftServerStatus();
        if ($status->getStatus('us.creepr.co', 25565)) {
          echo '<a class="btn btn-danger btn-lg btn-block" href="#"><span class="octicon octicon-primitive-dot"></span>&nbsp; us.creepr.co</a>';
        } else {
          echo '<a class="btn btn-success btn-lg btn-block" href="#"><span class="octicon octicon-primitive-dot"></span>&nbsp; us.creepr.co</a>';
        }
      ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="page-header"><h4 class="panel-heading">Season One</h4></div>
    <p>Season One begins <strong>September 2nd!</strong> Check back here for the latest news regarding the cast and world types.</p>
    <hr>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/NNYL8El.png" alt="Creepr Skyblock">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Skyblock</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis tortor id dictum posuere.</p>
      </div>
    </div>
    <hr>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/DRfXbrp.png" alt="Creepr Super Hardcore">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Super Hardcore</h4>
        <p>Quisque in venenatis tortor, nec volutpat ipsum. Phasellus sodales a sem vitae venenatis.</p>
      </div>
    </div>
    <hr>
    <a class="btn btn-info btn-lg btn-block" href="#">See Full Schedule <span class="octicon octicon-chevron-right"></span></a>
  </div>
</div>
