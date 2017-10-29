<div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $config['title'];?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Главная</a></li>
              <li><a href="/pages/about_me.php">Обо мне</a></li>
              <li><a href="<?php echo $config['fb_url']; ?>">Facebook</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Пропишем запрос к БД -->
      <?php 
      $categories_q = mysqli_query($connect, "SELECT * FROM `articles_categories`");
      $categories = array();
      while($cat=mysqli_fetch_assoc($categories_q)) {
        $categories[] = $cat;
      }

      ?>
      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              <?php
              foreach($categories as $cat)
              {
              ?>
              <li><a href="/categories.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></a></li>
              <?php
              }
              ?>

              <!-- <li><a href="#">Программирование</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Музыка</a></li>
              <li><a href="#">Саморазвитие</a></li>
              <li><a href="#">Гайды</a></li>
              <li><a href="#">Обзоры</a></li> -->
            </ul>
          </nav>
        </div>
      </div>