<?php

declare(strict_types=1);

?>

<?php function output_login_form(): void
{ ?>
    <section>
        <form action="/actions/action_login.php" method="post">
            <label>Username:
                <input type="text" name="username">
            </label>
            <label>Password:
                <input type="password" name="password">
            </label>
            <input type="submit" value="Send">
        </form>
    </section>
<?php } ?>
