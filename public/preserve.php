<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>日。嚐 甜</title>
    <style>
        table{
            width: 100%;
            border: 2px bisque solid;
        }
        th{
            background-color: navajowhite;
        }
        td,th{
            text-align: center;
            padding: 5px;
            border: 2px bisque solid;
        }
    </style>
</head>
<body>
    <?php
        $conn=new mysqli('localhost','tododemo','ava890811');
        if($conn ->connect_error){
            die("錯誤訊息: $conn->connect_error <br>");
        }else{
            echo "連結資料庫伺服器成功<br>";
            $conn->select_db('projectdb');  //選擇資料庫
            $conn->set_charset("utf8"); //設定碼號(編碼)
            $sql="SELECT * FROM product";

            if($result = $conn ->query($sql)){  //執行SQL
            echo "<table><thead><tr>";
            while ($meta=$result->fetch_field()){  //回傳object
            echo "<th> $meta->name </th>";
        }
            echo "</tr></thead><tbody>";
            while($row=$result->fetch_row()){  //每一筆紀錄
            echo "<tr>";
            for ($i=0; $i<count($row);$i++) {  //每一欄位
            echo "<td>$row[$i]</td>";
        }
            echo "</tr>";
        }
            echo '</tbody></table>';
            $result->free();    //釋放result set
        }
            $conn->close();
        }
    ?>
</body>
</html>
