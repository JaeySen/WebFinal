<?php
require_once '../Classes/Poll.php'; 
require '../db/db.php';

// if(isset($_GET['polls'] )) {


// }

$poll = new Poll($conn);
$result = $poll->getPolls();
// echo "<script>console.log('" . $result . "');</script>";
// var_dump($result);
// echo $result->num_rows;
// $num_rows = $result->num_rows;
$row_count = 1;
while ($row = $result->fetch_assoc()) {
    // var_dump('"'.$row_count.'":'.json_encode($row));
    var_dump(json_encode($row));
    $row_count++;
    
}
// var_dump(json_encode($result->fetch_assoc()));