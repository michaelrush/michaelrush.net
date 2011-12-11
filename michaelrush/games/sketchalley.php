<!doctype html>
<?php include 'IEConditionals.php' ?>
<head>
  <title>Games</title>
  <meta name="description" content="">
  <?php include 'commonHead.php' ?>
  
  <link rel="stylesheet" href="/css/global/controls.css">
  <link rel="stylesheet" href="/games/css/games.css">
</head>

<body>
		<div id="container">
      <header>
        <?php
          include 'header.php';
          headerInit('games'); 
        ?>
      </header>
    
    <section id="main" role="main">
      <hgroup>
        <h1>Sketch Alley</h1>
      </hgroup>
      
	    <section class="preview">
		    <?php
          include 'gamePreviewPanel.php';
          gamePreviewPanelInit('sketchalley'); 
        ?>
      </section>
      
      <aside class="details">
       <?php
          include 'gameDetailPanel.php';
          gameDetailPanelInit('sketchalley'); 
        ?>
      </aside>
      
    </section>
    
    <footer></footer>
  </div>
  
  <?php include "postBody.php" ?>
</body>
</html>