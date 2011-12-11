<?php

function getGameObj($id) {
  $path = "../db/games.json";
  $fh = fopen($path, 'r');
  
  while (($row = fgets($fh)) !== false) {
    $obj = json_decode($row, true);
    if ($obj != null && strcmp($obj->{'id'}, $id))
      return $obj;
  }
  
  fclose($fh);
  return "a";
}
?>