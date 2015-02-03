<?php
define("DB_HOST", "sql203.byethost8.com");
define("DB_NAME", "b8_15801210_VYPR");
define("DB_USER", "b8_15801210");
define("DB_PASS", "Catfish99");
$ID = $_REQUEST['submissionid'];
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = "DELETE FROM Submissions WHERE ID = '".$ID."'";
if (mysqli_query($link, $query)) {
    header('Location: /submissions');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
?>