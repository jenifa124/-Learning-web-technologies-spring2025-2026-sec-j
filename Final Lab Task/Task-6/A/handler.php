<?php
$message = "";

if (isset($_POST['submit'])) {
    $blood = $_POST['blood'];

    if ($blood == "") {
        $message = "Please select a blood group!";
    } else {
        $message = "Selected Blood Group: " . $blood;
    }
} else {
    $message = "Please submit the form first.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Handler</title>
</head>
<body>

<?php echo $message; ?>

</body>
</html>