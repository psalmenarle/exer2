<?php
  include 'config.php';
  include 'class.profile.php';

  header('Content-Type: application/json');

  $profile = new profile();
  $list=$profile->get_profile();

  echo "{\"BTS PROFILE\":";
  echo json_encode($list);
  echo "}";
?>
