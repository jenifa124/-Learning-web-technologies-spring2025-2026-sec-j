<?php
$message = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        $message = "Selected Gender: " . $gender;
    } else {
        $message = "Please select a gender!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Input</title>
</head>
<body>

<form method="post" action="">
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>