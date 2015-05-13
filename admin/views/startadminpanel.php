<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    <label>User</label>
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
                    <label>Logout</label>
                </div>
            </div>
            <div class="center">
                <h2><?php echo "Welcome to Admin Panel ". $_SESSION['user']; ?></h2>
            </div>
        </div>
    </body>
</html>
