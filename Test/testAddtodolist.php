<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/addTodolist.php";


addTodolist("Bagas");
addTodolist("Miftahun");
addTodolist("Naim");

var_dump($todolist);