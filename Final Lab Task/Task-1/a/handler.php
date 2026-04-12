<?php
 
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
 
    if ($name == "") {
        echo "Name is empty!";
    } else {
        echo "Hello, " ($name);
    }
} else {
    echo "Please submit the form first.";
}
 
 
?>