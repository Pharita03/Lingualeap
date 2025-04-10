<?php
    require("../component/connect.php");
   
?>
<?php
     
     
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testreading";
     $_SESSION["unit"] =2;
     $_SESSION["type"] ="reading";
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="image/png" href="../image/logo.jpg">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CDN link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    </style>
</head>
<body class="exam">
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="Test" id="test1">
            <h3>Exercises</h3>
            <div class="Test1">
                <div class="detail">
                    <h4>Reading flow 2: reading question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit2.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container2" id="ex" style="display: none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST" >
                <!-- Questions -->
                <div class="question" id="question-1">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                        <p>Kippler - Starr Bank <br>
660 Century Avenue Billings,<br>
MT 59102<br>

March 27<br>
Cecilia Feridino<br>
90 Young Steet<br>
Billing,MT 59107<br>

Re: Account #850981-591<br>

Dear Ms. Feridio,<br>

Dear Ms. Feridio,<br>
Thank you for your letter infforming us about your new contact 
information. We have updated the informationon your 
account, and all subsequent statements and correspondence 
will be sent to your current address.<br>

Please note that we received your letter just today, and your
most recent statement had already been mailed to your
previous address. However, you may view your account details
(including account balance, recent charges, and payments
received) at any time by accessing your account online.<br>

Thank you for being a valued customer.<br>

Sincerely,<br>
Carl Delgado<br>
Customer Service Associate<br>
    </p>
                    </div>
                    <h4>1.What is the letter about?</h4>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) An overdue payment</label><br>
                        <label><input type="radio" name="1" value="B"> B) A newly opened account</label><br>
                        <label><input type="radio" name="1" value="C"> C) A change-of-address request</label><br>
                        <label><input type="radio" name="1" value="D"> D) An incorrect account balance</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                    <p> <p>Kippler - Starr Bank <br>
660 Century Avenue Billings,<br>
MT 59102<br>

March 27<br>
Cecilia Feridino<br>
90 Young Steet<br>
Billing,MT 59107<br>

Re: Account #850981-591<br>

Dear Ms. Feridio,<br>

Dear Ms. Feridio,<br>
Thank you for your letter infforming us about your new contact 
information. We have updated the informationon your 
account, and all subsequent statements and correspondence 
will be sent to your current address.<br>

Please note that we received your letter just today, and your
most recent statement had already been mailed to your
previous address. However, you may view your account details
(including account balance, recent charges, and payments
received) at any time by accessing your account online.<br>

Thank you for being a valued customer.<br>

Sincerely,<br>
Carl Delgado<br>
Customer Service Associate<br> </p>
                    </div>
                    <h4>2. What does Mr.Delgado suggest that Ms.Feridino do?</h4>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) Visit a website</label><br>
                        <label><input type="radio" name="2" value="B"> B) Call customer service </label><br>
                        <label><input type="radio" name="2" value="C"> C) Send a payment</label><br>
                        <label><input type="radio" name="2" value="D"> D) Fill out a form</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <h3>Read the following letter and answer questions 3-4</h3>
                    <div class="readtext">
                        <p>www.mattress mavens.com<br>
Mattress Mavens<br>
A Leader in Quality<br>

Complete the information below to contact our customer <br>
service department. We will reply to your inquiry within 24<br>
hours, seven days a week.<br>
<br>
First Name: Rishi<br>
Surname: Khan<br>
E-mail : rishikhan@lrcmail.net<br>
Subject: Snooze Comfort–Style4508<br>
<br>
Message:<br>
<br>
I am interested in purchasing a king-size mattress, style number 4508. Your Web site mentions that shipping charges are calculated based on the delivery destination. Could I pick up the mattress myself in order to avoid this fee? I live about one hour away from your warehouse, and I own a truck that can easily accommodate a large mattress. Thank you.

    </p>
                    </div>
                    <h4>3. Why did Mr.Khan complete the form?</h4>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) To ask about a delivery policy</label><br>
                        <label><input type="radio" name="3" value="B"> B) To complain about a mattress he purchased   </label><br>
                        <label><input type="radio" name="3" value="C"> C) To request a discounted price for a mattress</label><br>
                        <label><input type="radio" name="3" value="D"> D)To find out the location of a factory </label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">  
                    <h3>Read the following letter and answer questions 3-4</h3>
                    <div class="readtext">
                    <p>www.mattress mavens.com<br>
Mattress Mavens<br>
A Leader in Quality<br>

