<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signIn.css">
</head>

<body>

    <form method="post" action="<?php echo URLROOT; ?>/UserController/signIn">


        <div class="login-container">


            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="submitSignin">Login</button>
    </form>
    </div>

    <script src="<?php echo URLROOT ?>/public/js/login.js"></script>
</body>

</html>