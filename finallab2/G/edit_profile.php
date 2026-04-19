<?php
include '../auth.php';

if (!isset($_SESSION['logged_in'])) {
    header("Location: ../C/login.php");
    exit();
}

$username = $_SESSION['logged_in'];
$user = $_SESSION['users'][$username];
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $dob = trim($_POST['dob']);

    if ($name == "" || $email == "" || $gender == "" || $dob == "") {
        $error = "Null submission!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email!";
    } else {
        $_SESSION['users'][$username]['name'] = $name;
        $_SESSION['users'][$username]['email'] = $email;
        $_SESSION['users'][$username]['gender'] = $gender;
        $_SESSION['users'][$username]['dob'] = $dob;

        header("Location: ../F/view_profile.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
                <legend><b>EDIT PROFILE</b></legend>

                <form method="post">
                    <table width="100%" cellpadding="8">

                        <tr>
                            <td width="120">Name</td>
                            <td width="20">:</td>
                            <td>
                                <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" style="width:200px;">
                            </td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" style="width:200px;">
                            </td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="gender" value="Male" <?php if ($user['gender'] == 'Male') echo 'checked'; ?>> Male
                                <input type="radio" name="gender" value="Female" <?php if ($user['gender'] == 'Female') echo 'checked'; ?>> Female
                                <input type="radio" name="gender" value="Other" <?php if ($user['gender'] == 'Other') echo 'checked'; ?>> Other
                            </td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>" style="width:200px;"><br>
                                (dd/mm/yyyy)
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

                <p style="color:red;"><?php echo $error; ?></p>
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