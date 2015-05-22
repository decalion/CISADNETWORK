<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./css/adminstyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <h1> ADMIN PANEL </h1>
            </div>
            <div class="content">
                <div class="login">
                    <form method="post" action="./index.php">
                     <div class="errorslogin"><?php if(isset($message)){ echo $message;  }    ?></div>
                        <div class="userlogin">
                            <lablel>User </lablel>
                            <input type="text" name="user" /><input type="text"  name="ids"  value="100" hidden />
                        </div>
                        <div class="passlogin">
                            <label>Pass </label>
                            <input type="password" name="pass" />
                        </div>
                        <div  class="loginbutton">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">

                <div class="copyright">
                    <label>Ismael Caballero |</label>
                    <label>Adrian Garcia | </label>
                    <label>Cristian Bautista</label>
                </div>

            </div>

        </div>
    </body>
</html>
