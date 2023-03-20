<?php
    session_start (); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>日。嚐 甜</title>
    <link rel="stylesheet" href="./css/reserve.css" />
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
            </div>
        </div>
            
            <!--選單列表-->
        <div>
            <ul id="d2">
                <li><a href="index.php" >首頁</a></li>
                <li><a href="aboutUs.php" >關於我們</a></li>
                <li><a href="reserve.php" >我要訂購</a></li>
                <li><a href="branch.php" >分店據點</a></li>
                <li><a href="question.php" >常見問題</a></li>
            </ul>
        </div>

        <div class="mune" >
            <form method="post" action="r2.php">
                <table class="tt">
                    <thead>
                        <tr class="allproduct" style="border:2px #e9967a solid">
                            <td colspan="3"><h2>所有商品</h2></td>
                        </tr>
                    </thead>
                        
                    <tbody>
                        <tr style="border:2px #e9967a solid;">
                            <td class="t1"><img src="./img/c1.jpg" alt="巧克力蛋糕"/></td>
                            <td class="t2">
                                <h3>古典巧克力蛋糕</h3>
                                <hr>
                                <p>尺寸:6吋</p>
                                <br>
                                <p>介紹:</p>
                                <p>蛋糕體濕潤加倍、巧克力濃郁不減，不甜不膩。</p>
                                <br>
                                <p>材料:</p>
                                <p>半苦甜巧克力、鮮奶油、無鹽奶油、即溶咖啡粉、蛋黃、砂糖、蛋白、砂糖、低筋麵粉、可可粉、鮮奶油、當季水果</p>
                                <br/>
                            </td>
                            <td class="t3">
                                 <p>售價:680元</p>
                                 <br/>
                                 <br/>
                                    <select id="n1" name="n1" width="80" style="width: 80px; text-align: center;" >
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr style="border:2px #e9967a solid">
                                <td class="t1"><img src="./img/c2.jpg" alt="夏日水果蛋糕"/></td>
                                <td class="t2">
                                    <h3>夏日水果蛋糕</h3>
                                    <hr>
                                    <p>尺寸:6吋</p>
                                    <br>
                                    <p >介紹:</p>
                                    <p>濕潤的蛋糕體及加了新鮮芒果泥的鮮奶油，鵝黃色的顏色不只給蛋糕色彩也有芒果甜味跟香氣，再用鮮奶油做垂流裝飾，最上面以草莓、奇異果、芒果點綴完成夏日水果夾層蛋糕，完全符合了夏天就是要大口大口吃水果消暑解渴～</p>
                                    <br>
                                    <p>材料:</p>
                                    <p>全蛋、砂糖、牛奶、無鹽奶油、低筋麵粉、香草精、芒果鮮奶油、鮮奶油、芒果果泥、糖粉 </p>
                                    <br/>
                                </td>
                                <td class="t3">
                                    <p>售價:700元</p>
                                    <br/>
                                    <br/>
                                    <select id="n2" name="n2" width="80" style="width: 80px; text-align: center;">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr style="border:2px #e9967a solid">
                                <td class="t1"><img src="./img/c3.jpg" alt="黑森林蛋糕"/></td>
                                <td class="t2">
                                    <h3>哈密瓜雙層起士慕斯蛋糕</h3>
                                    <hr>
                                    <p>尺寸:6吋</p>
                                    <br>
                                    <p >介紹:</p>
                                    <p>以慕斯的方式來帶出哈密瓜獨特的甜味跟香氣，搭配清爽味道的馬斯卡彭起士，讓慕斯口感多層次，底部則是鬆軟的海綿蛋糕底，是一款夏天必備熱門甜點。</p>
                                    <br>
                                    <p>材料:</p>
                                    <p>蛋黃、牛奶、融化奶油、蛋白、砂糖、低筋麵粉、泡打粉、雙層起士慕斯、馬斯卡彭起士、奶油乳酪、糖粉、吉利丁、鮮奶油、哈密瓜慕斯、綠色哈密瓜果肉、檸檬汁、砂糖、螺旋藻粉(純素)</p>
                                    <br/>
                                </td>
                                <td class="t3">
                                    <p>售價:750元</p>
                                    <br/>
                                    <br/>
                                    <select id="n3" name="n3" width="80" style="width: 80px; text-align: center;">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr style="border:2px #e9967a solid">
                                <td class="t1"><img src="./img/c4.jpg" alt="香草蛋糕"/></td>
                                <td class="t2">
                                    <h3>香草蛋糕</h3>
                                    <hr>
                                    <p>尺寸:6吋</p>
                                    <br>
                                    <p>介紹:</p>
                                    <p>三種分層—蛋糕、卡士達、布丁，能夠同時享受鬆軟蛋糕層+柔順卡士達+蛋糕布丁似的緊實口感。</p>
                                    <br>
                                    <p>材料:</p>
                                    <p>全蛋、砂糖、香草莢、無鹽奶油、低筋麵粉、牛奶</p>
                                    <br/>
                                </td>
                                <td class="t3">
                                    <p>售價:570元</p>
                                    <br/>
                                    <br/>
                                    <select  id="n4" name="n4" width="80" style="width: 80px; text-align: center;">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr style="border:2px #e9967a solid">
                                <td class="t1"><img src="./img/c5.jpg" alt="香草蛋糕"/></td>
                                <td class="t2">
                                    <h3>繽紛莓果夏洛特</h3>
                                    <hr>
                                    <p>尺寸:6吋</p>
                                    <br>
                                    <p >介紹:</p>
                                    <p>夏洛特是法國傳統的甜點樣式，使用海綿蛋糕、手指蛋糕(ladyfinger) 或是奶油麵包圍邊，中間填滿慕斯、卡士達或是水果等柔軟的餡料。</p>
                                    <p>現烤的lady finger，雙層藍莓＆巧克力慕斯餡料，搭配當季的各式莓果 ，脆脆餅乾搭配入口即化的慕斯，讓莓果的酸味襯出巧克力的香濃。</p>
                                    <br>
                                    <p>材料:</p>
                                    <p>全蛋、糖粉、砂糖、低筋麵粉、巧克力慕斯、蛋黃、牛奶、苦甜巧克力、吉利丁、鮮奶油、藍莓慕斯、藍莓果泥、蛋白、當季水果</p>
                                    <br/>
                                </td>
                                <td class="t3">
                                    <p>售價:790元</p>
                                    <br/>
                                    <br/>
                                    <select id="n5" name="n5" width="80" style="width: 80px; text-align: center;">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <div style="padding-bottom: 2%; padding-top: 1.5%; text-align:center;">
                    <input type="submit" id="btn" class="btn" name="btn" value="加入購物車"/>
                </div>
            </form>
        </div>
        
        <footer>
            <div class="ft1">
                <div>
                    <span>© Copyright 日。嚐甜 - All rights reserved.</span>
                    <a href="reserve.php"><input  class="ft2" type="button" value="TOP" /></a>
                </div>
            </div>
        </footer>
    </nav>
</body>
    
</html>