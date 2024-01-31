
<script>

function setActive(clickedButton) {
    // Remove the 'active' class from all buttons in the group
    var buttons = document.querySelectorAll('.group-button');
    buttons.forEach(function(button) {
      button.classList.remove('active');
    });

    // Add the 'active' class to the clicked button
    clickedButton.classList.add('active');
  }

</script>


<div class="question_button" id="question1">
    <button class="qb" onclick="setActive(this, 'question1')">1</button>
    <button class="qb" onclick="setActive(this, 'question1')">2</button>
    <!-- ... other buttons ... -->
</div>

<div class="question_button" id="question2">
    <button class="qb" onclick="setActive(this, 'question2')">1</button>
    <button class="qb" onclick="setActive(this, 'question2')">2</button>
    <!-- ... other buttons ... -->
</div>

<script>
    function setActive(clickedButton, group) {
        var buttons = document.querySelectorAll(`#${group} button`);
        buttons.forEach(function (button) {
            button.classList.remove('active');
        });

        clickedButton.classList.add('active');
    }

    function nextButton() {
        document.getElementsByClassName("question_container").style.display = "none";
        document.getElementsByClassName("question_container1").style.display = "block";
    }
</script>



  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .active {
      background-color: #4CAF50; /* Set the active background color */
      color: white; /* Set the active text color */
    }
  </style>
  <title>Active Button Group</title>
</head>
<body>

<button class="group-button" onclick="setActive(this)">Button 1</button>
<button class="group-button" onclick="setActive(this)">Button 2</button>
<button class="group-button" onclick="setActive(this)">Button 3</button>

<script>
  function setActive(clickedButton) {
    // Remove the 'active' class from all buttons in the group
    var buttons = document.querySelectorAll('.group-button');
    buttons.forEach(function(button) {
      button.classList.remove('active');
    });

    // Add the 'active' class to the clicked button
    clickedButton.classList.add('active');
  }
</script>

</body>
</html>




