<?php

/*
* menghapus todolist 
*/
function removeTodolist(int $number): bool{
    global $todolist;

    if ($number > sizeof($todolist)) {
        return false;
    }

    for ($i= $number ; $i < sizeof($todolist)  ; $i++) { 
        $todolist[$number] = $todolist[$i + 1];
    }
    
    unset($todolist[sizeof($todolist)]);

    return true;

}