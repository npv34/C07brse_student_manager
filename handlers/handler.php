<?php

include_once "./database/dbConnect.php";
function showPageListGroup() {
    global $conn;
    $sql = "SELECT * FROM student_manager.db_groups";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    include_once "./views/list-group.php";
}

function showFormAdd()
{
    include_once "./views/add-group.php";
}

function insertGroup($name)
{
    global $conn;
    $sql = "INSERT INTO student_manager.db_groups(name) 
            VALUES (?)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $name);
    $statement->execute();
}

function deleteGroup($id)
{
    global $conn;
    $sql = "DELETE FROM student_manager.db_groups WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
}