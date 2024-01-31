<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["calculate"])){

        $type1=$_POST["type1"];

        $type2=$_POST["type2"];

        if($type1==1 && $type2==1){
            $a="Words of Affirmation";
            $b="Words of Affirmation";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(1);
            });
            
          </script>";
        }
        elseif(($type1==1 && $type2==2)||($type1==2 && $type2==1)){
            $a="Words of Affirmation";
            $b="Act of Service";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(2);
            });
            
          </script>";
        }
        elseif(($type1==1 && $type2==3)||($type1==3 && $type2==1)){
            $a="Words of Affirmation";
            $b="Receiving Gifts";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(3);
            });
            
          </script>";
        }
        elseif(($type1==1 && $type2==4)||($type1==4 && $type2==1)){
            $a="Words of Affirmation";
            $b="Quality Time";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(4);
            });
            
          </script>";
        }
        elseif(($type1==1 && $type2==5)||($type1==5 && $type2==1)){
            $a="Words of Affirmation";
            $b="Physical Touch";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(5);
            });
            
          </script>";
        }
        elseif($type1==2 && $type2==2){
            $a="Act of Service";
            $b="Act of Service";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(6);
            });
            
          </script>";
        }
        elseif(($type1==2 && $type2==3)||($type1==3 && $type2==2)){
            $a="Receiving Gifts";
            $b="Act of Service";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(7);
            });
            
          </script>";
        }
        elseif(($type1==2 && $type2==4)||($type1==4 && $type2==2)){
            $a="Quality Time";
            $b="Act of Service";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(8);
            });
            
          </script>";
        }
        elseif(($type1==2 && $type2==5)||($type1==5 && $type2==2)){
            $a="Physical Touch";
            $b="Act of Service";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(9);
            });
            
          </script>";
        }
        elseif($type1==3 && $type2==3){
            $a="Receiving Gifts";
            $b="Receiving Gifts";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(10);
            });
            
          </script>";
        }
        elseif(($type1==3 && $type2==4)||($type1==4 && $type2==3)){
            $a="Receiving Gifts";
            $b="Quality Time";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(11);
            });
            
          </script>";
        }
        elseif(($type1==3 && $type2==5)||($type1==5 && $type2==3)){
            $a="Receiving Gifts";
            $b="Physical Touch";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(12);
            });
            
          </script>";
        }
        elseif($type1==4 && $type2==4){
            $a="Quality Time";
            $b="Quality Time";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(13);
            });
            
          </script>";
        }
        elseif(($type1==4 && $type2==5)||($type1==5 && $type2==4)){
            $a="Physical Touch";
            $b="Quality time";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(14);
            });
            
          </script>";
        }
        elseif($type1==5 && $type2==5){
            $a="Physical Touch";
            $b="Physical Touch";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                calculate(15);
            });
            
          </script>";
        }



    }

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <script src="sidebar.js"></script>


    <script>
        function calculate(a){
            if(a===1){
                document.querySelector('.test_result1').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===2){
                document.querySelector('.test_result2').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===3){
                document.querySelector('.test_result3').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===4){
                document.querySelector('.test_result4').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===5){
                document.querySelector('.test_result5').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===6){
                document.querySelector('.test_result6').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===7){
                document.querySelector('.test_result7').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===8){
                document.querySelector('.test_result8').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===9){
                document.querySelector('.test_result9').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===10){
                document.querySelector('.test_result10').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===11){
                document.querySelector('.test_result11').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===12){
                document.querySelector('.test_result12').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===13){
                document.querySelector('.test_result13').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===14){
                document.querySelector('.test_result14').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
            else if(a===15){
                document.querySelector('.test_result15').style.display = 'block';
                for (let i = 1; i <= 15; i++) {
                    if(i===a){
                        continue;
                    }
                    else{
                        document.querySelector('.test_result'+i).style.display = 'none';
                    }
                }
            }
        }



        </script>


</head>
<body>
<header class="navbar">
        <div class="nav_in">
            <div class="nav_left">
                <img src="images/icon.jpg">
            </div>
            <ul class="nav_middle">
                <li class="pad">
                <a href="home.php">Home</a>
                </li>
                <li class="pad">
                <a href="blog.php">Blog</a>
                </li>
                <li class="pad">
                <a href="love-language.php">5 Love Languages</a>
                </li>
                <li class="pad">
                <a href="compatibilitytest.php">Compatibility Test</a>
                </li>
                <li class="pad">
                <a href="about.php">About</a>
                </li>
            </ul>
            <div class="nav_right">
                <div class="menu">
                 <button class="nav_button">   
                <i class="fa-solid fa-bars icon"></i>
                 </button>
                </div>
            </div>
        </div>
    </header>



    <div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="home.php">
                <span class="item">Home</span>
            </a></li>
            <li><a href="home.php">
                <span class="item">Love Language Test</span>
            </a></li>
            <li><a href="about.php">
                <span class="item">About Love Language Test</span>
            </a></li>
            <li><a href="compatibilitytest.php">
                <span class="item">Love Language Compatibility</span>
            </a></li>
            <li><a href="about.php">
                <span class="item">About Love Language</span>
            </a></li>
            <li><a href="compatibilitytest.php">
                <span class="item">Compatibility</span>
            </a></li>
            <li>
        <hr class="my-8 border-t border-blue-300">

        </li>
        <li><a href="love-language.php">
                <span class="item">5 Love Languages</span>
            </a></li>
            <li><a href="act-of-service.html">
                <span class="item">Act of Service</span>
            </a></li>
            <li><a href="physical-touch.html">
                <span class="item">Physical Touch</span>
            </a></li>
            <li><a href="#">
                <span class="item">Blog</span>
            </a></li>
            <li><a href="receiving-gifts.html">
                <span class="item">Receiving Gifts</span>
            </a></li>
            <li><a href="words-of-affirmation.html">
                <span class="item">Words Of Affirmation</span>
            </a></li>
            <li><a href="quality-time.html">
                <span class="item">Quality Time</span>
            </a></li>
            <li><a href="understanding-mis.html">
                <span class="item">Understanding </span>
            </a></li>
            <li><a href="understanding-mis.html">
                <span class="item">Miscommunication</span>
            </a></li>
            <li><a href="why-to.html">
                <span class="item">Importance of Understanding </span>
            </a></li>
            <li><a href="love-language.php">
                <span class="item">Love Languages </span>
            </a></li>
            <li>
            <hr class="my-8 border-t border-blue-300">
        </li>
        <li><a href="privacy-policy.html">
                <span class="item">Privacy policy</span>
            </a></li>

        </ul>
    </div>
</div>

<div class="main">
    <div class="card">
        <div class="main_card_c">
            <h2 class="test">Love Language Compatibility Test:</h2>
            <div class="main_col1 mb">
                <form action="compatibilitytest.php" method="post">
                <label class="head_label">Select Love Language 1:</label>
                <select name="type1" class="main_select">
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){ if($type1==1){ ?> selected="true" <?php } }} ?> value="1">Words of Affirmation</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){ if($type1==2){ ?> selected="true" <?php } }} ?> value="2">Acts of Service</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){ if($type1==3){ ?> selected="true" <?php } }} ?> value="3">Receiving Gifts</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){ if($type1==4){ ?> selected="true" <?php } }} ?> value="4">Quality Time</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){ if($type1==5){ ?> selected="true" <?php } }} ?> value="5">Physical Touch</option>
                </select>
            </div>
            <div class="main_col2 mb">
            <label class="head_label">Select Love Language 2:</label>
            <select name="type2" class="main_select">
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){  if($type2==1){ ?> selected="true" <?php } }}?> value="1">Words of Affirmation</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){  if($type2==2){ ?> selected="true" <?php } }}?> value="2">Acts of Service</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){  if($type2==3){ ?> selected="true" <?php } }}?> value="3">Receiving Gifts</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){  if($type2==4){ ?> selected="true" <?php } }}?> value="4">Quality Time</option>
                    <option <?php if($_SERVER["REQUEST_METHOD"] == "POST"){if(isset($_POST["calculate"])){  if($type2==5){ ?> selected="true" <?php } }}?> value="5">Physical Touch</option>
                </select>
            </div>
            <div class="main_col3 mb">
                <a href="compatibilitytest.php"><button type="button" class="reset">Reset</button></a>
                <button type="submit" name="calculate" class="calculate">Calculate Compatibility</button>
            </div>
            </form>
        </div>
        <div class="resu">
            <div class="test_result1">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 90%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>
            <div class="test_result2">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 80%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>
            <div class="test_result3">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 70%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result4">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 60%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result5">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 50%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result6">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 90%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result7">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 80%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result8">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 70%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result9">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 60%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result10">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 90%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result11">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 80%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result12">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 70%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result13">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 90%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result14">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 80%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>

            <div class="test_result15">
                <p class="b ma head">Compatibility Result:</p>
                <p class="a ma text"><?php echo $a." and ".$b.": 90%" ?> </p>
                <p class="b pa head">Compatibility Analysis:</p>
                <p class="ma">What's Compatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
                    
                </ul>
                <p class="ma">What's Incompatible:</p>
                <ul class="list">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="b head">
                Find common ground and compromise to bridge the gap between your love languages. 
                </div>
                <p class="a ma text">Take this opportunity to understand each other's needs and explore ways to show love and appreciation.</p>
                <div class="b head">
                Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.  
                </div>
                <p class="a ma text">Effective communication is essential. Discuss your love languages openly and be patient with each other's differences.</p>
            </div>
        </div>
        
    </div>
