<?php $title = 'Lista de tareas' ?>
<?php ob_start() ?>
<h1>Lista de tareas pendientes</h1>
<div class="container">
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>
                <a href="/read?id=<?php echo $todo['id'] ?>">
                    <?php echo $todo['title'] ?> ->
                    <?php echo $todo['description'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'base.php' ?>