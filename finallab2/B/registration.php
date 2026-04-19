<?php include '../auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<table border="1" width="800" align="center" cellspacing="0" cellpadding="0">

    <!-- Header -->
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

    <!-- Body -->
    <tr>
        <td style="padding:30px;">

            <fieldset style="width:450px; margin:auto;">
                <legend><b>REGISTRATION</b></legend>

                <form method="post">

                    <table width="100%" cellpadding="5">

                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" style="width:200px;"></td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="email" style="width:200px;">
                                <span style="font-weight:bold;">i</span>
                            </td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input type="text" name="username" style="width:200px;"></td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password" style="width:200px;"></td>
                        </tr>

                        <tr><td colspan="3"><hr></td></tr>

                        <tr>
                            <td>Confirm Password</td>
                            <td>:</td>
                            <td><input type="password" name="confirm_password" style="width:200px;"></td>
                        </tr>

                    </table>

                    <br>

                    <!-- Gender -->
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender"> Male
                        <input type="radio" name="gender"> Female
                        <input type="radio" name="gender"> Other
                    </fieldset>

                    <br>

                    <!-- DOB-->
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="text" size="2"> /
                        <input type="text" size="2"> /
                        <input type="text" size="4">
                        <span>(dd/mm/yyyy)</span>
                    </fieldset>

                    <br>

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">

                </form>

            </fieldset>

        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td align="center" style="padding:10px;">
            Copyright &copy; 2017
        </td>
    </tr>

</table>

</body>
</html>