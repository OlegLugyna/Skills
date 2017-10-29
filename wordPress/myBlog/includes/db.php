<?php
//Создаем специальный файл для подключения к БД

$connect = mysqli_connect(
  $config['db']['server'],
  $config['db']['username'],
  $config['db']['password'],
  $config['db']['name']
);

if ($connect==false) {
  echo "Не удалось подключиться к базе данных";
  echo mysqli_connect_error();
  exit();
} else {
  echo 'Good connection. Cool!';
}