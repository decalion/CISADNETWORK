<script src="./js/checkRegister.js" type="text/javascript"></script>
<form action="index.php" method="post" class="formInput">
    <input hidden type="text" name="type" value="register" />
    <input hidden type="text" name="state" value="1" />
    <label>Name</label>
    <input type="text" name="name" id="name"><br>
    <label>Lastname</label>
    <input type="text" name="lastname" id="lastname"><br>
    <label>Username</label>
    <input type="text" name="username" id="username"><br>
    <label>Password</label>
    <input type="password" name="password" id="password"><br>
    <label>Confirm password</label>
    <input type="password" name="confirmPassword" id="confirmPassword"><br>
    <label>Email</label>
    <input type="email" name="email" id="email"><br>
    <input type="submit" value="Register">
</form>