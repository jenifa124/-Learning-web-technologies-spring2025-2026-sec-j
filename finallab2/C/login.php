<?php include '../auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<table border="1" width="800" align="center" cellspacing="0" cellpadding="0">

    <tr>
        <td style="padding:20px;">
            <table width="100%">
                <tr>
                    <td>
                        <span style="font-size:40px; color:green; font-weight:bold;">X</span>
                        <span style="font-size:25px; font-weight:bold;">Company</span>
                    </td>
                    <td align="right">
                        <a href="../A/home.php">Home</a> |
                        <a href="../C/login.php">Login</a> |
                        <a href="../B/registration.php">Registration</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="padding:48px 0;">
            <fieldset style="width:400px; margin:auto;">
                <legend><b>LOGIN</b></legend>

                <form method="post">
                    <table cellpadding="6" cellspacing="0">
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input type="text" name="username" style="width:180px;"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password" style="width:180px;"></td>
                        </tr>
                    </table>

                    <hr>

                    <input type="checkbox" name="remember"> Remember Me

                    <br><br>

                    <input type="submit" value="Submit">
                    <a href="../D/forgot_password.php">Forgot Password?</a>
                </form>
            </fieldset>
        </td>
    </tr>

    <tr>
        <td align="center" style="padding:10px;">
            Copyright &copy; 2017
        </td>
    </tr>

</table>

</body>
</html>