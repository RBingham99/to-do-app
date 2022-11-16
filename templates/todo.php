<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
<h1>Stuff what needs doing</h1>

<div id="allTasks">
    <?php
    foreach ($tasks as $task) {
        echo '<div class="task">'
            . "<input type='checkbox'>" .'<p>' . $task['description'] . ' | ' . $task['due'] . '</p>'
            . '</div>';
    }
    ?>
</div>
</body>

</html>