<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="./css/panelstyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="menubuton">
                    <label><a href="./index.php?ids=101">User</a></label>
                </div>
                <div class="menubuton">
                    <label>Movie</label>
                </div>
                <div class="menubuton">
                    <label>Series</label>
                </div>
                <div class="menubuton">
                    <label>Music</label>
                </div>
                <div class="menubuton">
                    <label>News</label>
                </div>
                <div class="menubuton">
                    <label>Cookrecide</label>
                </div>
                <div class="menubuton">
                    <label>Books</label>
                </div>
                <div class="menubuton">
                    <label>Backups</label>
                </div>
                <div class="menubuton">
                    <label><a href="./index.php?ids=10">Logout</a></label>
                </div>
            </div>
            <div class="center">
                <h2><?php echo "Welcome to Admin Panel ". $_SESSION['user']; ?></h2>
            </div>
            <div class="footer">
                <label>CISADNETWORK  Ismael Caballero | Adrian Garcia | Cristian Bautista </label>
            </div>
        </div>
    </body>
</html>
