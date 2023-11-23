<?php

require_once "Helper/input.php";
require_once "BusinessLogic/removeTodolist.php";

function viewRemove(){
    echo "Menghapus Todo";

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo";
    }
    else {
        $success =  removeTodolist($pilihan);
        if ($success) {
            echo "Berhasil menghapus todo";
        }
        else {
            echo "Gagal menghapus todo";
        }
    }
}