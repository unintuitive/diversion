<?php require("partials/header.php"); ?>
        <header>
            <h1>Todo List</h1>
        </header>
            <ul>
                <?php foreach ($tasks as $task) : ?>
                    <li>
                        <?php if ($task->completed) : ?>
                            <strike><?= $task->description ?></strike>
                        <?php else: ?>
                            <?= $task->description ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
<?php require("partials/footer.php"); ?>