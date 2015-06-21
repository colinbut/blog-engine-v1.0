<html>
    <head>
        <title>Blog Engine v1.0 - Login</title>
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <h1 id="title">Blog Engine v1.0</h1>
        <div id="form-container">
            <p>Sign In</p>
            <form action="processLogin.php" method="POST" >
                <table align="center">
                    <tr>
                        <td><label>Username:</label></td>
                        <td><input type="text" name="USER" placeholder="username"/></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="PW" placeholder="password"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>