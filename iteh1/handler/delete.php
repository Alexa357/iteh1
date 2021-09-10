<?php
require "../dbBroker.php";
require "../model/automobili.php";

if(isset($_POST['id'])) {
    $status = Automobili::deleteById($_POST['id'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo 'Unsuccess';
    }
}