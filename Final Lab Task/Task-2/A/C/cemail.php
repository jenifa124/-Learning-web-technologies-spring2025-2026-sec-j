<?php
$message = "";
$email = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    if ($email == "") {
        $message = "Null email!";
    } else {
        $message = "Entered Email: " . $email;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Input</title>
</head>
<body>

<form method="post" action="">
    Email: <input type="text" name="email" value="<?php echo $email; ?>"> <br>
    <input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</body>
</html>