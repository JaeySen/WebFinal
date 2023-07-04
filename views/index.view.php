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
                  <input type="text" class="form-control" id="answer1" placeholder="Type your answer here">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer2">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer3">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="answer4">
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

        <div class="row py-5">
          <!-- <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">
                Some quick example text to build on the card title
                and make up the bulk of the card's content.
              </p>
              <a href="#!" class="card-link">Card link</a>
              <a href="#!" class="card-link">Another link</a>
            </div>
          </div> -->
          <div class="container d-flex flex-column border border-dark" id="question-display">
            Question
            <div class="row d-flex justify-content-center">
              <div class="col-6 border border-dark answer-card">Answer 1</div>
              <div class="col-6 border border-dark answer-card">Answer 2</div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-6 border border-dark answer-card">Answer 3</div>
              <div class="col-6 border border-dark answer-card">Answer 4</div>
            </div>
          </div>

        </div>


        <div class="container pt-3 pl-3">          
          <div class="row align-self-end justify-content-between">
            <a class="btn shiny grow" id="" href="#" role="button">See Poll</a>
            <a class="btn submit flip-back shiny grow" id="reset" href="#" role="button">New poll</a>
          </div>
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




