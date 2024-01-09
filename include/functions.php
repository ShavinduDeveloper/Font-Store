<?php 
function GetFontTable($conn){
    $resultArray = array();

    $sql = "SELECT * FROM `font_table`;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $resultArray[] = $row;
        }
    }

    return $resultArray;
}