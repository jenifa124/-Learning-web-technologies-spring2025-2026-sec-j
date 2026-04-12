<?php
 
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
 
    if ($email == "") {
        echo "Email is empty!";
    } else {
        echo "Email: " . $email;
    }
} else {
    echo "Please submit the form first.";
}
 
 
?>