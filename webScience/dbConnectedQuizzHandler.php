<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>

      <table class="table table-responsive">
      <?php

      $tableName = 'key_language';
      $servername = 'localhost';
      $databseName = 'computerscience_notes';

      $con = new mysqli($servername,'root','',$databseName);

      $mark = 0;
      for ($i=0; $i < 10; $i++) {
        if (isset($_GET[$i])) {
          $id[$i] = $_GET[$i];
          $SQL = "SELECT * FROM $tableName WHERE question_id='" . $_GET[$i] . "'";
          $result = mysqli_query($con, $SQL);
          if($result === FALSE) {
              echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                //echo "id: " . $row["id"]. " Question id:" . $row['question_id'] . " key point: " . $row['key_point'] . '<br>';
                if (strpos($_GET[$row['question_id']], $row['key_point']) !== false && isset($_GET[$row['question_id']])) {
                  $correct = "<i class='fa fa-check' ></i>";
                  $rowStyle = "table-success";
                  $mark++;
                }else {
                  $correct = "";
                  $rowStyle = "";
                }
                $echoString = "<tr class='$rowStyle'><td>Question ". ($i + 1) ." </td><td></td><td>$correct</td></tr>";
                echo $echoString;
              }
          }
        }

      }


      ?>

     </table>
     <?php
       echo "Total mark - $mark";
       ?>
  </body>

  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
