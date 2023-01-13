<?php
    session_start (); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pay.css" />
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->
    <title>日。嚐 甜</title>
        <script>
            
        </script>
    </head>
    <body> 
        </head>
<body>
    <nav>
        <!--頁首-->
        <div id="header">
            <div id="d1">
                <div id="dd1">
                    <img src="img/sun1.png" alt="logo"/>
                </div>
                <div id="dd2">
                    <h1>日。嚐 甜</h1>
                </div>
                <div id="dd3">
                        
                   
                </div>
            </div>
          </div>
            
            <!--選單列表-->
            <div>
                <ul id="d2">
                    <li><a href="project1.php" >首頁</a></li>
                    <li><a href="aboutUs.php" >關於我們</a></li>
                    <li><a href="reserve.php" >我要訂購</a></li>
                    <li><a href="branch.php" >分店據點</a></li>
                    <li><a href="question.php" >常見問題</a></li>
                </ul>
            </div>
       
            <!--訂購者資訊-->
         <div class="content">
          <form method="get" action="pay.php">     
            <table class="t1">
                <thead></thead>
                <tbody>
                    <tr>
                        <td>訂購人姓名</td>
                        <td><input type="text" placeholder="請輸入姓名" name="uname" required style="height:50px; width: 100%;background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center;"></td>
                    </tr>
                    
                     <tr>
                        <td>訂購人電話</td>
                        <td><input type="tel" placeholder="請輸入電話" name="phone" required style="height:50px; width: 100%;background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center; "></td>
                    </tr>
                    
                    <tr>
                        <td>電子郵件</td>
                        <td><input type="email" placeholder="請輸入電子郵件" name="email" required style="height:50px; width: 100%;background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center; "></td>
                    </tr>
                    
                    <tr>
                        <td>日期<br/>
                            <small>(請選擇取貨日期及時間)</small></td>
                
                        <td><input type="datetime-local" id="time" name="time" value=''
                                   min="2022-12-12T00:00" max="2030-12-13T00:00" required
                                   style="height:50px; width: 100%; background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center; "></td>
                    </tr>
                    
                    <tr>
                        <td>取件門市</td>
                        <td>
                            <select name="shop" required style="height:50px; width: 100%;background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center; ">
                                <option>高雄美麗島中正本舖</option>
                                <option>高雄左營高鐵門市</option>
                                <option>高雄夢時代門市</option>
                                <option>高雄義享門市</option>
                                <option>台南南紡門市</option>
                                <option>台南新天地門市</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>備註</td>
                        <td><input type="text" name="message"  placeholder="請寫下您的需求"  style="height:50px; width: 100%;background-color:#f0ebe5; border:1px #b7b1a5 solid; text-align: center; "></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="reserve.php"><input type="button" id="back" name="back" class="back" value="返回" style="margin-left: 50px; padding: 1.2rem; background-color: gold; border: 1px rosybrown solid;"/></a>
                        </td>
                        <td>
                            <a href="reserve.php">
                                <input type="submit" id="btn" name="btn" class="btn" value="送出訂單" style="margin-left: 50px; padding: 1.2rem; background-color: gold; border: 1px rosybrown solid;"/>
                            </a>            
                        </td>
                    </tr>
                </tbody>
            </table>


              <?php
        if(isset($_GET['btn'])){
            $uname=$_SESSION['uname']=$_GET['uname'];
            $phone=$_SESSION['phone']=$_GET['phone'];
            $email=$_SESSION['email']=$_GET['email'];
            $time=$_SESSION['time']=$_GET['time'];
            $shop=$_SESSION['shop']=$_GET['shop'];
            $message=$_SESSION['message']=$_GET['message'];
            $n1=$_SESSION['n1'];
            $n2=$_SESSION['n2'];
            $n3=$_SESSION['n3'];
            $n4=$_SESSION['n4'];
            $n5=$_SESSION['n5'];
            $tproduct=$_SESSION['tproduct']; 
            $tprice=$_SESSION['tprice'];

        $conn=@new mysqli('localhost','root','');
        if($conn->connect_error){
            die("錯誤訊息： $conn->connect_error <br>");          
        }else{
            //echo "<hr>連結資料庫伺服器成功<br>";
            $conn->select_db('projectdb'); //選擇資料庫
            $conn->set_charset("utf8");   //設定編碼
            $sql1="INSERT INTO customer (uname,phone,email,time,shop,message) VALUES ('$uname','$phone','$email','$time','$shop','$message');";
            $sql2="INSERT INTO cake_order (pcake1_qty,pcake2_qty,pcake3_qty,pcake4_qty,pcake5_qty,total_qty,total_price) VALUES ('$n1','$n2','$n3','$n4','$n5','$tproduct','$tprice');";                            
            echo $sql2;
            if($conn->query($sql1)){
                if($conn->query($sql2))
                {
                echo "<script language='javascript'>alert('訂購成功');</script>";
                }else{
                echo "<script language='javascript'>alert('訂購失敗');</script>";
            }
         }
         $conn->close();
        }
        }
        ?>
         </form>
      </div>
           
         
    </nav>
    </body>
</html>
