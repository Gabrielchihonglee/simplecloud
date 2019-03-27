<?php
function connectDb() {
    $conn = mysqli_connect("HOSTNAME","USERNAME","PASSWORD","DBNAME");
    return $conn;
}
?>
