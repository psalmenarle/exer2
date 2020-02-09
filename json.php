<?php
  include 'config.php';
  include 'class.profile.php';

  header('Content-Type: application/json');

  $profile = new Profile();
  $list=$profile->get_Profile();

  echo "{\"BTS PROFILE\":";
  echo json_encode($list);
  echo "}";
?>
