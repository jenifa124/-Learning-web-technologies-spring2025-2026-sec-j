<?php
include '../auth.php';

if (!isset($_SESSION['logged_in'])) {
    echo "Not logged in!";
    exit();
}

$username = $_SESSION['logged_in'];

if (!isset($_SESSION['users'][$username])) {
    echo "User data not found!";
    exit();
}

$user = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<table border="1" width="900" align="center" cellspacing="0" cellpadding="0">

<tr>
<td colspan="2" style="padding:20px;">
    <span style="font-size:40px; color:green; font-weight:bold;">X</span>
    <span style="font-size:25px; font-weight:bold;">Company</span>

    <span style="float:right;">
        Logged in as <a href="../F/view_profile.php"><?php echo $user['name']; ?></a> |
        <a href="../logout/logout.php">Logout</a>
    </span>
</td>
</tr>

<tr>
<td width="250" valign="top" style="padding:20px;">
    <b>Account</b>
    <hr>

    <ul>
        <li><a href="../E/dashboard.php">Dashboard</a></li>
        <li><a href="../F/view_profile.php">View Profile</a></li>
        <li><a href="../G/edit_profile.php">Edit Profile</a></li>
        <li><a href="../H/change_picture.php">Change Profile Picture</a></li>
        <li><a href="../I/change_password.php">Change Password</a></li>
        <li><a href="../logout/logout.php">Logout</a></li>
    </ul>
</td>

<td valign="top" style="padding:20px;">
    <h2>Welcome <?php echo $user['name']; ?></h2>
</td>
</tr>

<tr>
<td colspan="2" align="center">Copyright &copy; 2017</td>
</tr>

</table>

</body>
</html>