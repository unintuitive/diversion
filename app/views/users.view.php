<?php require("partials/header.php"); ?>
        <header>
            <h1>All Users</h1>
        </header>
        <h2>Choose your fate</h2>
        <form method="POST" action="users">
            <input name="name"></input>
            <button type="submit">Submit!</button>
        </form>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li>
                    <?= $user->name ?>
                </li>
            <?php endforeach; ?>
        </ul>
<?php require("partials/footer.php"); ?>