<?php
    $err1=$err2=$err3=$err4=$err5="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!isset($_POST["q1"]) || !isset($_POST["q2"]) || !isset($_POST["q3"]) || !isset($_POST["q4"]) || !isset($_POST["q5"])){
            $ree1="Please select all answer from all questions";
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
        
        function setActive(clickedButton,group) {
            
            var buttons = document.querySelectorAll(`#${group} button`);
            buttons.forEach(function(button) {
            button.classList.remove('active');
            });

            
            clickedButton.classList.add('active');
        }
        function nextButton(now,next){
            
            document.querySelector(`.${now}`).style.display="none";
            document.querySelector(`.${next}`).style.display="block";
        }

        function previous_button(now,previous){
            
            document.querySelector(`.${now}`).style.display="none";
            document.querySelector(`.${previous}`).style.display="block";
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
            <li><a href="index.php">
                <span class="item">Home</span>
            </a></li>
            <li><a href="index.php">
                <span class="item">Love Language Test</span>
            </a></li>
            <li><a href="about.php">
                <span class="item">About Love Language Test</span>
            </a></li>
            <li><a href="">
                <span class="item">Love Language Compatibility</span>
            </a></li>
            <li><a href="">
                <span class="item">About Love Language</span>
            </a></li>
            <li><a href="">
                <span class="item">Compatibility</span>
            </a></li>
            <li>
        <hr class="my-8 border-t border-blue-300">

        </li>
        <li><a href="love-language.php">
                <span class="item">5 Love Languages</span>
            </a></li>
            <li><a href="">
                <span class="item">Act of Service</span>
            </a></li>
            <li><a href="physical-touch.html">
                <span class="item">Physical Touch</span>
            </a></li>
            <li><a href="">
                <span class="item">Blog</span>
            </a></li>
            <li><a href="">
                <span class="item">Receiving Gifts</span>
            </a></li>
            <li><a href="">
                <span class="item">Words Of Affirmation</span>
            </a></li>
            <li><a href="quality-time.html">
                <span class="item">Quality Time</span>
            </a></li>
            <li><a href="">
                <span class="item">Understanding </span>
            </a></li>
            <li><a href="">
                <span class="item">Miscommunication</span>
            </a></li>
            <li><a href="">
                <span class="item">Importance of Understanding </span>
            </a></li>
            <li><a href="">
                <span class="item">Love Languages </span>
            </a></li>
            <li>
            <hr class="my-8 border-t border-blue-300">
        </li>
        <li><a href="">
                <span class="item">Privacy policy</span>
            </a></li>

        </ul>
    </div>
</div>

    <div class="main">
        <div class="card">
            <div class="card_main">
                <div>
                    <p class="a"><b>17,859</b> tests taken in the last 30 days</p>
                    <p class="b">Ready to crack the code of love? Dive into our snappy 5-minute quiz! Inspired by love guru Dr. Gary Chapman, it's all about love languages - your secret love dialect. Discover how you and your partner really tick in the language of love. It’s a quick, enlightening ride to understanding your unique love style. Spark up better chats and deeper connections. Start now and give your love life a fun upgrade! 🚀❤️🔍</p>
                </div>
                <h2 class="b mb fs">Discover Your Love Language:</h2>
                <div class="loaded mb">
                    <div class="load">

                    </div>
                </div>
                <form action="home.php" method="post">
                <div class="question_container">
                    
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel connected to my partner through a hug or a kiss.
                        </div>
                        <div class="question_button" id="question1">
                        <button class="qb" name="q1" value="1" onclick="setActive(this,'question1')">1</button>
                        <button class="qb" name="q1" value="2" onclick="setActive(this,'question1')">2</button>
                        <button class="qb" name="q1" value="3" onclick="setActive(this,'question1')">3</button>
                        <button class="qb" name="q1" value="4" onclick="setActive(this,'question1')">4</button>
                        <button class="qb" name="q1" value="5" onclick="setActive(this,'question1')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Small gestures, such as running errands or making a meal, are meaningful to me.
                        </div>
                        <div class="question_button" id="question2">
                        <button class="qb" name="q2" value="1" onclick="setActive(this,'question2')">1</button>
                        <button class="qb" name="q2" value="2"onclick="setActive(this,'question2')">2</button>
                        <button class="qb" name="q2" value="3"onclick="setActive(this,'question2')">3</button>
                        <button class="qb" name="q2" value="4"onclick="setActive(this,'question2')">4</button>
                        <button class="qb" name="q2" value="5"onclick="setActive(this,'question2')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel loved when my partner compliments my appearance or skills.
                        </div>
                        <div class="question_button" id="question3">
                        <button class="qb" name="q3" value="1" onclick="setActive(this,'question3')">1</button>
                        <button class="qb" name="q3" value="2" onclick="setActive(this,'question3')">2</button>
                        <button class="qb" name="q3" value="3" onclick="setActive(this,'question3')">3</button>
                        <button class="qb" name="q3" value="4" onclick="setActive(this,'question3')">4</button>
                        <button class="qb" name="q3" value="5" onclick="setActive(this,'question3')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I like it when my partner doesn’t use their phone when we are together.
                        </div>
                        <div class="question_button" id="question4">
                        <button class="qb" name="q4" value="1" onclick="setActive(this,'question4')">1</button>
                        <button class="qb" name="q4" value="2" onclick="setActive(this,'question4')">2</button>
                        <button class="qb" name="q4" value="3" onclick="setActive(this,'question4')">3</button>
                        <button class="qb" name="q4" value="4" onclick="setActive(this,'question4')">4</button>
                        <button class="qb" name="q4" value="5" onclick="setActive(this,'question4')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel very happy when my partner travels without me and brings me a little gift after they come back.
                        </div>
                        <div class="question_button" id="question5">
                        <button class="qb" name="q5" value="1" onclick="setActive(this,'question5')">1</button>
                        <button class="qb" name="q5" value="2" onclick="setActive(this,'question5')">2</button>
                        <button class="qb" name="q5" value="3" onclick="setActive(this,'question5')">3</button>
                        <button class="qb" name="q5" value="4" onclick="setActive(this,'question5')">4</button>
                        <button class="qb" name="q5" value="5" onclick="setActive(this,'question5')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div></div>
                        <div>
                            <button type="submit" class="next_button" onclick="nextButton('question_container','question_container1')">Next</button>
                        </div>
                    </div>
                    <span><?php echo $err1; ?></span>

                </div>

                

                <div class="question_container1">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I can easily express my feelings and emotions verbally when I am happy or upset with my partner.
                        </div>
                        <div class="question_button" id="question6">
                        <button class="qb" name="q6" value="1" onclick="setActive(this,'question6')">1</button>
                        <button class="qb" name="q6" value="2" onclick="setActive(this,'question6')">2</button>
                        <button class="qb" name="q6" value="3" onclick="setActive(this,'question6')">3</button>
                        <button class="qb" name="q6" value="4" onclick="setActive(this,'question6')">4</button>
                        <button class="qb" name="q6" value="5" onclick="setActive(this,'question6')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        It means a lot when my partner holds my hand or puts their arm around me in public.
                        </div>
                        <div class="question_button" id="question7">
                        <button class="qb" name="q7" value="1" onclick="setActive(this,'question7')">1</button>
                        <button class="qb" name="q7" value="2" onclick="setActive(this,'question7')">2</button>
                        <button class="qb" name="q7" value="3" onclick="setActive(this,'question7')">3</button>
                        <button class="qb" name="q7" value="4" onclick="setActive(this,'question7')">4</button>
                        <button class="qb" name="q7" value="5" onclick="setActive(this,'question7')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Doing practical things together (e.g., household chores, DIY projects) makes me feel loved.
                        </div>
                        <div class="question_button" id="question8">
                        <button class="qb" name="q8" value="1" onclick="setActive(this,'question8')">1</button>
                        <button class="qb" name="q8" value="2" onclick="setActive(this,'question8')">2</button>
                        <button class="qb" name="q8" value="3" onclick="setActive(this,'question8')">3</button>
                        <button class="qb" name="q8" value="4" onclick="setActive(this,'question8')">4</button>
                        <button class="qb" name="q8" value="5" onclick="setActive(this,'question8')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Receiving thoughtful and personalized gifts makes me feel special.
                        </div>
                        <div class="question_button" id="question9">
                        <button class="qb" name="q9" value="1" onclick="setActive(this,'question9')">1</button>
                        <button class="qb" name="q9" value="2" onclick="setActive(this,'question9')">2</button>
                        <button class="qb" name="q9" value="3" onclick="setActive(this,'question9')">3</button>
                        <button class="qb" name="q9" value="4" onclick="setActive(this,'question9')">4</button>
                        <button class="qb" name="q9" value="5" onclick="setActive(this,'question9')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I appreciate when my partner actively listens to me and empathizes with my feelings.
                        </div>
                        <div class="question_button" id="question10">
                        <button class="qb" name="q10" value="1" onclick="setActive(this,'question10')">1</button>
                        <button class="qb" name="q10" value="2" onclick="setActive(this,'question10')">2</button>
                        <button class="qb" name="q10" value="3" onclick="setActive(this,'question10')">3</button>
                        <button class="qb" name="q10" value="4" onclick="setActive(this,'question10')">4</button>
                        <button class="qb" name="q10" value="5" onclick="setActive(this,'question10')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button class="previous_button" onclick="previous_button('question_container1','question_container')">Previous</button>
                        </div>
                        <div>
                            <button class="next_button" onclick="nextButton('question_container1','question_container2')">Next</button>
                        </div>
                    </div>

                </div>
                <div class="question_container2">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Quality time spent with my partner, even if it's simple, is important to me.
                        </div>
                        <div class="question_button" id="question11">
                        <button class="qb" name="q11" value="1" onclick="setActive(this,'question11')">1</button>
                        <button class="qb" name="q11" value="2" onclick="setActive(this,'question11')">2</button>
                        <button class="qb" name="q11" value="3" onclick="setActive(this,'question11')">3</button>
                        <button class="qb" name="q11" value="4" onclick="setActive(this,'question11')">4</button>
                        <button class="qb" name="q11" value="5" onclick="setActive(this,'question11')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel loved when my partner shows physical affection, such as hugging, cuddling, or kissing.
                        </div>
                        <div class="question_button" id="question12">
                        <button class="qb" name="q12" value="1" onclick="setActive(this,'question12')">1</button>
                        <button class="qb" name="q12" value="2" onclick="setActive(this,'question12')">2</button>
                        <button class="qb" name="q12" value="3" onclick="setActive(this,'question12')">3</button>
                        <button class="qb" name="q12" value="4" onclick="setActive(this,'question12')">4</button>
                        <button class="qb" name="q12" value="5" onclick="setActive(this,'question12')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Acts of service that help me with my daily responsibilities make me feel cared for.
                        </div>
                        <div class="question_button" id="question13">
                        <button class="qb" name="q13" value="1" onclick="setActive(this,'question13')">1</button>
                        <button class="qb" name="q13" value="2" onclick="setActive(this,'question13')">2</button>
                        <button class="qb" name="q13" value="3" onclick="setActive(this,'question13')">3</button>
                        <button class="qb" name="q13" value="4" onclick="setActive(this,'question13')">4</button>
                        <button class="qb" name="q13" value="5" onclick="setActive(this,'question13')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I value when my partner gives me compliments or praises my achievements.
                        </div>
                        <div class="question_button" id="question14">
                        <button class="qb" name="q14" value="1" onclick="setActive(this,'question14')">1</button>
                        <button class="qb" name="q14" value="2" onclick="setActive(this,'question14')">2</button>
                        <button class="qb" name="q14" value="3" onclick="setActive(this,'question14')">3</button>
                        <button class="qb" name="q14" value="4" onclick="setActive(this,'question14')">4</button>
                        <button class="qb" name="q14" value="5" onclick="setActive(this,'question14')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Receiving unexpected gifts or tokens of affection brightens my day.
                        </div>
                        <div class="question_button" id="question15">
                        <button class="qb" name="q15" value="1" onclick="setActive(this,'question15')">1</button>
                        <button class="qb" name="q15" value="2" onclick="setActive(this,'question15')">2</button>
                        <button class="qb" name="q15" value="3" onclick="setActive(this,'question15')">3</button>
                        <button class="qb" name="q15" value="4" onclick="setActive(this,'question15')">4</button>
                        <button class="qb" name="q15" value="5" onclick="setActive(this,'question15')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button class="previous_button" onclick="previous_button('question_container2','question_container1')">Previous</button>
                        </div>
                        <div>
                            <button class="next_button" onclick="nextButton('question_container2','question_container3')">Next</button>
                        </div>
                    </div>

                </div>

                <div class="question_container3">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Sharing experiences and creating memories together is meaningful to me.
                        </div>
                        <div class="question_button" id="question16">
                        <button class="qb" name="q16" value="1" onclick="setActive(this,'question16')">1</button>
                        <button class="qb" name="q16" value="2" onclick="setActive(this,'question16')">2</button>
                        <button class="qb" name="q16" value="3" onclick="setActive(this,'question16')">3</button>
                        <button class="qb" name="q16" value="4" onclick="setActive(this,'question16')">4</button>
                        <button class="qb" name="q16" value="5" onclick="setActive(this,'question16')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Physical touch, like holding hands or back rubs, makes me feel loved and connected.
                        </div>
                        <div class="question_button" id="question17">
                        <button class="qb" name="q17" value="1" onclick="setActive(this,'question17')">1</button>
                        <button class="qb" name="q17" value="2" onclick="setActive(this,'question17')">2</button>
                        <button class="qb" name="q17" value="3" onclick="setActive(this,'question17')">3</button>
                        <button class="qb" name="q17" value="4" onclick="setActive(this,'question17')">4</button>
                        <button class="qb" name="q17" value="5" onclick="setActive(this,'question17')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Acts of service that make my life easier or more convenient show me love.
                        </div>
                        <div class="question_button" id="question18">
                        <button class="qb" name="q18" value="1" onclick="setActive(this,'question18')">1</button>
                        <button class="qb" name="q18" value="2" onclick="setActive(this,'question18')">2</button>
                        <button class="qb" name="q18" value="3" onclick="setActive(this,'question18')">3</button>
                        <button class="qb" name="q18" value="4" onclick="setActive(this,'question18')">4</button>
                        <button class="qb" name="q18" value="5" onclick="setActive(this,'question18')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Verbal affirmations and compliments from my partner make me feel loved and appreciated.
                        </div>
                        <div class="question_button" id="question19">
                        <button class="qb" name="q19" value="1" onclick="setActive(this,'question19')">1</button>
                        <button class="qb" name="q19" value="2" onclick="setActive(this,'question19')">2</button>
                        <button class="qb" name="q19" value="3" onclick="setActive(this,'question19')">3</button>
                        <button class="qb" name="q19" value="4" onclick="setActive(this,'question19')">4</button>
                        <button class="qb" name="q19" value="5" onclick="setActive(this,'question19')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel loved when my partner surprises me with thoughtful gestures or presents.
                        </div>
                        <div class="question_button" id="question20">
                        <button class="qb" name="q20" value="1" onclick="setActive(this,'question20')">1</button>
                        <button class="qb" name="q20" value="2" onclick="setActive(this,'question20')">2</button>
                        <button class="qb" name="q20" value="3" onclick="setActive(this,'question20')">3</button>
                        <button class="qb" name="q20" value="4" onclick="setActive(this,'question20')">4</button>
                        <button class="qb" name="q20" value="5" onclick="setActive(this,'question20')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button class="previous_button" onclick="previous_button('question_container3','question_container2')">Previous</button>
                        </div>
                        <div>
                            <button class="next_button" onclick="nextButton('question_container3','question_container4')">Next</button>
                        </div>
                    </div>

                </div>

                <div class="question_container4">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Physical touch, such as holding hands or gentle touches, makes me feel connected.
                        </div>
                        <div class="question_button" id="question21">
                        <button class="qb" name="q21" value="1" onclick="setActive(this,'question21')">1</button>
                        <button class="qb" name="q21" value="2" onclick="setActive(this,'question21')">2</button>
                        <button class="qb" name="q21" value="3" onclick="setActive(this,'question21')">3</button>
                        <button class="qb" name="q21" value="4" onclick="setActive(this,'question21')">4</button>
                        <button class="qb" name="q21" value="5" onclick="setActive(this,'question21')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Acts of service that help me with tasks or responsibilities make me feel loved.
                        </div>
                        <div class="question_button" id="question22">
                        <button class="qb" name="q22" value="1" onclick="setActive(this,'question22')">1</button>
                        <button class="qb" name="q22" value="2" onclick="setActive(this,'question22')">2</button>
                        <button class="qb" name="q22" value="3" onclick="setActive(this,'question22')">3</button>
                        <button class="qb" name="q22" value="4" onclick="setActive(this,'question22')">4</button>
                        <button class="qb" name="q22" value="5" onclick="setActive(this,'question22')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I appreciate receiving love notes, letters, or text messages expressing affection.
                        </div>
                        <div class="question_button" id="question23">
                        <button class="qb" name="q23" value="1" onclick="setActive(this,'question23')">1</button>
                        <button class="qb" name="q23" value="2" onclick="setActive(this,'question23')">2</button>
                        <button class="qb" name="q23" value="3" onclick="setActive(this,'question23')">3</button>
                        <button class="qb" name="q23" value="4" onclick="setActive(this,'question23')">4</button>
                        <button class="qb" name="q23" value="5" onclick="setActive(this,'question23')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Spending uninterrupted and focused time with my partner makes me feel valued.
                        </div>
                        <div class="question_button" id="question24">
                        <button class="qb" name="q24" value="1" onclick="setActive(this,'question24')">1</button>
                        <button class="qb" name="q24" value="2" onclick="setActive(this,'question24')">2</button>
                        <button class="qb" name="q24" value="3" onclick="setActive(this,'question24')">3</button>
                        <button class="qb" name="q24" value="4" onclick="setActive(this,'question24')">4</button>
                        <button class="qb" name="q24" value="5" onclick="setActive(this,'question24')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel loved when my partner gives me meaningful and thoughtful gifts.
                        </div>
                        <div class="question_button" id="question25">
                        <button class="qb" name="q25" value="1" onclick="setActive(this,'question25')">1</button>
                        <button class="qb" name="q25" value="2" onclick="setActive(this,'question25')">2</button>
                        <button class="qb" name="q25" value="3" onclick="setActive(this,'question25')">3</button>
                        <button class="qb" name="q25" value="4" onclick="setActive(this,'question25')">4</button>
                        <button class="qb" name="q25" value="5" onclick="setActive(this,'question25')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button class="previous_button" onclick="previous_button('question_container4','question_container3')">Previous</button>
                        </div>
                        <div>
                            <button type="submit" class="next_button" onclick="">Submit</button>
                        </div>
                    </div>
    </form>

                </div>
                
            </div>
        </div>
    </div>

        <div class="about_container">
            <div class="about_card">
                <div class="about_head">
                    <h2  class="ab_head b">Love Language Test</h2>
                </div>
                <div class="about_main">
                    <div>
                        <h2 class="b">About the Love Language Test</h2>
                        <p class="a">The Love Language Test is an insightful and interactive tool that aims to reveal the unique ways you prefer to give and receive love. The concept of 'love languages' suggests that people have distinct preferences in how they express and experience affection. This test, through a series of carefully crafted questions, helps you uncover your primary and secondary love languages - the dominant ways you communicate and perceive love. Whether it's through words of affirmation, acts of service, receiving gifts, quality time, or physical touch, understanding your love languages can significantly enhance your interpersonal connections and enable you to convey your feelings more effectively and meaningfully to those you cherish.</p>
                    </div>
                    <div>
                        <h2 class="b">How Is the Analysis Made?</h2>
                        <p class="a">The Love Language Test analyzes your responses to the questions you answered during the test. Each question corresponds to one of the five love languages: Words of Affirmation, Acts of Service, Receiving Gifts, Quality Time, and Physical Touch. Based on your selected answers, the test calculates the frequency of each love language that resonates with you the most.<br>

                            The love language with the highest frequency is considered your primary love language, which represents the way you most strongly feel loved and appreciated. The love language with the second-highest frequency is your secondary love language, providing additional insight into how you perceive and express love.<br>

                            The analysis aims to offer you a deeper understanding of your emotional needs, preferences, and communication style when it comes to giving and receiving love. It serves as a tool to enhance self-awareness and improve your relationships by aligning your expressions of love with the love languages that resonate with you the most.</p>
                    </div>
                    <div>
                        <h2 class="b">Is This a Compatibility Test?</h2>
                        <p class="a">Contrary to a compatibility test that assesses how well two individuals might get along, the Love Language Test focuses solely on deciphering your personal love language preferences. It's not about matching you with someone else but rather about deepening your understanding of yourself. This understanding is crucial in all forms of relationships, be they romantic, familial, or friendships. By recognizing and appreciating your unique love language profile, you can foster stronger and more fulfilling relationships with those around you.</p>
                    </div>
                    <div>
                        <h2 class="b">How Long Is This Test?</h2>
                        <p class="a">The Love Language Test consists of a series of thought-provoking questions, each designed to tap into your preferences and experiences regarding love and affection. The duration of the test varies depending on how quickly you reflect on and respond to each question. Generally, it takes about 5-10 minutes to complete. This short investment of time can provide valuable insights into your emotional communication style.</p>
                    </div>
                    <div>
                        <h2 class="b">Is This Test Really Free?</h2>
                        <p class="a">Yes, the Love Language Test is offered completely free of charge. We believe in making self-awareness and personal growth accessible to everyone. Therefore, there are no fees, hidden or otherwise, associated with this test. Our primary goal is to provide you with valuable insights into your love language preferences without any financial barriers.</p>
                    </div>
                    <div>
                        <h2 class="b">What Will My Results for the Love Styles Test Look Like?</h2>
                        <p class="a">Upon completing the Love Language Test, you will receive a comprehensive report detailing your primary and secondary love languages. This report includes not only a description of each love language but also real-world examples and scenarios that illustrate how these preferences manifest in your daily interactions. These results aim to enhance your understanding of your emotional needs and how you connect with others, offering a foundation for stronger and more empathetic relationships.</p>
                    </div>
                    <div>
                        <h2 class="b">Is This Personality Test Appropriate for Children?</h2>
                        <p class="a">The Love Language Test is designed to be inclusive and accessible for individuals of various ages, including children. While children can certainly benefit from gaining insights into their emotional expression, it is advisable for younger children to have the guidance and support of parents or guardians. This assistance ensures that they can understand the questions and accurately express their feelings and preferences.</p>
                    </div>
                    <div>
                        <h2 class="b">Are You Going to Sell My Data?</h2>
                        <p class="a">We are committed to upholding the highest standards of privacy and confidentiality. The information you provide during the Love Language Test is used exclusively for the purpose of generating your personalized results. We firmly stand against selling or sharing your personal data with third parties. Your trust is important to us, and we are dedicated to protecting your personal information and ensuring your privacy throughout the testing process.</p>
                    </div>
                    <hr class="foot">

                    <div>
                    <h2 class="b">Notes</h2>
                    <ul class="a notes fn1">
                        <li>
                        The Love Language Test is an informative tool designed to enhance your understanding of love languages. It does not replace professional advice or counseling.
                        </li>
                        <li>
                        The results of the Love Language Test are meant to provide insights into your personal preferences and should be interpreted in the context of your unique experiences and relationships.
                        </li>
                    </ul>
                    </div>

                </div>
                

               
            </div>

        </div>

    

    <footer class="main_foot">
        <div class="col1">
        © 2024 Love Language Test v1.4.2
        </div>
        <div class="col2">
        Made by <span class="foot_s">  ♥</span> Devendra Subinam & Suman
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



<script>
    // Get all buttons with the specified name
    var buttons = document.getElementsByName('myButton');

    // Attach a click event handler to each button
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        alert('Button ' + button.innerText + ' clicked!');
      });
    });