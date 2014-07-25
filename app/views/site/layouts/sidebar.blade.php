<div class="panel panel-default">
  <div class="panel-body">
    <div class="page-header"><h4 class="panel-heading">Server Status</h4></div>
      <?php
        $ip = '184.154.16.178';
        $port = 25565;

        $status = @fsockopen($ip, $port, $errno, $errstr, 200);
        if ($status >= 1) {
          echo '<a class="btn btn-success btn-lg btn-block" href="#"><span class="octicon octicon-primitive-dot"></span>&nbsp; us.creepr.co</a>';
        } else {
          echo '<a class="btn btn-danger btn-lg btn-block" href="#"><span class="octicon octicon-primitive-dot"></span>&nbsp; us.creepr.co</a>';
        }
      ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="page-header"><h4 class="panel-heading">Creepr TV</h4></div>
    <p>Season 1 begins <strong>September 2nd!</strong> Check back here for the latest news regarding the cast and world types.</p>
    <hr>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/NNYL8El.png" alt="Creepr Skyblock">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Skyblock</h4>
        <p>Survival with strictly limited resources, featuring the cast on the <strong>GotPVP</strong> server.</p>
      </div>
    </div>
    <hr>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/DRfXbrp.png" alt="Creepr Super Hardcore">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Super Hardcore</h4>
        <p><strong>Every man for himself.</strong> Last one standing wins eternal glory.</p>
      </div>
    </div>
    <hr>
    <a class="btn btn-info btn-lg btn-block" href="#">See Full Schedule <span class="octicon octicon-chevron-right"></span></a>
  </div>
</div>
