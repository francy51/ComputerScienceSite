<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>
        <?php
        $q =$_GET['question'];
        $m = $_GET['marks'];
        $s = $_GET['subject'];
        $qType = $_GET['qType'];



        $questionTable = 'questions';
        $marksTable = 'key_language';
        $servername = 'localhost';
        $databseName = 'computerscience_notes';

        $qSQL = "INSERT INTO $questionTable (question_text, total_marks, topic,question_type) VALUES ('$q','$m','$s','$qType')";

        $con = new mysqli($servername,'root','',$databseName);
        if (!$con) {
          echo "<h1> Connection Failed </h1>";
        }
        else{
          if (mysqli_query($con, $qSQL)) {
            echo $_GET['question'];
            echo "<br>";
            $result = mysqli_query($con, "SELECT id FROM $questionTable WHERE question_text = '$q' AND topic = '$s' ");
            if($result === FALSE) {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo "id: " . $row["id"]. "<br>";
                  $id = $row['id'];
                }
              } else {
                echo "0 results";
              }
              for ($x = 0; $x <= $_GET['marks'] - 1; $x++) {

                echo "Mark N.", $x + 1," is:", $_GET[$x]," <br>";

                $language = $_GET[$x];
                $sql = "INSERT INTO $marksTable (question_id,key_point) VALUES ('$id','$language') ";
                if (mysqli_query($con, $sql)) {
                  echo "SUCCESSFULL PUSH TO DB <br>";
                }else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
              }



            echo "This combines for ", $_GET['marks'], " marks total <br>";
            echo "This question belongs to the ", $_GET['subject'] ," topic";


          } else {
            echo "Error: " . $qSQL . "<br>" . mysqli_error($con);
          }


        }

        mysqli_close($con);
        ?>


      </h1>




  </body>

  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
