<?php
    $connect = mysqli_connect("localhost", "root", "", "automobili");
    $output = '';
    if(isset($_POST["export_excel"]))
    {
        $sql = "SELECT * FROM automobili ORDER BY cena DESC";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            $output .= '
                <table class="table" bordered = "1">
                <tr>
                    <th>Id</th>
                    <th>Naziv</th>
                    <th>Zemlja porekla</th>
                    <th>Opis</th>
                    <th>Cena</th>
                </tr>
            ';
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                    <tr>
                        <td>' .$row["id"].'</td>
                        <td>' .$row["naziv"].'</td>
                        <td>' .$row["zemlja"].'</td>
                        <td>' .$row["opis"].'</td>
                        <td>' .$row["cena"].'</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename = tabela.xls");
            echo $output;
        }
    }
?>