</div>

    <div class="about_container">
            <div class="about_card">
                <div class="about_head">
                    <h2  class="ab_head b">Love Language Compatibility Test</h2>
                </div>
                <div class="about_main">
                    <div>
                        <h2 class="b">About the Love Language Compatibility Test</h2>
                        <p class="a">The Love Language Compatibility Test is a tool designed to help you understand how compatible you are with someone based on your primary love languages. Love languages are the ways in which individuals give and receive love and affection. By taking this test, you can gain insights into how well your love languages align with those of your partner or potential partner.</p>
                    </div>
                    <div>
                        <h2 class="b">How to Use the Test</h2>
                        <p class="a">To use the Love Language Compatibility Test, you and your partner can each select your primary love language from the options provided. Once selected, the test will analyze your choices to determine how well your love languages complement each other. The results will help you understand your compatibility and how to strengthen your relationship.</p>

                    </div>
                    <div>
                        <h2 class="b">Why Use the Test</h2>
                        <p class="a">The Love Language Compatibility Test can be a valuable tool for couples and individuals seeking to improve their relationships. By understanding your love languages and compatibility, you can:</p>
                        <ul class="a notes fn1">
                        <li>
                        Enhance communication and connection with your partner.
                        </li>
                        <li>
                        Identify areas of alignment and potential areas for improvement.
                        </li>
                        <li>
                        Learn how to express love and affection in ways that resonate with your partner.
                        </li>
                    </ul>
                    </div>
                    <div>
                        <h2 class="b">Accuracy</h2>
                        <p class="a">While the Love Language Compatibility Test can provide valuable insights, it's important to remember that compatibility is influenced by various factors. Love languages are just one aspect of it. The accuracy of the test results depends on the honesty and self-awareness of the individuals taking the test. It serves as a tool for self-discovery and open communication with your partner.</p>
                    </div>
                    <div>
                        <h2 class="b">Test Duration</h2>
                        <p class="a">The Love Language Compatibility Test consists of a series of questions about your love language preferences. The duration of the test depends on how quickly you answer the questions, but it typically takes around 5-10 minutes to complete.</p>
                    </div>
                    <div>
                        <h2 class="b">Data Handling</h2>
                        <p class="a">We take your privacy and data security seriously. The data collected during the Love Language Compatibility Test is used solely for the purpose of providing you with the test results and improving our services. We do not sell or share your personal data with third parties. Your information is handled in accordance with our privacy policy to ensure confidentiality and security.</p>
                    </div>
                    
                    
                    <hr class="foot">

                    <div>
                    <h2 class="b">Notes</h2>
                    <ul class="a notes fn1">
                        <li>
                        The Love Language Compatibility Test is an informative tool designed to enhance your understanding of love languages and compatibility. It does not replace professional relationship advice or counseling.
                        </li>
                        <li>
                        Compatibility is a multifaceted concept, and love languages are just one dimension of it. Effective communication, shared values, and mutual respect are also crucial for a successful relationship.
                        </li>
                    </ul>
                    </div>

                </div>
                

               
            </div>

        </div>

    </div>




    <footer class="main_foot">
        <div class="col1">
        © 2024 Love Language Test v1.4.2
        </div>
        <div class="col2">
        Made by <span class="foot_s">  ♥</span>Devendra Subinam & Suman
        </div>
        <div class="col3">
        <a href="home.php" class="foot_a">Home</a>
        <span class="foot_s">|</span>
        <a href="home.php" class="foot_a">Contact</a>
        <span class="foot_s">|</span>
        <a href="privacy.php" class="foot_a">Privacy Policy</a>
        </div>

    </footer>
    
</body>
</html>