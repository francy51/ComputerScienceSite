<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

  <body>

    <!-- Nav Include -->

      <?php include '../includes/nav.php'; ?>

      <div class="container-fluid pt-5">
        <form class="form" action="QuestionCreationForm.php" method="get">
          <div class="form-group">
            <label for="question">Question?</label>
            <input type="text" class="form-control" id="question" name="question"
            value=<?php if (isset( $_GET['question'])) {
              echo $_GET['question'];
            }  ?>
         >
          </div>

          <div class="form-group">
            <label for="marks">Total Marks?</label>
            <input type="number" class="form-control" id="marks" name="marks"
            value=<?php if (isset( $_GET['marks'])) {
              echo $_GET['marks'];
            }  ?>
             placeholder="1" required>
          </div>

          <div class="form-group">
            <label for="subject">Subject?</label>
            <input type="text" class="form-control" id="subject" name="subject"
            value=<?php if (isset( $_GET['subject'])) {
              echo $_GET['subject'];
            }  ?>  >
          </div>

          <div class="form-group">
            <label for="subject">Question Type (0 is text. 1 is radio. Everything else will be treated as text)</label>
            <input type="number" class="form-control" id="subject" name="qType"
            value=<?php if (isset( $_GET['qType'])) {
              echo $_GET['qType'];
            }  ?>  >
          </div>

          <button class="btn" type="submit">submit</button>
        </form>
      </div>


<div class="container-fluid pt-5" >


      <?php
      if (isset($_GET['marks'])) {
        echo '<form class="form" action="QuestionCreationFormHandler.php" method="get">';


         for ($idea=0; $idea < $_GET['marks']; $idea++) {

          echo ' <div class="form-group"> <label for=" ',$idea + 1,'">Answer ',$idea,' </label>
            <input type="text" class="form-control" id="',$idea,'" name="',$idea,'" required>
          </div>';


        }
        echo "<button class=\"btn\" type=\"submit\">submit</button>";
        echo "  <div class='invisible form-group'><label for='question'>Question?</label><input type='text' class='form-control' id='question' name='question' value='",$_GET['question'],"'";
        echo "  <div class='invisible form-group'><label for='subject'>Subject?</label><input type='text' class='form-control' id='subject' name='subject' value='",$_GET['subject'],"'";
        echo "  <div class='invisible form-group'><label for='marks'>Marks?</label><input type='number' class='form-control' id='marks' name='marks' value='",$_GET['marks'],"'";
        echo "<div class='invisible form-group'><label for='qType'>Type? 0 is text. 1 is radio.</label><input type='number' class='form-control' id='marks' name='qType' value='",$_GET['qType'],"'";
        echo "
        <div class=\"form-group invisible\">
          <label for=\"marks\">Total Marks?</label>
          <input type=\"number\" class=\"form-control\" id=\"marks\" name=\"marks\"
          value=", $_GET['marks']," placeholder=\"1\" required>
        </div>";
        echo "</form>";
      }

      ?>
</div>

  </body>

  <!-- JavaScript Include -->

  <?php include '../includes/javaScriptCdn.php'; ?>



</html>
