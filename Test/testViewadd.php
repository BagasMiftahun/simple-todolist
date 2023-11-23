<?php

require_once "View/add.php";
require_once "BusinessLogic/addTodolist.php";
require_once "BusinessLogic/showTodolist.php";

addTodolist("Bagas");
addTodolist("Miftahun");
addTodolist("Naim");
viewadd();

showTodolist();