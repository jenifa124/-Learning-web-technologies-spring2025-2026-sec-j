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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth Input</title>
</head>
<body>

<form method="post" action="">
    Date of Birth:
    <input type="text" name="day" size="2" placeholder="dd"> /
    <input type="text" name="month" size="2" placeholder="mm"> /
    <input type="text" name="year" size="4" placeholder="yyyy">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>