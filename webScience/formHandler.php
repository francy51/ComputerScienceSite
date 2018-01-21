<!-- Nav Include -->
<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

<body>
  <?php include '../includes/nav.php'; ?>

  <?php
  if (isset($_GET['nameInput'])) {
    echo "Thank you " , $_GET['name'] ," for completing the quizz <br>" ;

  }

$answers = array(
'Q1' => 'rules','Q2' => 'TCP',
'Q3' => 'An open standard is a standard that is publicly available and has various rights to use associated with it.','Q4' => 'USB',
'Q5' => 'the ability of computer systems or software to exchange and make use of information.');


  echo '<h2> Here are the answers you submitted:</h2><br>
  <table class="table table-responsive">';
  $score = 0;
  foreach($_GET as $field => $value) {

    if (isset($answers[$field])) {
      if (strpos($value, $answers[$field]) !== false) {
        $correct = "<i class='fa fa-check' ></i>";
        $rowStyle = "table-success";
        $score += 1;
      }else {
        $correct = "<i class='fa fa-times' ></i>";
        $rowStyle = "table-danger";
      }
    }else {
      $correct = "";
      $rowStyle = "";
    }
    $echoString = "<tr class='$rowStyle'><td>$field</td><td>$value</td><td>$correct</td></tr>";
    echo $echoString;
  }
  echo "<tr><td>Total Score</td><td></td><td>$score</td></tr>";
  echo '</table></div>';





     ?>


</body>

<!-- JavaScript Include -->

<?php include '../includes/javaScriptCdn.php'; ?>
</html>
