<?php
  $katakunci = strtolower($_POST['search']);
  header("Location:index.php?include=search&katakunci=".$katakunci)
?>