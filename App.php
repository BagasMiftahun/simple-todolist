<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/addTodolist.php";
require_once "BusinessLogic/removeTodolist.php";
require_once "BusinessLogic/showTodolist.php";
require_once "View/add.php";
require_once "View/remove.php";
require_once "View/show.php";
require_once "Helper/input.php";


echo "App php "  . PHP_EOL ;

viewshow();