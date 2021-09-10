<?php
    function executeQuery($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "automobili");
        $result = mysqli_query($connect, $query);
        return $result;
    }

    if(isset($_POST['ASC']))
    {
        $asc_query = "SELECT * FROM automobili ORDER BY cena ASC";
        $result = executeQuery($asc_query);
    }
    elseif (isset($_POST['DESC']))
    {
        $desc_query = "SELECT * FROM automobili ORDER BY cena DESC";
        $result = executeQuery($desc_query);
    }
?>