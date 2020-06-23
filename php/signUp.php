<?php
  echo "ok";
  $login = $_POST['login'];
  $password = $_POST['password'];
  $confPassword = $_POST['confPassword'];
  $email = $_POST['email'];
  echo 'Login ' . $login . ' password ' . $password .  ' confPassword ' . $confPassword . ' email ' . $email . '\n' . print_r($_POST);
?>