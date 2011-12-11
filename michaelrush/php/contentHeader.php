<?php

function contentHeaderInit($tab) {
  if ($tab == 'home') $hsel = "class='selected'";
  if ($tab == 'games') $gsel = "class='selected'";
  if ($tab == 'apps') $asel = "class='selected'";
?>
  <section class="headerPad">
    <section class="infoSummary">
      <section class="logo">Michael Rush</section>
      <section>
        <ul>
          <li>R</li>
          <li>T</li>
        </ul>
      </section>
    </section>
    <nav>      
      <ul>
        <li <?= $hsel ?>><a href="/">Home</a></li>
        <li <?= $gsel ?>><a href="/games">Games</a></li>
        <li <?= $asel ?>><a href="/apps">Apps</a></li>
      </ul>
    </nav>
  </section>
  <section class="headerDivider"></section>

<?php
} 
?>

