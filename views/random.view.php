<div id="banner" class="jumbotron text-center">
    <div class="display-4 mb-4" >Vote your answer !</div>
    <div class="container-form">
        <div class="poll-area p-4">
            <input class="form-control" type="text" id="question" placeholder="Type your question here" readonly="true">
            <hr class="divider">
            <input class="form-control" type="checkbox" name="poll" id="opt-1">
            <input class="form-control" type="checkbox" name="poll" id="opt-2">
            <input class="form-control" type="checkbox" name="poll" id="opt-3">
            <input class="form-control" type="checkbox" name="poll" id="opt-4">
            <label for="opt-1" class="opt-1">
                <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text poll-answer">HTML</span>
                </div>
                <span class="percent">30%</span>
                </div>
                <div class="progress" style='--w:30;'></div>
            </label>
            <label for="opt-2" class="opt-2">
                <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text poll-answer">Java</span>
                </div>
                <span class="percent">20%</span>
                </div>
                <div class="progress" style='--w:20;'></div>
            </label>
            <label for="opt-3" class="opt-3">
                <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text poll-answer">Python</span>
                </div>
                <span class="percent">40%</span>
                </div>
                <div class="progress" style='--w:40;'></div>
            </label>
            <label for="opt-4" class="opt-4">
                <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text poll-answer">jQuery</span>
                </div>
                <span class="percent">10%</span>
                </div>
                <div class="progress" style='--w:10;'></div>
            </label>
            <button type="submit" class="mt-2 btn submit shiny grow">Next poll</button>

        </div>
  </div>
</div>