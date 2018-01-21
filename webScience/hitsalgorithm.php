<html>

  <!-- header include -->
  
  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>


      <?php // TODO:  Change the routing system so that the page doesnt hav eot be passed in as a paramete and instead as just a url?>

      <div class="text-center">
        <h1>HITS algorithm</h1>
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/SetsEN.jpg" alt="">
      </div>
      <p >
        <div class="">

          The Hub score and Authority score for a node is calculated with the following algorithm:
          <ol>
            <li>
              Start with each node having a hub score and authority score of 1.
            </li>
            <li>
              Run the Authority Update Rule
            </li>
            <li>
              Run the Hub Update Rule
            </li>
            <li>
              Normalize the values by dividing each Hub score by square root of the sum of the squares of all Hub scores, and dividing each Authority score by square root of the sum of the squares of all Authority scores.
            </li>
            <li>
              Repeat from the second step as necessary.
            </li>
          </ol>
          major differences:

          <ul>
            <li>
              It is query dependent, that is, the (Hubs and Authority) scores resulting from the link analysis are influenced by the search terms;
            </li>
            <li>
              As a corollary, it is executed at query time, not at indexing time, with the associated hit on performance that accompanies query-time processing.
            </li>
            <li>
              It is not commonly used by search engines. (Though a similar algorithm was said to be used by Teoma, which was acquired by Ask Jeeves/Ask.com.)
            </li>
            <li>
              It computes two scores per document, hub and authority, as opposed to a single score;
            </li>
            <li>
              It is processed on a small subset of ‘relevant’ documents (a 'focused subgraph' or base set), not all documents as was the case with PageRank.
            </li>
          </ul>
        </div>
      </p>



  </body>

  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
