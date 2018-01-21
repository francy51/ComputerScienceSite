<!-- Nav Include -->
<html>

  <!-- header include -->

  <!-- for webhost change to this format -->

  <?php include '../includes/header.php'; ?>

<body>
  <?php include '../includes/nav.php'; ?>


  <div class="container-fluid">
    <h1 class="text-center">The Quizz</h1>
    <h4 class="text-center" >This is <b>THE QUIZZ</b></h4>

<div class="jumbotron">

  <form action="formHandler.php" method="get">
    <div class="form-group">
      <label for="nameInput">Name</label>
      <input type="text" class="form-control" name="nameInput" id="nameInput" aria-describedby="namehelp" placeholder="Enter name">
      <small id="namehelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="DOB">Date of Birth</label>
      <input type="date" name="DOB" value="2011-08-19" class="form-control">
    </div>
    <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control" id="gender">
        <option>Male</option>
        <option>Female</option>

      </select>
    </div>
    <div class="form-group">
      <label for="Q1" class="">Q1. What is a protocol?</label>
      <textarea name="Q1" class="form-control" id="Q1" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
      <legend>Q2. Which one is a protocol?</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q2" id="TCP" value="TCP" checked>
          TCP
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q2" id="ASCII" value="ASCII">
          ASCII
        </label>
      </div>
      <div class="form-check ">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q2" id="UniCode" value="UniCode">
          Uni Code
        </label>
      </div>
      <div class="form-check ">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q4" id="USB" value="USB">
          USB
        </label>
      </div>
    </fieldset>
    <div class="form-group">
      <label for="Q3" class="">Q3. What is an open standard?</label>
      <textarea class="form-control" name="Q3" id="Q3" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
      <legend>Q4. Which one is an open standard?</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q4" id="TCP" value="TCP" checked>
          TCP
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q4" id="ASCII" value="ASCII">
          ASCII
        </label>
      </div>
      <div class="form-check ">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q4" id="UniCode" value="UniCode">
          Uni Code
        </label>
      </div>
      <div class="form-check ">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="Q4" id="USB" value="USB">
          USB
        </label>
      </div>
    </fieldset>


<div class="form-group">
  <label for="Q5" class="">Q5. What is interoperability?</label>
  <textarea class="form-control" name="Q5" id="Q5" rows="3"></textarea>
</div>
  </div>
  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
</div>
</body>

<!-- JavaScript Include -->

<?php include '../includes/javaScriptCdn.php'; ?>
</html>
