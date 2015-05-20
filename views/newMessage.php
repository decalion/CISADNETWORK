<form action="./index.php" method="post">
    <input hidden type="text" name="type" value="messages" />
    <input hidden type="text" name="state" value="2" />
    <label>To:</label>
    <input type="text" name='to' id="to" />
    <label>Message:</label>
    <textarea name='message' id="message"></textarea>
    <input type="submit" value="Send" />
</form>