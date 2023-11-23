<?php

require_once "Helper/input.php";
require_once "BusinessLogic/addTodolist.php";
require_once "Model/Todolist.php";

function viewAdd(){
    echo "Menambah Todo";

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambahkan todo";
    }else
    {
        addTodolist($todo);
    }

}