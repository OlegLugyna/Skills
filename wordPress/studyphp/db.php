<?php
//Создаем специальный файл для подключения к БД

$connect = mysqli_connect('localhost', 'root', '', 'test_db');

if ($connect==false) {
  echo "Не удалось подключиться к базе данных";
  echo mysqli_connect_error();
  exit();
} else {
  echo 'Good connection. Cool!';
}