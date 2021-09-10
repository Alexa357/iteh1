<?php

require "../dbBroker.php";
require "../model/automobili.php";

if(isset($_POST['id'])) {
    $myArray = Automobili::getById($_POST['id'], $conn);
    echo json_encode($myArray);
}