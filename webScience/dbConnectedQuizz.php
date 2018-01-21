<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>
    <div class="alert alert-danger">
      <strong>Warning!</strong> This quizz was made using my own device. <strong>It is not setup to work on the website. If you try and force this page to work you might brake the site.</strong>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>

      <form class="form" action="dbConnectedQuizzHandler.php" method="get">


      <?php

      $wordBank = ['TCP','SQL','C++','USB','TCP','UDP','SSL']

      $questionTable = 'questions';
      $servername = 'localhost';
      $databseName = 'computerscience_notes';

      $con = new mysqli($servername,'root','',$databseName);

      if (isset( $_Get['Topic'])) {
        $T = $_GET['Topic'];
        $SQL = "SELECT * FROM $questionTable WHERE topic='$T' LIMIT 10";
      }else {
        $SQL = "SELECT *
                FROM $questionTable
                LIMIT 10";
      }


        $result = mysqli_query($con, $SQL);
        if($result === FALSE) {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        $counter = 0;
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $id = $row["id"];
              $m = $row['total_marks'];
              $t = $row['question_type'];
              echo "<input class=\"invisible\" type=\"number\" name=\"$counter\" value=\"$id\">";
              $counter++;

              //echo "id: " . $row["id"]. " Question:" . $row['question_text'] . "Topic: " . $row['topic'] . '<br>';
              $q= $row['question_text'];
              if ($t == 1) {

                $radioSQL = "SELECT DISTINCT key_point FROM key_language WHERE question_id=$id"

                $result = mysqli_query($con, $radioSQL);
                if($result === FALSE) {
                  echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
                while($row = mysqli_fetch_assoc($result)) {
                  $a = $row['key_point'];

                }
                $radioSet = false;
                echo "<div class=\"form-group\">";
                       for ($i=4; $i < ; $i++) {
                         $numb = Trunc(rand(0,$wordBank.length + 10));
                         if ($numb > $wordBank.length && $radioSet == false) {
                           echo "<input type=\"radio\" name=\"$id\" value=\"$a\">";
                           $radioSet = true;
                         }else {
                           if ($i==4 && $radioSet == false) {
                             echo"<input type=\"radio\" name=\"$id\" value=\"$a\">";
                           }else {
                             while ($numb < $wordBank.length && $wordBank[$numb] != $a) {
                               $numb = Trunc(rand(0,$wordBank.length + 10));
                             }
                             echo"<input type=\"radio\" name=\"$id\" value=\"",$wordBank[$numb],"\">";
                          }
                         }
                       }

                echo"</div>";
              }else {
                if ($m > 1) {

                  echo "
                    <div class=\"form-group\">
                        <label for=\"$id\">$q</label>
                        <textarea name=\"$id\" class=\"form-control\" id=\"$id\" rows=\"3\"></textarea>
                    </div>";
                }else {
                  echo "
                  <div class=\"form-group\">
                    <label for=\"$id\">$q</label>
                    <input type=\"text\" class=\"form-control\" name=\"$id\" id=\"$id\" aria-describedby=\"namehelp\" >
                  </div>";
                }
              }




            }
        }


       ?>

       <button class="btn" type="submit">Submit</button>
    </form>
  </body>
  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
