<head>
    <link rel="stylesheet" type="text/css" href="http://ichiru/css/styles.css">
</head>
<header>
    <div class="header_logo">
        <img src="uploads/logo/logo.jpg" style="height: 300px;"> </div>
    <div class="link_user">
        <ul class="header_link_log">
            <li>
                <ul>
                    <form action="/engine/user/log_config.php" method="post" name="form_register" class="login-form">
                    <p>Вход</p>
                    <li>
                        <input type="text" name="login" placeholder="Логин" class="login-input" data-validate>
                        <input type="password" name="password" placeholder="Пароль" class="password-input" data-validate>
                        <input type="submit" class="submit">
                    </li>
                    </form>
                </ul>
            </li>
        </ul>
        <ul class="header_link_log">
            <li>
                <ul class="header_box">
                    <form action="/engine/user/reg_config.php" method="post" name="form_register" class="login-form">
                        <p>Регистрация</p>
                        <li>
                            <input type="text" name="login" placeholder="Логин" class="login-input" data-validate>
                            <input type="password" name="password" placeholder="Пароль" class="password-input" data-validate>
                            <input type="password" name="password1" placeholder="Повторите пароль" class="password1-input" data-validate>
                            <input type="text" name="mail" placeholder="Почта" class="mail-input" data-validate>
                            <input type="submit" class="submit">
                        </li>
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</header>
