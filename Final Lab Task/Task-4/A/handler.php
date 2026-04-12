<?php
$message = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        $message = "Selected Gender: " . $gender;
    } else {
        $message = "Please select a gender!";
    }
} else {
    $message = "Please submit the form first.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Handler</title>
</head>
<body>

<?php echo $message; ?>

</body>
</html>