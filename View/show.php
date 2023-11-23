<?php

require_once "BusinessLogic/showTodolist.php";
require_once "Helper/input.php";
require_once "View/add.php";
require_once "View/remove.php";
require_once "Model/Todolist.php";


function viewShow(){

    while (true) {  
        showTodolist();

        echo "TODOLIST";
        echo "1. Tambah Todo";
        echo "2. Hapus Todo";
        echo "3. X Keluar";

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAdd();
        }else if ($pilihan == "2") {
            viewRemove();
        }else if ($pilihan == "x") {
            break;
        }else {
            echo "Pilihan tidak dimengerti";
        }
    }
    echo "Sampai Jumpa Lagi";
}