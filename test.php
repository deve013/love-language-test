<?php
    $err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST["data_submit"])){


        if(!isset($_POST["q21"]) || !isset($_POST["q21"]) || !isset($_POST["q21"]) || !isset($_POST["q21"]) || !isset($_POST["q21"])){

            
        }

        else{
            $data=$_POST["q1"]+$_POST["q2"]+$_POST["q3"]+$_POST["q4"]+$_POST["q5"]+
            $_POST["q6"]+$_POST["q7"]+$_POST["q8"]+$_POST["q9"]+$_POST["q10"]+
            $_POST["q11"]+$_POST["q12"]+$_POST["q13"]+$_POST["q14"]+$_POST["q15"]+
            $_POST["q16"]+$_POST["q17"]+$_POST["q18"]+$_POST["q19"]+$_POST["q20"]+
            $_POST["q21"]+$_POST["q22"]+$_POST["q23"]+$_POST["q24"]+$_POST["q25"];


            echo $data;

            if($data>=25 && $data<45){
                echo "love1";
            }

            if($data>=45 && $data<65){
                echo "love2";
            }

            if($data>=65 && $data<85){
                echo "love3";
            }

            if($data>=85 && $data<105){
                echo "love4";
            }

            if($data>=105 && $data<125){
                echo "love5";
            }

        }




    }

}
   


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Group with Form</title>
  <style>
    .button-group button {
      padding: 10px;
      margin: 5px;
      cursor: pointer;
    }

    .active {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>

<form id="myForm" onsubmit="submitForm(event)">
  <div class="button-group">
    <button type="button" onclick="setActiveButton(this, 'option1')">Option 1</button>
    <button type="button" onclick="setActiveButton(this, 'option2')">Option 2</button>
    <button type="button" onclick="setActiveButton(this, 'option3')">Option 3</button>
  </div>

  <!-- Hidden input to store the selected button value -->
  <input type="hidden" id="selectedOption" name="selectedOption" value="">

  <!-- Other form elements can be added here -->

  <button type="submit">Submit</button>
</form>

<script>
  let activeButton = null;

  function setActiveButton(button, optionValue) {
    // Remove 'active' class from the previously active button
    if (activeButton) {
      activeButton.classList.remove('active');
    }

    // Set the new active button
    activeButton = button;
    activeButton.classList.add('active');

    // Set the hidden input value to the selected button's value
    document.getElementById('selectedOption').value = optionValue;
  }

  function submitForm(event) {
    // You can perform additional actions before submitting the form if needed

    // Uncomment the following line to submit the form
    // document.getElementById('myForm').submit();

    // For now, let's prevent the actual form submission for demonstration purposes
    event.preventDefault();
    console.log("Form submitted with selected option: " + document.getElementById('selectedOption').value);
  }
</script>

</body>
</html>


<!-- Add hidden input fields for each question -->
<input type="hidden" name="q1" id="hidden_q1" value="">

<div class="question mb">
    <div class="question_text b mbo">
        I feel connected to my partner through a hug or a kiss.
    </div>
    <div class="question_button" id="question1">
        <button type="button" class="qb" value="1" onclick="setActiveAndSubmit(this, 'question1', 'hidden_q1')">1</button>
        <!-- Add other buttons for values 2 to 5 -->
    </div>
    <div class="question_response a mbo fn">
        <div>STRONGLY DISAGREE</div>
        <div>STRONGLY AGREE</div>
    </div>
</div>

<!-- Add the setActiveAndSubmit function in your JavaScript -->
<script>
    function setActiveAndSubmit(button, questionId, hiddenInputId) {
        setActive(button, questionId); // Your existing setActive function
        
        // Set the value of the hidden input field
        document.getElementById(hiddenInputId).value = button.value;
    }
</script>
