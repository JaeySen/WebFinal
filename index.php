<?php
include "includes/header.php";
?>

  <!-- Poll Form -->
  <div class="container-sm p-5">
    <div class="row">
      <form action="slideshow.php" method="post">
        <div class="form-group py-3">
          <label for="formGroupExampleInput0">Poll Quiz</label>
          <input type="text" class="form-control" id="formGroupExampleInput0">
        </div>
        <div class="form-group py-3">
          <label for="formGroupExampleInput1">Pell 1</label>
          <input type="text" class="form-control" id="formGroupExampleInput1">
        </div>
        <div class="form-group py-3">
          <label for="formGroupExampleInput2">Pell 2</label>
          <input type="text" class="form-control" id="formGroupExampleInput2">
        </div>
        <!--new input box will be inserted below here-->
      </form>
    </div>


    <div class="d-flex justify-content-between bd-highlight mb-2">
      <div class="p-2 bd-highlight">
        <button class="btn shiny grow" id="more" href="#" role="button">More Pell</button>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn shiny grow" role="button" href="#">Renew Poll</button>
      </div>
      <div class="p-2 bd-highlight">
        <button type="submit" class="btn submit shiny grow">Poll it!</button>
      </div>   
    </div>
  </div>


  <script src="js/main.js"></script>
<?php
include "includes/footer.php";
 ?>
