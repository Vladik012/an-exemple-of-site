<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container mt-4">
      <?php
        if($_COOKIE['user'] == ''):
      ?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="validation-form/chack.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрироватся</button>
          </form>
        </div>
        <div class="col">
          <h1>Форма авторизации</h1>
          <form action="validation-form/auth.php" method="post">
            <input type="text" class="
            form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизироватся</button>
          </form>
        </div>
      </div>
    <?php else: ?>
      <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a></p>
    <?php endif; ?>
    </div>
  </body>
</html>
