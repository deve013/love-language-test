<?php
    session_start();

    $data=$_SESSION["data"];

    if($data>=25 && $data<45){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            getlovelanguage(1);
        });
        
      </script>";
    }

    if($data>=45 && $data<65){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            getlovelanguage(2);
        });
        
      </script>";
    }

    if($data>=65 && $data<85){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            getlovelanguage(3);
        });
        
      </script>";
    }

    if($data>=85 && $data<105){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            getlovelanguage(4);
        });
        
      </script>";
    }

    if($data>=105 && $data<=125){
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            getlovelanguage(5);
        });
        
      </script>";
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
    <script>
        function getlovelanguage(a){
            if(a===1){
                document.querySelector('.love_language_card').style.display = 'block';
            }
            else if(a===2){
                document.querySelector('.love_language_card1').style.display = 'block';
            }
            else if(a===3){
                document.querySelector('.love_language_card2').style.display = 'block';
            }
            else if(a===4){
                document.querySelector('.love_language_card3').style.display = 'block';
            }
            else if(a===5){
                document.querySelector('.love_language_card4').style.display = 'block';
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
                <a href="5lovelanguage.php">5 Love Languages</a>
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
            <div class="card_main_top">
                <h2 class="b mb fs">Your Love Language is:</h2>
                <div class="love_language_card">
                    <div class="love_language_image">
                        <img class="card_image" src="images/quality-time.jpeg">
                    </div>
                    <div class="love_language_content">
                        <h2 class="b mb fs resimg">Quality Time</h2>
                        <p class="">Your primary love language is Quality Time. This means...</p>
                        <ul class="result_list">
                            <li>
                            Engaging in deep conversations and sharing thoughts and feelings
                            </li>
                            <li>
                            Creating memorable experiences and enjoying special moments together
                            </li>
                            <li>
                            Feeling fully present and connected during quality time activities
                            </li>
                        </ul>
                        <div class="readmore">
                        <a href="quality-time.html"><button class="readmore_button">Read More</button></a>
                    </div>
                    </div>
                </div>
                <div class="love_language_card1">
                    <div class="love_language_image">
                        <img class="card_image" src="images/receiving-gifts.jpeg">
                    </div>
                    <div class="love_language_content">
                        <h2 class="b mb fs resimg">Receiving Gifts</h2>
                        <p class="">Your primary love language is Receiving Gifts. This means...</p>
                        <ul class="result_list">
                            <li>
                            Engaging in deep conversations and sharing thoughts and feelings
                            </li>
                            <li>
                            Creating memorable experiences and enjoying special moments together
                            </li>
                            <li>
                            Feeling fully present and connected during quality time activities
                            </li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="receiving-gifts.html"><button class="readmore_button">Read More</button></a>
                    </div>
                    <div class="readmore">
                        <a href="home.php"><button class="readmore_button">Take Test Again</button></a>
                    </div>
                </div>
                <div class="love_language_card2">
                    <div class="love_language_image">
                        <img class="card_image" src="images/physical-touch.jpeg">
                    </div>
                    <div class="love_language_content">
                        <h2 class="b mb fs resimg">Physical Touch</h2>
                        <p class="">Your primary love language is Physical Touch. This means...</p>
                        <ul class="result_list">
                            <li>
                            Engaging in deep conversations and sharing thoughts and feelings
                            </li>
                            <li>
                            Creating memorable experiences and enjoying special moments together
                            </li>
                            <li>
                            Feeling fully present and connected during quality time activities
                            </li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="physical-touch.html"><button class="readmore_button">Read More</button></a>
                    </div>
                </div>
                <div class="love_language_card3">
                    <div class="love_language_image">
                        <img class="card_image" src="images/words-of-affirmation.jpeg">
                    </div>
                    <div class="love_language_content">
                        <h2 class="b mb fs resimg">Words of Affirmation</h2>
                        <p class="">Your primary love language is Words of Affirmation. This means...</p>
                        <ul class="result_list">
                            <li>
                            Engaging in deep conversations and sharing thoughts and feelings
                            </li>
                            <li>
                            Creating memorable experiences and enjoying special moments together
                            </li>
                            <li>
                            Feeling fully present and connected during quality time activities
                            </li>
                        </ul>
                    </div>
                    <div class="readmore">
                       <a href="words-of-affirmation.html"> <button class="readmore_button">Read More</button></a>
                    </div>
                </div>
                <div class="love_language_card4">
                    <div class="love_language_image">
                        <img class="card_image" src="images/act_of_service.jpeg">
                    </div>
                    <div class="love_language_content">
                        <h2 class="b mb fs resimg">Act of Service</h2>
                        <p class="">Your primary love language is Act of Service. This means...</p>
                        <ul class="result_list">
                            <li>
                            Engaging in deep conversations and sharing thoughts and feelings
                            </li>
                            <li>
                            Creating memorable experiences and enjoying special moments together
                            </li>
                            <li>
                            Feeling fully present and connected during quality time activities
                            </li>
                        </ul>
                    </div>
                    <div class="readmore">
                        <a href="act-of-service.html"><button class="readmore_button">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="main_card_c">
                <h2 class="test">Love Language Compatibility Test:</h2>
                <div class="main_col1 mb">
                    <label class="head_label">Select Love Language 1:</label>
                    <select class="main_select">
                        <option>Words of Affirmation</option>
                        <option>Acts of Service</option>
                        <option>Receiving Gifts</option>
                        <option>Quality Time</option>
                        <option>Physical Touch</option>
                    </select>
                </div>
                <div class="main_col2 mb">
                <label class="head_label">Select Love Language 2:</label>
                <select class="main_select">
                        <option>Words of Affirmation</option>
                        <option>Acts of Service</option>
                        <option>Receiving Gifts</option>
                        <option>Quality Time</option>
                        <option>Physical Touch</option>
                    </select>
                </div>
                <div class="main_col3 mb">
                    <button class="reset">Reset</button>
                    <button class="calculate">Calculate Compatibility</button>
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



<?php
    session_start();

    $data=$_SESSION["data"];

    if($data>=25 && $data<45){
        echo "<script>
        getlovelanguage(1);
      </script>";
    }

    if($data>=45 && $data<65){
        echo "<script>
        getlovelanguage(2);
      </script>";
    }

    if($data>=65 && $data<85){
        echo "<script>
        getlovelanguage(3);
      </script>";
    }

    if($data>=85 && $data<105){
        echo "<script>
        getlovelanguage(4);
      </script>";
    }

    if($data>=105 && $data<=125){
        echo "<script>
        getlovelanguage(5);
      </script>";
    }

?>