<div class="wrapper">
    <?php Flasher::flash(); ?>

    <main class="article-container">
        <form action="<?= BASE_URL; ?>/login" method="POST" class="regist-form">
            <ul class="registration">
                <li>
                    <label for="username">Username</label>
                    <input type="username" name="username" id="username" placeholder="Username" required autocomplete="off">
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
                </li>
                <li>
                    <input type="submit" name="login" value="Login">
                </li>
            </ul>
        </form>
    </main>
</div>