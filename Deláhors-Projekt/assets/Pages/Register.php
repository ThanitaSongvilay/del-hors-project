<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <h1>Register</h1>
        <br>
    </head>
    <body>
        <div>
            <form action="reg.php" method="post">
                <input type="text" name="regUname" id="regUname">
                <br>
                <UserName>UserName</UserName>
                <br>

                <br>
                <input type="text" name="regUemail" id="regUemail">
                <br>
                <UserEmail>Email</UserEmail>
                <br>

                <br>
                <input type="password" name="regUpassword" id="regUpassword">
                <br>
                <UserPassword>Password</UserPassword>
                <br>

                <br>
                <button id="regButton" type="sumbit" class="regButton">Register</button>
            </form>
        </div>

        <div>
            <hr>
            <h4>Have an account?</h4>
            <a href="Login.php">Log in here!</a>
        </div>
    </body>
</html>
