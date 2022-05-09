<?php
include "includes/header.php";
?>

  <div id="banner" class="jumbotron-fluid text-center">
    <h1 class="display-4" >
      Hello there, New Pollist !
    </h1>
  </div>

  <!-- Poll Carousel -->

  <!-- Poll Form -->
  <div class="container py-5">
    <form action="slideshow.php" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput0">Poll Quiz</label>
        <input type="text" class="form-control" id="formGroupExampleInput0">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput1">Option 1 </label>
        <input type="text" class="form-control" id="formGroupExampleInput1">
      </div>
      <!--new input box will be inserted below here-->

    </form>
    <!-- create your poll now with buttons-->
    <div class="container py-0 px-0 d-flex justify-content-between">
      <div class="col-md-2">
        <button class="btn shiny grow" id="more" href="#" role="button">more option</button>
      </div>
      <!-- <div class="col-md-9">
        <div class="alert alert-danger" role="alert">
          Alert
        </div> -->
      </div>
      <div class="col-md-1">
        <button type="submit" class="btn submit shiny grow">Submit</button>
      </div>
    </div>

  </div>


    <script src="main.js"></script>
<?php
include "includes/footer.php";
 ?>
