<?php
include "includes/header.php";
?>

<link rel="stylesheet" href="./css/style.css">

<?php
include "includes/navbar.php";
?>


<div id="banner" class="jumbotron text-center">
  <div class="display-4 mb-4">Create a Poll in Seconds!</div>
  <div class="container-form p-4" id="form">
    <div class="flipper">
      <div class="front">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="question" placeholder="Type your question here">
          </div>
          <hr class="divider">
          <div class="poll-answers overflow-auto">
            <div class="form-group">
              <input type="text" class="form-control" id="answer4">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="answer3">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="answer2">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="answer1" placeholder="Type your answer here">
            </div>
          </div>    
        </form>

        <div class="container pt-3 px-0 d-flex justify-content-between">
          <a class="btn shiny grow" id="more" href="#" role="button">More answer</a>
          <button type="submit" class="btn submit shiny grow">Create poll</button>
        </div>
      </div>

      <div class="back">
        <div class="row">
          <div class="col-11">
            <!-- <label for="link">Link to poll: </label> -->
            <input class="form-control" type="text" placeholder="Readonly input here..." readonly>

          </div>
          <div class="col-1">
          <a class="btn btn-outline-dark" href="#" role="button"><i class="far fa-copy"></i></a>

          </div>
        </div>


        <div class="container pt-3 px-0 d-flex justify-content-end">
          <div class="row align-self-end">
            <a class="btn submit flip-back shiny grow" href="#" role="button">New poll</a>
          </div>
          
          <!-- <button type="submit" class="btn submit shiny grow">Create poll</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="flip-container container-form">
    <div class="flipper">
      <div class="front">

      </div>

      <div class="back">

      </div>
    </div>
  </div> -->
</div>


<script type="text/javascript" src="js/main.js"></script>
<?php
include "includes/footer.php";
 ?>
