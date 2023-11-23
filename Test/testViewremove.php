<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/addTodolist.php";
require_once "BusinessLogic/showTodolist.php";
require_once "BusinessLogic/removeTodolist.php";


addTodolist("Eko");
addTodolist("Kurniawan");
addTodolist("Khannedy");
addTodolist("Budi");
addTodolist("Joko");

showTodolist();

removeTodolist(3);

showTodolist();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();