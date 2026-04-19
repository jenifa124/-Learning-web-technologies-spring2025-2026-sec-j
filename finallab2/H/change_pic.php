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

// default picture field না থাকলে set করে দাও
if (!isset($_SESSION['users'][$username]['picture'])) {
    $_SESSION['users'][$username]['picture'] = "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['picture']) && $_FILES['picture']['name'] != "") {

        $fileName = basename($_FILES['picture']['name']);
        $tmpName = $_FILES['picture']['tmp_name'];

        // uploads folder must exist
        $target = "../uploads/" . $fileName;

        if (move_uploaded_file($tmpName, $target)) {
            $_SESSION['users'][$username]['picture'] = $target;
            $user = $_SESSION['users'][$username];
            $message = "Profile picture updated successfully!";
        } else {
            $message = "Upload failed!";
        }
    } else {
        $message = "Select a file first!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
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
                <legend><b>PROFILE PICTURE</b></legend>

                <div style="margin-bottom:15px;">
                    <?php if ($user['picture'] != "") { ?>
                        <img src="<?php echo htmlspecialchars($user['picture']); ?>" width="120" height="120" alt="Profile Picture" style="border:1px solid black;">
                    <?php } else { ?>
                        <div style="width:120px; height:120px; border:1px solid black;"></div>
                    <?php } ?>
                </div>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="picture">
                    <hr>
                    <input type="submit" value="Submit">
                </form>

                <p style="color:blue;"><?php echo $message; ?></p>
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