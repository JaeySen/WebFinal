<?php 
class Poll {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getPolls() {
        $sql = "SELECT * FROM polls";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        // $result = $stmt->get_result();
        return $stmt->get_result();
    }
}

?>


