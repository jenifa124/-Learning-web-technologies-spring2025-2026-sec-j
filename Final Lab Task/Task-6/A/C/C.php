<?php
$message = "";
$blood = "";

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
        <option value="A+" <?php if ($blood == "A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if ($blood == "A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if ($blood == "B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if ($blood == "B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if ($blood == "O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if ($blood == "O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if ($blood == "AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if ($blood == "AB-") echo "selected"; ?>>AB-</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>