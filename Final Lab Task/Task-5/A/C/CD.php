<?php
$message = "";
$degree = array();

if (isset($_POST['submit'])) {
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree'];
        $message = "Selected Degree: " . implode(", ", $degree);
    } else {
        $message = "Please select at least one degree!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree Input</title>
</head>
<body>

<form method="post" action="">
    Degree:
    <input type="checkbox" name="degree[]" value="SSC" <?php if (in_array("SSC", $degree)) echo "checked"; ?>> SSC
    <input type="checkbox" name="degree[]" value="HSC" <?php if (in_array("HSC", $degree)) echo "checked"; ?>> HSC
    <input type="checkbox" name="degree[]" value="BSc" <?php if (in_array("BSc", $degree)) echo "checked"; ?>> BSc
    <input type="checkbox" name="degree[]" value="MSc" <?php if (in_array("MSc", $degree)) echo "checked"; ?>> MSc
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>