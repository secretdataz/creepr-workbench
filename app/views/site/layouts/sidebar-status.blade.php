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
