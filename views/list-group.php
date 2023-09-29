<?php

?>
<style>
    table {
        width: 300px;
        border-collapse: collapse;
    }

    tr, td {
        border: 1px solid black;
    }

    #tbl-header {
        background-color: blue;
        color: white;
    }

    tr:hover {
        background-color: antiquewhite;
    }
</style>
<table>
    <caption>
        <h2>Group list</h2>
        <a href="index.php?page=groups&action=add">+ Add</a>
    </caption>
    <tr id="tbl-header">
        <td>STT</td>
        <td>Name</td>
        <td>Action</td>
    </tr>

    <?php if (count($result) == 0):  ?>
        <tr>
            <td colspan="2">No data</td>
        </tr>
    <?php else:  ?>
    <?php foreach ($result as $key => $group): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $group['name'] ?></td>
            <td><a href="index.php?page=groups&action=delete&gID=<?php echo $group['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    <?php endif ?>
</table>
