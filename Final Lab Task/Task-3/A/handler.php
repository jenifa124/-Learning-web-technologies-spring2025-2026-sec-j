<?php
$message = "";

if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if ($day == "" || $month == "" || $year == "") {
        $message = "Null date of birth!";
    } else {
        $message = "Entered DOB: " . $day . "/" . $month . "/" . $year;
    }
} else {
    $message = "Please submit the form first.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB Handler</title>
</head>
<body>

<?php echo $message; ?>

</body>
</html>