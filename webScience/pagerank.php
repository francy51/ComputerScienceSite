<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>

      <h1 class="text-center">PageRank</h1>
      <div class="text-center">

        <img src="https://s-media-cache-ak0.pinimg.com/originals/50/9a/24/509a2475f7001d3d97e9b3fbc8fe1818.jpg" alt="Page rank diagram">
        <p class="">
          Page rank is determined by the amount of in-links and out-links.
          <br>
          Everytime a webpage has an out-link it gives part of its rank to the webpage it links to.
          <br>
          Everytime a webpage has an in-link it gives part it gains part of the rank of the webpage it is being routed from.
          <br>
          This means that the websites with the greatest page rank have the most in-links.
          <br>

          If a website with a high page rank has a link the webpage which that link leads to gains a greater amount of point than if a lower ranked page linked it.

        </p>
      </div>



  </body>

  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
