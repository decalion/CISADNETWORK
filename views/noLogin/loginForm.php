<script src="./js/checkLogin.js" type="text/javascript"></script>
<form action="index.php" method="post" class="formInput">
    <input hidden type="text" name="type" value="login" />
    <input hidden type="text" name="state" value="1" />
    <label>Username</label>
    <input type="text" name="username" id="username"><br>
    <label>Password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Login">
</form>