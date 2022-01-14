<?php
include 'Crud.php';

$crud = new Crud();

if (!empty($_POST['create'])) {
    $crud->create($_POST['name'], $_POST['description']);
} elseif (!empty($_POST['update'])) {
    $crud->update($_POST['id'],$_POST['name'], $_POST['description']);
}

header('location: /admin');