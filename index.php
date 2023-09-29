<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 1024px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="index.php?page=groups&action=view-list">View list groups</a>
    <a href="">View list students</a>
    <?php
    include_once "./handlers/handler.php";

    $page = $_REQUEST['page'] ?? null;
    $action = $_REQUEST['action'] ?? null;

    switch ($page) {
        case 'groups':
            if ($action == 'add') {
                showFormAdd();
            }else if ($action == 'view-list'){
                showPageListGroup();
            } else if ($action == 'store'){
                $name = $_REQUEST['name'];
                insertGroup($name);
                header('Location: index.php?page=groups&action=view-list');
            } else if ($action == 'delete'){
                $groupId = $_REQUEST['gID'];
                deleteGroup($groupId);
                header('Location: index.php?page=groups&action=view-list');
            }

            break;
        default:

    }

    ?>
</div>



</body>
</html>