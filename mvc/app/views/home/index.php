<form action="login.php">
    <input type="email" placeholder = "Enter your email" name = "email" required>
    <br>
    <input type="password" placeholder = "Enter your password" name = "password" required>
    <br>
    <?php echo $data['url']?>
    <input type="submit" value = "login">
</form>