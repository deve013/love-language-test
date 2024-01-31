
<?php

session_start();
    
if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST["data_submit"])){
            
            
            
            $data=$_POST["q1"]+$_POST["q2"]+$_POST["q3"]+$_POST["q4"]+$_POST["q5"]+
            $_POST["q6"]+$_POST["q7"]+$_POST["q8"]+$_POST["q9"]+$_POST["q10"]+
            $_POST["q11"]+$_POST["q12"]+$_POST["q13"]+$_POST["q14"]+$_POST["q15"]+
            $_POST["q16"]+$_POST["q17"]+$_POST["q18"]+$_POST["q19"]+$_POST["q20"]+
            $_POST["q21"]+$_POST["q22"]+$_POST["q23"]+$_POST["q24"]+$_POST["q25"];


            

           $_SESSION["data"]=$data;

           header("location:result.php");

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


        function setActiveAndSubmit(button,containerId,hiddenInputId){
            setActive(button, containerId);

            document.getElementById(hiddenInputId).value = button.value;
        }

       



        function nextButton(now,next,a,b,c){
            let counter=0;


            

      
            for (let i = a; i <= b; i++) {
                
                var buttonContainer = document.getElementById('question' + i);
                var buttons = buttonContainer.getElementsByTagName('BUTTON');
                

                for (let j = 0; j < buttons.length; j++) {
                    if (buttons[j].classList.contains('active')) {
                        counter++;
                        break;
                    }
                }

                
            }

            

            if (counter!==b-a+1) {
                document.querySelector('.err'+a).style.display = "block";
            }
            else{
            
                document.querySelector('.err'+a).style.display = "none";

                window.scrollTo(0,0);
                
                document.querySelector('.load').style.width = `${c}%`;
            document.querySelector(`.${now}`).style.display="none";
            document.querySelector(`.${next}`).style.display="block";
            }
        }

        function previous_button(now,previous){

            
            
            document.querySelector(`.${now}`).style.display="none";
            document.querySelector(`.${previous}`).style.display="block";
        }

        function submitButton(a,b){

            let counter=0;

      
            for (let i = a; i <= b; i++) {
                
                var buttonContainer = document.getElementById('question' + i);
                var buttons = buttonContainer.getElementsByTagName('BUTTON');
                

                for (let j = 0; j < buttons.length; j++) {
                    if (buttons[j].classList.contains('active')) {
                        counter++;
                        break;
                    }
                }

                
            }

            

            if (counter!==b-a+1) {
                document.querySelector('.err'+a).style.display = "block";
                event.preventDefault();
            }
            else{
                document.getElementById('question_form').submit();
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
                <form id="question_form" onsubmit="submitButton(21,25, event)" action="home.php" method="post">
                <div class="question_container">
                    <input type="hidden" name="q1" id="hidden_q1" value="" >
                    <input type="hidden" name="q2" id="hidden_q2" value="" >
                    <input type="hidden" name="q3" id="hidden_q3" value="" >
                    <input type="hidden" name="q4" id="hidden_q4" value="" >
                    <input type="hidden" name="q5" id="hidden_q5" value="" >
                    <input type="hidden" name="q6" id="hidden_q6" value="" >
                    <input type="hidden" name="q7" id="hidden_q7" value="" >
                    <input type="hidden" name="q8" id="hidden_q8" value="" >
                    <input type="hidden" name="q9" id="hidden_q9" value="" >
                    <input type="hidden" name="q10" id="hidden_q10" value="" >
                    <input type="hidden" name="q11" id="hidden_q11" value="" >
                    <input type="hidden" name="q12" id="hidden_q12" value="" >
                    <input type="hidden" name="q13" id="hidden_q13" value="" >
                    <input type="hidden" name="q14" id="hidden_q14" value="" >
                    <input type="hidden" name="q15" id="hidden_q15" value="" >
                    <input type="hidden" name="q16" id="hidden_q16" value="" >
                    <input type="hidden" name="q17" id="hidden_q17" value="" >
                    <input type="hidden" name="q18" id="hidden_q18" value="" >
                    <input type="hidden" name="q19" id="hidden_q19" value="" >
                    <input type="hidden" name="q20" id="hidden_q20" value="" >
                    <input type="hidden" name="q21" id="hidden_q21" value="" >
                    <input type="hidden" name="q22" id="hidden_q22" value="" >
                    <input type="hidden" name="q23" id="hidden_q23" value="" >
                    <input type="hidden" name="q24" id="hidden_q24" value="" >
                    <input type="hidden" name="q25" id="hidden_q25" value="" >
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I feel connected to my partner through a hug or a kiss.
                        </div>
                        <div class="question_button" id="question1">
                        <button type="button" class="qb"  value="1" onclick="setActiveAndSubmit(this,'question1','hidden_q1')">1</button>
                        <button type="button" class="qb"  value="2" onclick="setActiveAndSubmit(this,'question1','hidden_q1')">2</button>
                        <button type="button" class="qb"  value="3" onclick="setActiveAndSubmit(this,'question1','hidden_q1')">3</button>
                        <button type="button" class="qb"  value="4" onclick="setActiveAndSubmit(this,'question1','hidden_q1')">4</button>
                        <button type="button" class="qb"  value="5" onclick="setActiveAndSubmit(this,'question1','hidden_q1')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question2','hidden_q2')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question2','hidden_q2')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question2','hidden_q2')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question2','hidden_q2')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question2','hidden_q2')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question3','hidden_q3')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question3','hidden_q3')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question3','hidden_q3')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question3','hidden_q3')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question3','hidden_q3')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question4','hidden_q4')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question4','hidden_q4')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question4','hidden_q4')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question4','hidden_q4')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question4','hidden_q4')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question5','hidden_q5')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question5','hidden_q5')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question5','hidden_q5')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question5','hidden_q5')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question5','hidden_q5')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div></div>
                        <div>
                            <button type="button" class="next_button" onclick="nextButton('question_container','question_container1',1,5,40)">Next</button>
                        </div>
                    </div>
                    <span class="err1">Please select an answer for all question.</span>

                </div>

                

                <div class="question_container1">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        I can easily express my feelings and emotions verbally when I am happy or upset with my partner.
                        </div>
                        <div class="question_button" id="question6">
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question6','hidden_q6')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question6','hidden_q6')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question6','hidden_q6')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question6','hidden_q6')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question6','hidden_q6')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question7','hidden_q7')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question7','hidden_q7')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question7','hidden_q7')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question7','hidden_q7')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question7','hidden_q7')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question8','hidden_q8')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question8','hidden_q8')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question8','hidden_q8')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question8','hidden_q8')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question8','hidden_q8')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question9','hidden_q9')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question9','hidden_q9')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question9','hidden_q9')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question9','hidden_q9')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question9','hidden_q9')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question10','hidden_q10')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question10','hidden_q10')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question10','hidden_q10')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question10','hidden_q10')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question10','hidden_q10')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button type="button" class="previous_button" onclick="previous_button('question_container1','question_container')">Previous</button>
                        </div>
                        <div>
                            <button type="button" class="next_button" onclick="nextButton('question_container1','question_container2',6,10,60)">Next</button>
                        </div>
                    </div>
                    <span class="err6">Please select an answer for all question.</span>

                </div>
                <div class="question_container2">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Quality time spent with my partner, even if it's simple, is important to me.
                        </div>
                        <div class="question_button" id="question11">
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question11','hidden_q11')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question11','hidden_q11')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question11','hidden_q11')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question11','hidden_q11')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question11','hidden_q11')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question12','hidden_q12')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question12','hidden_q12')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question12','hidden_q12')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question12','hidden_q12')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question12','hidden_q12')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question13','hidden_q13')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question13','hidden_q13')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question13','hidden_q13')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question13','hidden_q13')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question13','hidden_q13')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question14','hidden_q14')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question14','hidden_q14')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question14','hidden_q14')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question14','hidden_q14')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question14','hidden_q14')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question15','hidden_q15')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question15','hidden_q15')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question15','hidden_q15')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question15','hidden_q15')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question15','hidden_q15')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button type="button" class="previous_button" onclick="previous_button('question_container2','question_container1')">Previous</button>
                        </div>
                        <div>
                            <button type="button" class="next_button" onclick="nextButton('question_container2','question_container3',11,15,80)">Next</button>
                        </div>
                    </div>
                    <span class="err11">Please select an answer for all question.</span>

                </div>

                <div class="question_container3">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Sharing experiences and creating memories together is meaningful to me.
                        </div>
                        <div class="question_button" id="question16">
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question16','hidden_q16')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question16','hidden_q16')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question16','hidden_q16')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question16','hidden_q16')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question16','hidden_q16')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question17','hidden_q17')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question17','hidden_q17')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question17','hidden_q17')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question17','hidden_q17')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question17','hidden_q17')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question18','hidden_q18')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question18','hidden_q18')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question18','hidden_q18')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question18','hidden_q18')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question18','hidden_q18')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question19','hidden_q19')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question19','hidden_q19')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question19','hidden_q19')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question19','hidden_q19')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question19','hidden_q19')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question20','hidden_q20')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question20','hidden_q20')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question20','hidden_q20')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question20','hidden_q20')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question20','hidden_q20')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button type="button" class="previous_button" onclick="previous_button('question_container3','question_container2')">Previous</button>
                        </div>
                        <div>
                            <button type="button" class="next_button" onclick="nextButton('question_container3','question_container4',16,20,100)">Next</button>
                        </div>
                    </div>
                    <span class="err16">Please select an answer for all question.</span>

                </div>

                <div class="question_container4">
                    <div class="question mb">
                        <div class="question_text b mbo">
                        Physical touch, such as holding hands or gentle touches, makes me feel connected.
                        </div>
                        <div class="question_button" id="question21">
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question21','hidden_q21')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question21','hidden_q21')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question21','hidden_q21')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question21','hidden_q21')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question21','hidden_q21')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question22','hidden_q22')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question22','hidden_q22')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question22','hidden_q22')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question22','hidden_q22')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question22','hidden_q22')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question23','hidden_q23')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question23','hidden_q23')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question23','hidden_q23')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question23','hidden_q23')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question23','hidden_q23')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question24','hidden_q24')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question24','hidden_q24')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question24','hidden_q24')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question24','hidden_q24')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question24','hidden_q24')">5</button>
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
                        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this,'question25','hidden_q25')">1</button>
                        <button type="button" class="qb" value="2" onclick="setActiveAndSubmit(this,'question25','hidden_q25')">2</button>
                        <button type="button" class="qb" value="3" onclick="setActiveAndSubmit(this,'question25','hidden_q25')">3</button>
                        <button type="button" class="qb" value="4" onclick="setActiveAndSubmit(this,'question25','hidden_q25')">4</button>
                        <button type="button" class="qb" value="5" onclick="setActiveAndSubmit(this,'question25','hidden_q25')">5</button>
                        </div>
                        <div class="question_response a mbo fn">
                            <div>STRONGLY DISAGREE</div>
                            <div>STRONGLY AGREE</div>
                        </div>
                    </div>

                    <div class="next_container">
                        <div>
                            <button type="button" class="previous_button" onclick="previous_button('question_container4','question_container3')">Previous</button>
                        </div>
                        <div>
                            <button type="submit" name="data_submit" class="next_button" >Submit</button>
                        </div>
                    </div>
                    <span class="err21">Please select an answer for all question.</span>


                </div>
            </form>
                
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


