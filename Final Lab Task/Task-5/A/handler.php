<?php
$message = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree'];
        $message = "Selected Degree: " . implode(", ", $degree);
    } else {
        $message = "Please select at least one degree!";
    }
} else {
    $message = "Please submit the form first.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree Handler</title>
</head>
<body>

<?php echo $message; ?>

</body>
</html>