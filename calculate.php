<?php
  $baseHeight = floatval($_POST["height-base"]);
  $baseBase = floatval($_POST["base-length"]);
  $pyramidHeight = floatval($_POST["height-pyramid"]);
  $volume = $baseHeight * $baseBase * $pyramidHeight / 6;
  echo "The volume of the pyramid is " . number_format($volume, 2) . "cm<sup>3</sup>.";
?>
