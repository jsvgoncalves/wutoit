<?php 
$url = 'http://sigarra.up.pt/feup/pt/mob_eme_geral.cantinas';
$cardapios = json_decode(file_get_contents($url), true);

$real_menu[0] = $cardapios[0];
$real_menu[2] = $cardapios[2];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Wut to eat?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <h1>What to eat.</h1>
          <h3>
           Amanhã  <?=$real_menu[0]['ementas'][1]['data'];?>
          </h3>
        </div>
      </div>
      <div class="row-fluid"></div>
      <?php foreach ($real_menu as $cantina): ?>
        <h3><?=$cantina['descricao'];?></h3>
        <ul>
          <?php if( empty($cantina['ementas'][1]['pratos'])): ?>
            <li>Vai comer a outro lado.</li>
          <?php endif; ?>
          <?php foreach ($cantina['ementas'][1]['pratos'] as $prato): ?>
            <li>
              [<?=$prato['tipo_descr'];?>]
              <?php print_r($prato['descricao']);?> 
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endforeach; ?>
      <div class="row-fluid">
        <div class="span12">
          <p><a href="index.php" class="btn">Hoje</a></p>
        </div>
      </div>  
    </div> <!-- //container -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41796949-1', 'up.pt');
  ga('send', 'pageview');

</script>
  </body>
</html>
