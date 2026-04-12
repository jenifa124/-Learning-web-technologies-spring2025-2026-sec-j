<!DOCTYPE html>
<html>
<head>
    <title>B - Name</title>
</head>
<body>

<form method="post">
    Name: <input type="text" name="name" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo "<h3> Hello " . $_POST['name'] . "</h3>";
}
?>

</body>
</html>