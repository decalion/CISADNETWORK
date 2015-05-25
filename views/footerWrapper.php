</div>
<div class="footerWrapper wrapper">
    <div class="footerLeft innerFooter">
        <img src="./images/logoWithLetters.png" />
    </div>
    <div class="footerMid innerFooter">
        <?php
            buildLastPoll($link);
        ?>
    </div>
    <div class="footerRight innerFooter">
        <ul id="navList">
            <li>
                <form action="./index.php" method="post">
                    <input hidden type="text" name="type" value="faq" />
                    <input hidden type="text" name="state" value="0" />
                    <input type="submit" value="FAQ's" />
                </form>
            </li>
            <li>
                <form action="./index.php" method="post">
                    <input hidden type="text" name="type" value="meetUs" />
                    <input hidden type="text" name="state" value="0" />
                    <input type="submit" value="MEET US" />
                </form>
            </li>
            <li>
                <form action="./index.php" method="post">
                    <input hidden type="text" name="type" value="rules" />
                    <input hidden type="text" name="state" value="0" />
                    <input type="submit" value="RULES" />
                </form>
            </li>
        </ul>
    </div>
</div>