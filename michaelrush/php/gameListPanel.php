<?php
include "api.php";

function gameListPanelInit($id) {
  $gameObj = getGameObj($id);
?>
  <section class="panel">
    <section class="panelLeft game">
      <a href="/games/<?= $gameObj['id'] ?>.html">
        <img alt="<?= $gameObj['displayName'] ?>" src="/img/games/<?= $gameObj['id'] ?>/<?= $gameObj['id'] ?>-logo.gif">
      </a>
    </section>
    <section class="panelText">
      <a href="/games/<?= $gameObj['id'] ?>.html">
        <h1><?= $gameObj['displayName'] ?></h1>
      </a>  
      <p><?= $gameObj['summary'] ?>.</p>
      <p align="right"><a href="/games/<?= $gameObj['id'] ?>.html">Read More</a></p>
    </section>
  </section>

<?php
} 
?>

