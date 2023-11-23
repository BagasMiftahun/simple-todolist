<?php

/*
* Menampilkan show todolist 
*/

function showTodolist(){
    global $todolist;

    echo "Todolist" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value ";
    }
}