<?php
//header('Content-Type: text/html; charset=utf-8');// кирилица

// $connect = mysqli_connect('localhost', 'root', '', 'test_db');

// if ($connect==false) {
//   echo "Не удалось подключиться к базе данных";
//   echo mysqli_connect_error();
//   exit();
// } else {
//   echo 'Good connection. Cool!';
// }  подключение к БД переносим в спец файл db.php
// и подключаем его через метод

include('./db.php');


$result = mysqli_query($connect, 'SELECT * FROM `articles_categories`');

$length = mysqli_num_rows($result);
echo '<span><h1> Найдено записей: ' . $length . '</h1></span>';

//Можно код дробить на части

if($length == 0) {
  echo '<h3>Категорий не найдено</h3>';
}else {
  echo '<h3>Список найденных категорий:</h3>';
  ?>
  <ul>
    <?php 
    
    while( ($categ=mysqli_fetch_assoc($result))) {
      //$articals_count = mysqli_query($connect, 'SELECT * FROM `articls` WHERE `categories_id`=' . $categ['id']); //запрос количества статей
      //более правильная запись. Для продуктивной работы сервера и браузера
      $articals_count = mysqli_query($connect, 'SELECT COUNT(`id`) AS `total_count` FROM `articls` WHERE `categories_id`=' . $categ['id']);
      $articals_count_result = mysqli_fetch_assoc($articals_count);

      
      //echo '<li>' . $categ['title'] . '(' . mysqli_num_rows($articals_count) . ')' . '</li>'; // обший вывод
      //с учетом верхних изменений
      echo '<li>' . $categ['title'] . '(' . $articals_count_result['total_count'] . ')' . '</li>';
    }
    ?>
  </ul>
  <?php
}
  ?>



<!-- <ul>
  //<?php 
  
  //while( ($categ=mysqli_fetch_assoc($result))) {
    
    //echo '<li>' . $categ['title'] . '</li>';
  //}
  // ?>
</ul> -->

<?php
  mysqli_close($connect);

  //Работа с датой и временем

  echo 'Сегодня: ' . date('d-m-Y-D') . '<br>';

  $start_date = '01-10-2017';
  $start_date_timestamp = strtotime($start_date);
  $diff = time() - $start_date_timestamp;
  $days = floor((($diff/60)/60)/24); //количество прошедших дней разница
  
  echo 'Между ' . date('d-m-Y', $start_date_timestamp) . ' и ' . date('d-m-Y') . ' прошло ' . $days . ' дней.';
  
  ?>

  <h2>Работа с формами</h2>
  <hr>
  <br>
  <form action="hendle.php" method="POST">
    <input type="text" placeholder="Your login here" name="login">
    <input type="password" placeholder="Your password" name="pass">
    <hr>
    <input type="submit" value="Submit">
  
  </form>
   
