<?php

require_once 'include/config.php';

if (isset($_POST['upload'])) {
    $file_name = $_FILES['myfile']['name'];

    $file_tmp_name = $_FILES['myfile']['tmp_name'];

    if (move_uploaded_file($file_tmp_name, "Font/" . $file_name)) {
        
        $mesg = "<script>window.alert('A new Font face Upload Successful...');</script>";
        echo $mesg;

        // Get file name without extension
        $filenameWithoutExtension = pathinfo($file_name, PATHINFO_FILENAME);

        // Output the filename without extension
        $mesg1 = "<script>if(confirm('Click Ok To Insert New Font Faces')){document.location.href='admin.php#dashboard'};</script>";
        echo $mesg1;
        $mesg1 = "<script>window.alert('This is new font face ' + $filenameWithoutExtension);</script>";
        echo $mesg1;
    } else {
        $errorMesg = "<script>window.alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
        echo $errorMesg;
    }
}
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // SQL to insert data into the database
    $sql = "INSERT INTO `font_table` (font_name, file_name) VALUES ('$filenameWithoutExtension', '$file_name')";

    if ($conn->query($sql) === TRUE) {
        $mesg = "<script>window.alert('A new Font face Upload Successful...');</script>";
        echo $mesg;
    } else {
        $errorMesg = "<script>window.alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
        echo $errorMesg;
    }
}
?>