Complete the information below to contact our customer <br>
service department. We will reply to your inquiry within 24<br>
hours, seven days a week.<br>
<br>
First Name: Rishi<br>
Surname: Khan<br>
E-mail : rishikhan@lrcmail.net<br>
Subject: Snooze Comfort–Style4508<br>
<br>
Message:<br>
<br>
I am interested in purchasing a king-size mattress, style number 4508. Your Web site mentions that shipping charges are calculated based on the delivery destination. Could I pick up the mattress myself in order to avoid this fee? I live about one hour away from your warehouse, and I own a truck that can easily accommodate a large mattress. Thank you.
    </p>
                    </div>
                    <h4>4. What does Mattress Mavens promise to do?</h4>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) Reduce the shipping fee for scanning mattresses</label><br>
                        <label><input type="radio" name="4" value="B"> B) Respond to messages within one day</label><br>
                        <label><input type="radio" name="4" value="C"> C) Refer a truck-rental agency</label><br>
                        <label><input type="radio" name="4" value="D"> D)Repair any mattress that is damaged in transit.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <h3>Read the following letter and answer questions 5-6</h3>
                    <div class="readtext">
                    <p>Deadline for Classified Advertisements<br>
The deadline for placing classified advertisements in the Skillington Weekly is Tuesday morning at 11:00, for publication on Wednesday. <br>
After initial text is received, changes will not be accepted. We reserve the right to edit any text.<br>
All ads are prepaid. Ads scheduled to run for more than one week may be canceled after the first week for future advertising credit only. <br>
Email the text of your ad to ads@skillingtonweekly.com. Discounts are available for multiple ads.
    </p>
                    </div>
                    <h4>5. What will happen if an advertiser submit an ad on Wednesday morning?</h4>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) The ad will appear the following Wednesday.</label><br>
                        <label><input type="radio" name="5" value="B"> B) The ad will be published later that day.</label><br>
                        <label><input type="radio" name="5" value="C"> C) The ad will appear only in the online edition.</label><br>
                        <label><input type="radio" name="5" value="D"> D)  The ad will cost the advertiser more money.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <h3>Read the following information and answer questions 5-6</h3>
                    <div class="readtext">
                        <p>Deadline for Classified Advertisements<br>
The deadline for placing classified advertisements in the Skillington Weekly is Tuesday morning at 11:00, for publication on Wednesday. <br>
After initial text is received, changes will not be accepted. We reserve the right to edit any text.<br>
All ads are prepaid. Ads scheduled to run for more than one week may be canceled after the first week for future advertising credit only. <br>
Email the text of your ad to ads@skillingtonweekly.com. Discounts are available for multiple ads.
    </p>
                    </div>
                    <h4>6. According to the notice, when do advertisers receive credit? </h4>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) When they place a full-page ad</label><br>
                        <label><input type="radio" name="6" value="B"> B) When they cancel an ad</label><br>
                        <label><input type="radio" name="6" value="C"> C) When the newspaper edits an ad</label><br>
                        <label><input type="radio" name="6" value="D"> D) When the newspaper misprints an ad</label>
                    </div>
                </div>
              
               <!-- log in -->
               <div  class="question hidden" style="background-color: #dfdfdf;" name = "login">
                        <p><label>Name<input type="text" name="name"></label></p><br>
                        <p><label>Surname</label><input type="text" name="surname"></p><br>
                        <p><label>Email</label><input type="email" name="email"></p><br>
                        <p><label>Tel.</label><input type="tel" name="tel"></p><br>
                        <p><label>Faculty</label><input type="text" name="faculty"></p><br>
                        <p><label>Branch</label><input type="text" name="branch"></p>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="time">
                        <input type="hidden" id="time" name="elapsedTime">
                    </div>
                    <div class="nav-buttons">
                        <button type="button" id="prev-btn" class="">Back</button>
                        <button type="button" id="next-btn" class="">Next</button>
                        <button type="submit" id="submit-btn" class="" name="submit">Submit</button>
                    </div>
            </form>
            
        </div>
       
        
    </main>
<script>
    function letstart() {
    document.getElementById("test1").style.display = "none";
    document.getElementById("ex").style.display = "flex";
    document.getElementById("quiz-form").style.display = "grid";

    const questions = document.querySelectorAll(".question");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    const submitBtn = document.getElementById("submit-btn");
    const timerDisplay = document.getElementById("timer");
    const form = document.getElementById("quiz-form");

    let currentQuestion = 0;
    let timeLeft = 10 * 60; // 10 minutes in seconds
    
    // Timer
    const timer = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(timer);
            alert("Time's up! Submitting the quiz.");
            form.submit();
        } else {
            timeLeft--;
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerDisplay.textContent = `Time left: ${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
            document.getElementById("time").value= timeLeft;
        }
    }, 1000);

    // Show the current question
    function showQuestion(index) {
        questions.forEach((question, i) => {
            question.classList.toggle("hidden", i !== index);
        });
        prevBtn.style.display = index === 0 ? "none" : "inline-block";
        nextBtn.style.display = index === questions.length - 1 ? "none" : "inline-block";
        submitBtn.style.display = index === questions.length - 1 ? "inline-block" : "none";
    }

    // Navigation
    prevBtn.addEventListener("click", () => {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            showQuestion(currentQuestion);
        }
    });
    
    // Form submission
    

    // Initialize the quiz
    
    showQuestion(currentQuestion);
}




</script>
</body>
</html>
