<?php 
class Poll {
    public $quiz;
    private $id;
    public $pells = [];


    function set_quiz($quiz){
        $this->quiz = $quiz;
    }

    function get_quiz(){
        return $this->quiz;
    }
}

?>


