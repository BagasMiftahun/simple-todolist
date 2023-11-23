<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/addTodolist.php";
require_once "BusinessLogic/showTodolist.php";
require_once "BusinessLogic/removeTodolist.php";

addTodolist("Bagas");
addTodolist("Joko");
addTodolist("Cek");
addTodolist("Lon");
addTodolist("BB");
addTodolist("SS");

showTodolist();

removeTodolist(2);

showTodolist();

removeTodolist(5);


$success = removeTodolist(10);
var_dump($success);