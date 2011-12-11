<?php

function gamePreviewPanelInit($tab) {
?>
  <section id="browsable" class="scrollable">     
    <section class="items">
    
      <section>
         <img src="/img/games/SketchAlley/mainmenu.png">
      </section>
      
      <section>
         <img src="/img/games/SketchAlley/guess.png">
      </section>
      
          <section>
         <img src="/img/games/SketchAlley/store.png">
          </section>
          
          <section>
         <img src="/img/games/SketchAlley/sketch.png">
      </section>
      
      <section>
         <img src="/img/games/SketchAlley/achievements.png">
      </section>
             
    </section>
     
  </section>
  
  <section class="navWrap">
      <a class="prev browse left"></a>
    <div class="navi">
      <a href="0" class="active"/>
      <a href="1" class=""/>
      <a href="2" class=""/>
      <a href="3" class=""/>
      <a href="4" class=""/>
    </div>
    <a class="next browse right"></a>
  </section>
    
  <script defer>
    $(document).ready(function() {
      // initialize scrollable
      $("#browsable").scrollable().navigator();
    });
  </script>
<?php
} 
?>

