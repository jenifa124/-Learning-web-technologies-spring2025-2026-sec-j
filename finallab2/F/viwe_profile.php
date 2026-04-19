<?php
include '../auth.php';

if (!isset($_SESSION['logged_in'])) {
    header("Location: ../C/login.php");
    exit();
}

$username = $_SESSION['logged_in'];
$user = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
</head>
<body>

<table border="1" width="900" align="center" cellspacing="0" cellpadding="0">

    <!-- Header -->
    <tr>
        <td colspan="2" style="padding:20px;">
            <span style="font-size:40px; color:green; font-weight:bold;">X</span>
            <span style="font-size:25px; font-weight:bold;">Company</span>

            <span style="float:right;">
                Logged in as 
                <a href="../F/view_profile.php"><?php echo $user['name']; ?></a> |
                <a href="../logout/logout.php">Logout</a>
            </span>
        </td>
    </tr>

    <!-- Body -->
    <tr>

        <!-- Left Menu -->
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

        <!-- Right Content -->
        <td valign="top" style="padding:20px;">

            <fieldset>
                <legend><b>PROFILE</b></legend>

                <table width="100%">

                    <tr>
                        <td>
                            Name</td>
                        <td>:</td>
                        <td><?php echo $user['name']; ?></td>

                        <td rowspan="4" align="center">
                            <!-- Dummy Image -->
                            <div style="width:120px; height:120px; border:1px solid black;"></div>
                        </td>
                    </tr>

                    <tr><td colspan="3"><hr></td></tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>jenifa@gmail.com</td>
                    </tr>

                    <tr><td colspan="3"><hr></td></tr>

                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>Female</td>
                    </tr>

                    <tr><td colspan="3"><hr></td></tr>

                    <tr>
                        <td>Date of Birth</td>
                        <td>:</td>
                        <td>01/01/2000</td>
                        <td>
                            <a href="../H/change_picture.php">Change</a>
                        </td>
                    </tr>

                </table>

                <br>
                <a href="../G/edit_profile.php">Edit Profile</a>

            </fieldset>

        </td>

    </tr>

    <!-- Footer -->
    <tr>
        <td colspan="2" align="center" style="padding:10px;">
            Copyright &copy; 2017
        </td>
    </tr>

</table>

</body>
</html>