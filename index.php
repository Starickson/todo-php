<?php
const ERROR_REQUIRED = "Veuillez renseigner un todo";
const ERROR_TOO_SHORT = "AU moins 5 caractères svp ";

$filename = __DIR__ . '/data/todos.json';
$error = '';

$todos = [];

if (file_exists($filename)) {
    $data = file_get_contents($filename);
    $todos = json_decode($data, true) ?? [];
    print_r($todos);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $todo = $_POST['todo'] ?? '';

    if (!$todo) {
        $error = ERROR_REQUIRED;
    } elseif (mb_strlen($todo) < 5) {
        $error = ERROR_TOO_SHORT;
    }

    if (!$error) {
        $todos = [...$todos, [
            'name' => $todo,
            'done' => false,
            'id' => time()
        ]];

        file_put_contents($filename, json_encode($todos));
    }
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'include/head.php' ?>
    <title>Todo</title>
</head>

<body>
    <div class="container">
        <?php require_once 'include/header.php' ?>
        <div class="content">
            <div class="todo-container">
                <h1>Ma Todo</h1>
                <form class="todo-form" action="" method="POST">
                    <input type="text" name="todo">
                    <button class="btn btn-primary">Ajouter</button>
                </form>
                <?php if ($error) : ?>
                    <p class='text-danger'><?= $error ?></p>
                <?php endif; ?>
                <ul class="todo-list">
                    <?php foreach ($todos as $t) : ?>
                        <li class="todo-item  <?= $t['done'] ? 'low-opacity' : '' ?>">
                            <span class="todo-name"><?= $t['name']; ?></span>
                            <a href="edit-todo.php?id=<?= $t['id'] ?>"><button class="btn btn-primary btn-small"><?= $t['done'] ? 'Annuler' : 'Valider' ?> </button></a>
                            <a href="delete-todo.php?id=<?= $t['id'] ?>"><button class="btn btn-danger btn-small">Supprimer</button></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="todo-list"></div>
            </div>
        </div>
        <?php require_once 'include/footer.php' ?>
    </div>
</body>

</html>