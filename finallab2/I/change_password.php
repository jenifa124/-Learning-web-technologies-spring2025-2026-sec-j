<?php
include '../auth.php';

if (!isset($_SESSION['logged_in'])) {
    header("Location: ../C/login.php");
    exit();
}

$username = $_SESSION['logged_in'];

if (!isset($_SESSION['users'][$username])) {
    echo "User not found!";
    exit();
}

$user = $_SESSION['users'][$username];
$message = "";
$messageColor = "red";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current = trim($_POST['current_password']);
    $new = trim($_POST['new_password']);
    $retype = trim($_POST['retype_password']);

    if ($current == "" || $new == "" || $retype == "") {
        $message = "Null submission!";
    } elseif ($current != $user['password']) {
        $message = "Current password is incorrect!";
    } elseif ($new == $current) {
        $message = "New password must be different from current password!";
    } elseif ($new != $retype) {
        $message = "New password and retype password do not match!";
    } else {
        $_SESSION['users'][$username]['password'] = $new;
        $message = "Password changed successfully!";
        $messageColor = "green";
        $user = $_SESSION['users'][$username];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>

<table border="1" width="900" align="center" cellspacing="0" cellpadding="0">

    <tr>
        <td colspan="2" style="padding:20px;">
            <span style="font-size:40px; color:green; font-weight:bold;">X</span>
            <span style="font-size:25px; font-weight:bold;">Company</span>

            <span style="float:right;">
                Logged in as <a href="../F/view_profile.php"><?php echo htmlspecialchars($user['name']); ?></a> |
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
            <fieldset>
                <legend><b>CHANGE PASSWORD</b></legend>

                <form method="post">
                    <table width="100%" cellpadding="8">

                        <tr>
                            <td width="170">Current Password</td>
                            <td width="20">:</td>
                            <td>
                                <input type="password" name="current_password" style="width:180px;">
                            </td>
                        </tr>

                        <tr>
                            <td style="color:green;">New Password</td>
                            <td style="color:green;">:</td>
                            <td>
                                <input type="password" name="new_password" style="width:180px;">
                            </td>
                        </tr>

                        <tr>
                            <td style="color:red;">Retype New Password</td>
                            <td style="color:red;">:</td>
                            <td>
                                <input type="password" name="retype_password" style="width:180px;">
                            </td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td colspan="3">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>

                    </table>
                </form>

                <p style="color:<?php echo $messageColor; ?>;"><?php echo $message; ?></p>
            </fieldset>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center" style="padding:10px;">
            Copyright &copy; 2017
        </td>
    </tr>

</table>

</body>
</html>