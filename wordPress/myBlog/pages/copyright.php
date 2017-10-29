<?php
require '../includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['title']?></title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <header id="header">
      <?php include '../includes/header.php'; ?>
    </header>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>Информация правообладателям</h3>
              <div class="block__content">
                <h4>Impotant information</h4>

                <div class="full-text">
                  <p>So moving called image fish. Created him he darkness subdue morning form fourth set third give the. Gathering cattle make let so you're grass whales won't moving. Of he won't to gathered saying heaven under, creature form moveth replenish. Give fish. Deep one them herb herb appear our air bring sixth were doesn't. Creature to fruit place doesn't place female second beginning man lesser. Unto wherein image two yielding. Thing and saw his, had under creepeth. Air abundantly very spirit, the our of can't. Fruit they're to. Him place own after under. After shall moveth whose green.

                  Female rule bring gathered creature first evening day forth land abundantly won't waters let she'd after unto. Seas him beast his tree likeness, signs upon let one. Our he don't. Fly land heaven creeping you moved is for green created. I seas land days, evening moved can't creepeth image the. God forth may winged. Have.

                  He every signs. For, air. Fruitful darkness great behold male, creature thing let. Have earth blessed bring you'll to above, i over from was whales fifth. Open saying form thing own Creature creature whose bearing land called signs years unto for fill make years fruit let night said.
                  </p>

                </div>
              </div>
            </div>
          </section>
          <section class="sidebar content__right col-md-4">
            <?php include '../includes/sidebar.php'; ?>
          <section> <!-- SIDEBAR -->
        </div>
      </div>
    </div>

    <footer id="footer">
      <?php include '../includes/footer.php'; ?>
    </footer>

  </div>

</body>
</html>