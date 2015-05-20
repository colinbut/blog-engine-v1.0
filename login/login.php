<html>
    <head>
        <title>Blog Engine v1.0 - Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div id="form-container">
            <form action="processLogin.php" method="POST" >
                <label>username:</label>
                <input type="text" name="USER"/>
                <label>password:</label>
                <input type="password" name="PW" />
                <input type="submit" value="Login" />  
            </form>
        </div>
    </body>
</html>