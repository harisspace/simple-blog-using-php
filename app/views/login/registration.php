<div class="wrapper">

    <?php Flasher::flash(); ?>

    <main class="article-container">
        <form action="<?= BASE_URL; ?>/registration" method="POST" class="regist-form">
            <ul class="registration">
                <li>
                    <label for="username">Username</label>
                    <input type="username" name="username" id="username" required autocomplete="off">
                </li>
                <li>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required autocomplete="email">
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <label for="password-verify">Password-verify</label>
                    <input type="password" name="password-verify" id="password-verify" required>
                </li>
                <li>
                    <input type="submit" name="registration" value="Registration">
                </li>
            </ul>
        </form>
    </main>
</div>