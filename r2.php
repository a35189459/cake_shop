<?php

    session_start (); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/r2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
           
            <div class="mune">
                <form method="post" action="reserve.php">
                            <div class="allproduct">
                                <p style="font-size: 3rem; padding-top:20px; ">訂單明細</p>
                    <hr/>
                            <?php                                   
                                if(isset($_POST['btn'])){
                                    //顧客選購各產品數量
                                    $n1=$_SESSION['n1']=$_POST['n1'];
                                    $n2=$_SESSION['n2']=$_POST['n2'];
                                    $n3=$_SESSION['n3']=$_POST['n3'];
                                    $n4=$_SESSION['n4']=$_POST['n4'];
                                    $n5=$_SESSION['n5']=$_POST['n5'];
                                    
                                    //各產品價格
                                    $s1="680";
                                    $s2="700";
                                    $s3="750";
                                    $s4="570";
                                    $s5="790";
                                    
                                    //單項產品總價
                                    $t1=$n1*$s1;
                                    $t2=$n2*$s2;
                                    $t3=$n3*$s3;
                                    $t4=$n4*$s4;
                                    $t5=$n5*$s5;
                                    
                                    //商品總數
                                    $tproduct=$n1+$n2+$n3+$n4+$n5;
                                    $_SESSION['tproduct']=$tproduct;     
                                    
                                    //總價格
                                    $tprice=$t1+$t2+$t3+$t4+$t5;
                                    $_SESSION['tprice']=$tprice;
                                    
                                    echo "<table align='center' width='700' hight='500' >"
                                        ."<tr><td>產品名稱</td>"
                                        ."<td>數量</td>"
                                        ."<td>價格</td></tr>"

                                        ."<tr><td>古典巧克力蛋糕</td>"
                                        ."<td>".$n1."</td>"
                                        ."<td>".$t1."</td></tr>"
                                        
                                        ."<tr><td>夏日水果蛋糕</td>"
                                        ."<td>".$n2."</td>"
                                        ."<td>".$t2."</td></tr>"
                                            
                                        ."<tr><td>哈密瓜雙層起士慕斯蛋糕</td>"
                                        ."<td>".$n3."</td>"
                                        ."<td>".$t3."</td></tr>"
                                            
                                        ."<tr><td>香草蛋糕</td>"
                                        ."<td>".$n4."</td>"
                                        ."<td>".$t4."</td></tr>"
                                        
                                        ."<tr><td>繽紛莓果夏洛特</td>"
                                        ."<td>".$n5."</td>"
                                        ."<td>".$t5."</td></tr></table><hr/>";
                                        
                                        echo"<table align='center' width='300' hight='500'>"
                                        ."<tr><tr><td>商品總數:</td>"
                                        ."<td>".$tproduct."</td></tr>"
                                        ."<td>產品總價:</td>"
                                        ."<td>".$tprice."</td></tr>"
                                        ."</table>";
                                }
                                    
                             ?>
                    <a href="reserve.php"><input type="button" id="back" name="back" value="取消" style="margin-top: 5rem; background-color: gold; border: 0px;"/></a>
                    <a href="pay.php"><input type="button" id="checkout" name="checkout" value="確認" style="margin-top: 5rem; background-color: gold; border: 0px;"/></a>
                         </div>
                    
                </form>
                
        </div>
       
         
  
        <footer>
                   <div class="ft1">
                       <div>
                           <span>© Copyright 日。嚐甜 - All rights reserved.</span>
                           <a href="r2.php"><input  class="ft2" type="button" value="TOP" /></a>
                       </div>
                   </div>
               </footer>
                
           </nav>
       </body>
</html>