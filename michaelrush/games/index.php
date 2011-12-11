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
        include "contentHeader.php";
        contentHeaderInit('games'); 
	    ?>
	  </header>
    
    <section id="main" role="main">
      <hgroup>
        <h1>Recent Projects</h1>
      </hgroup>
	    <?php
        include 'gameListPanel.php';
        gameListPanelInit('sketchalley'); 
      ?>
    </section>
    
    <footer></footer>
  </div>

  <?php include "postBody.php" ?>
</body>
</html>