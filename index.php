<html>
  <!-- header include -->
  <!-- for webhost change to this format -->
  <?php include 'includes/header.php'; ?>
  <body>
    <!-- Nav Include -->
      <?php include 'includes/nav.php'; ?>

      <?php // TODO:  Change the routing system so that the page doesnt hav eot be passed in as a paramete and instead as just a url?>
      <?php
      if (isset($_GET['link'])) {
        //echo $_GET['link'] . '.php';
        if (file_exists($_GET['link'] . '.php')) {
          include $_GET['link'] . '.php';
        }else {
          include '404.php';
        }
      }else {
        include 'main.php';
      } ?>

  </body>
  <!-- JavaScript Include -->
  <?php include 'includes/javaScriptCdn.php'; ?>

</html>
