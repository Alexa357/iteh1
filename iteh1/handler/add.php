<?php
require "../dbBroker.php";
require "../model/automobili.php";

if (isset($_POST['nazivAutomobila']) && isset($_POST['zemljaAutomobila']) 
    && isset($_POST['opisAutomobila']) && isset($_POST['cenaAutomobila'])) {
    $status = Automobili::add($_POST['nazivAutomobila'], $_POST['zemljaAutomobila'], $_POST['opisAutomobila'], $_POST['cenaAutomobila'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Unsuccess';
    }
}