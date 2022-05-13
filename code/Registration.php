<?php
include "controllers/userController.php";
?>
    <body>
    </label>
    <form method="POST">
        <label>
            Email
            <p>
                <input type="email" name="email" required>
            </p>
            Password
            <p>
                <input type="password" name="password" required>
            </p>
            <button onclick="register()">Зарегестрироваться</button>
            <a href="index.php">На главную</a>
        </label>
    </form>
    </body>
<?php
?>