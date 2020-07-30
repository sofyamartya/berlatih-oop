<?php
  //animal class
  require_once('animal.php');
  $sheep = new Animal("shaun");

  echo $sheep->name . "<br>"; // "shaun"
  echo $sheep->legs . "<br>"; // 2
  echo $sheep->cold_blooded . "<br>"; // false

  //ape class
  require_once('ape.php');
  $sungokong = new Ape("kera sakti");
  echo $sungokong->yell() . "<br>"; // "Auooo"

  //frog class
  require_once('frog.php');
  $kodok = new Frog("buduk");
  echo $kodok->jump(); // "hop hop"
?>
