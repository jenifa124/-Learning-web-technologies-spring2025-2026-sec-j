<?php
$message = "";

if (isset($_POST['submit'])) {
    $blood = $_POST['blood'];

    if ($blood == "") {
        $message = "Please select a blood group!";
    } else {
        $message = "Selected Blood Group: " . $blood;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Input</title>
</head>
<body>

<form method="post" action="">
    Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>