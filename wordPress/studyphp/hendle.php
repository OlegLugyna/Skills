<?php

//файл который получает запрос от формы 
//Два параметра
// $_GET - from method GET
//$_POST - from POST
// приходит объект 
// $_POST = { login:'login_name',
//   pass:'password_name'
// }

include('./db.php');

print_r($_POST);

echo '<h2>Вот логин и пароль</h2><br>';

$login = $_POST['login'];
$password = $_POST['pass'];

echo "Ваш логин: " . $login . '<br>';
echo '<br>';
echo "Your password: " . $password;
echo '<br><br>';

//Идем с запросом к БД
$count = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$password'");

if(mysqli_num_rows($count)==0) {
  echo 'Вы не зарегистрированы :))';
}else {
  echo 'Добро пожаловать на сайт:  ' . $login;
}