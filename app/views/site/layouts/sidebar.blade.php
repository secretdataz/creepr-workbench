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
    <div class="page-header"><h4 class="panel-heading">Game Modes</h4></div>
    <p>We are always working on adding unique new experiences to the Creepr server.</p>
    <hr>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/CwA7ddU.png" alt="Survival">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Survival</h4>
        <p>Vanilla Minecraft. Protect yourself from monsters and other players.</p>
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/smKrUP2.png" alt="Creative">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Creative</h4>
        <p>Limitless building opportunity. Let your imagination run free here.</p>
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/NNYL8El.png" alt="Skyblock">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Skyblock</h4>
        <p>Survival with strictly limited resources and challenges to complete.</p>
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/DRfXbrp.png" alt="Hardcore">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Hardcore</h4>
        <p>Here, it is every man for himself. Dying will result in a temporary ban.</p>
      </div>
    </div>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://i.imgur.com/2SFs36W.png" alt="Apocalypse">
      </a>
      <div class="media-body">
        <h4 class="media-heading">Apocalypse <span class="badge">New!</span></h4>
        <p>Run through the ruins of Creepr City and battle against powerful zombie hordes.</p>
      </div>
    </div>
  </div>
</div>
