<?php
  $login = filter_var(trim($_POST ['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST ['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST ['pass']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) >  90) {
    echo "Недопустима длинна логина";
    exit();
  } else if(mb_strlen($name) < 3 || mb_strlen($name) >  50) {
    echo "Недопустима длинна имени";
    exit();
  } else if(mb_strlen($pass) < 5 || mb_strlen($pass) >  20) {
    echo "Недопустима длинна пароля (от 5 до 20)";
    exit();
  }

  $pass = md5($pass."cfvsvrsvgdtg5463183");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

  $mysql->close();

  header('Location: /glavnaya.html');
?>
