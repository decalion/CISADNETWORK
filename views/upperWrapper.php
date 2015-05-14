<div class="upperWrapper wrapper">
    <ul id="navList">
        <li>
            <form action="./index.php" method="post">
                <input type="submit" value="MOVIES" />
            </form>
        </li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="movies" />
                <input hidden type="text" name="state" value="0" />
                <input type="submit" value="HOME" />
            </form>
        </li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="series" />
                <input hidden type="text" name="state" value="0" />
                <input type="submit" value="SERIES" />
            </form>
        </li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="recipes" />
                <input hidden type="text" name="state" value="0" />
                <input type="submit" value="RECIPES" />
            </form>
        </li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="books" />
                <input hidden type="text" name="state" value="0" />
                <input type="submit" value="BOOKS" />
            </form></li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="music" />
                <input hidden type="text" name="state" value="0" />
                <input type="submit" value="MUSIC" />
            </form>
        </li>
        <li>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="search" />
                <input type="text" id="userInputSearch" name="userInputSearch" value="search..." />
                <input type="submit" value="SEARCH" />
            </form>
        </li>
        <?php
            if (isset($_SESSION['userData'])) {
        ?>
                    <li>
                        <form action="./index.php" method="post">
                            <input hidden type="text" name="type" value="logout" />
                            <input hidden type="text" name="state" value="0" />
                            <input type="submit" value="LOGOUT" />
                        </form>
                    </li>
        <?php
            } else {
        ?>
                <li>
                    <form action="./index.php" method="post">
                        <input hidden type="text" name="type" value="register" />
                        <input hidden type="text" name="state" value="0" />
                        <input type="submit" value="REGISTER" />
                    </form>
                </li>
                <li>
                    <form action="./index.php" method="post">
                        <input hidden type="text" name="type" value="login" />
                        <input hidden type="text" name="state" value="0" />
                        <input type="submit" value="LOGIN" />
                    </form>
                </li>
        <?php
            }
        ?>
    </ul>
</div>
<div class="middleWrapper wrapper defaultBorder">