<?php
    require("../component/connect.php");
   
?>
<?php
     
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testreading";
     $_SESSION["unit"] =1;
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
                    <h4>Reading flow 1: reading question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit1.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container2" id="ex" style="display: none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST">
                <!-- Questions -->
                <div class="question" id="question-1">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                        <p>CREATE YOUR OWN SPACE<br>
    Do you dream of having a space away from the demands of everyday life—a place where you can create, think, and relax?<br>
    Marvel Space Planners, a group of architects, designers, and makers of built-in furniture, can turn an unused room or an awkward space into a practical room of your own. Our free, full-color brochure presents a sampling of options for individually designed spaces.<br>
    If you would like to create a customized space, why not call us today at 800-555-7552 to request a copy of the brochure or to schedule a free initial consultation with our design team.
    </p>
                    </div>
                    <h4>1.What is being advertised?</h4>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) Rooms for rent</label><br>
                        <label><input type="radio" name="1" value="B"> B) A design service</label><br>
                        <label><input type="radio" name="1" value="C"> C) A job placement service</label><br>
                        <label><input type="radio" name="1" value="D"> D) Vacation packages</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                    <p>CREATE YOUR OWN SPACE<br>
    Do you dream of having a space away from the demands of everyday life—a place where you can create, think, and relax?<br>
    Marvel Space Planners, a group of architects, designers, and makers of built-in furniture, can turn an unused room or an awkward space into a practical room of your own. Our free, full-color brochure presents a sampling of options for individually designed spaces.<br>
    If you would like to create a customized space, why not call us today at 800-555-7552 to request a copy of the brochure or to schedule a free initial consultation with our design team.
    </p>
                    </div>
                    <h4>2. What is offered for free?</h4>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) Exercise equipment</label><br>
                        <label><input type="radio" name="2" value="B"> B) Some paint samples</label><br>
                        <label><input type="radio" name="2" value="C"> C) A consultation</label><br>
                        <label><input type="radio" name="2" value="D"> D) An architectural plan</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                        <p>Theater Digest<br>
    125 LAKE AVE.<br>
    CHICAGO, IL 60616<br>
    Dear Subscriber,<br>
    <br>
    Your subscription to Theater Digest will end in two months. Please don't let that happen.<br>
    Take time to renew your subscription today. By doing so, you will continue to receive every month the very latest in theater reviews, information on actors and directors, and up-to-date reports on new dramas and musicals for the next year.<br>
    I've attached an invoice for your renewal order. You will receive 12 issues for the special low price of $35. Please send your payment in the reply envelope provided. Make any corrections to your name or address right on the back of the invoice. Then, visit our Web site at www.theaterdigest.com to read about contests for readers. You could win tickets to a great show!<br>
    <br>
    Sincerely,
    <br>
    Matthew Chambers<br>
    <br>
    Matthew Chambers<br>
    Customer Service Representative
    </p>
                    </div>
                    <h4>3. What is the purpose of this letter?</h4>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) To advertise a new publication</label><br>
                        <label><input type="radio" name="3" value="B"> B) To encourage subscription renewal</label><br>
                        <label><input type="radio" name="3" value="C"> C) To correct a billing error</label><br>
                        <label><input type="radio" name="3" value="D"> D) To request a donation</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">  
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                    <p>Theater Digest<br>
    125 LAKE AVE.<br>
    CHICAGO, IL 60616<br>
    Dear Subscriber,<br>
    <br>
    Your subscription to Theater Digest will end in two months. Please don't let that happen.<br>
    Take time to renew your subscription today. By doing so, you will continue to receive every month the very latest in theater reviews, information on actors and directors, and up-to-date reports on new dramas and musicals for the next year.<br>
    I've attached an invoice for your renewal order. You will receive 12 issues for the special low price of $35. Please send your payment in the reply envelope provided. Make any corrections to your name or address right on the back of the invoice. Then, visit our Web site at www.theaterdigest.com to read about contests for readers. You could win tickets to a great show!<br>
    <br>
    Sincerely,
    <br>
    Matthew Chambers<br>
    <br>
    Matthew Chambers<br>
    Customer Service Representative
    </p>
                    </div>
                    <h4>4. How often is Theater Digest published?</h4>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) Once a month</label><br>
                        <label><input type="radio" name="4" value="B"> B) Every two months</label><br>
                        <label><input type="radio" name="4" value="C"> C) Twice a year</label><br>
                        <label><input type="radio" name="4" value="D"> D) Once a year</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                    <p>Theater Digest<br>
    125 LAKE AVE.<br>
    CHICAGO, IL 60616<br>
    Dear Subscriber,<br>
    <br>
    Your subscription to Theater Digest will end in two months. Please don't let that happen.<br>
    Take time to renew your subscription today. By doing so, you will continue to receive every month the very latest in theater reviews, information on actors and directors, and up-to-date reports on new dramas and musicals for the next year.<br>
    I've attached an invoice for your renewal order. You will receive 12 issues for the special low price of $35. Please send your payment in the reply envelope provided. Make any corrections to your name or address right on the back of the invoice. Then, visit our Web site at www.theaterdigest.com to read about contests for readers. You could win tickets to a great show!<br>
    <br>
    Sincerely,
    <br>
    Matthew Chambers<br>
    <br>
    Matthew Chambers<br>
    Customer Service Representative
    </p>
                    </div>
                    <h4>5. What is mentioned about the Web site?</h4>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) It provides access to other theater-related Web sites.</label><br>
                        <label><input type="radio" name="5" value="B"> B) It offers additional information on stories printed in Theater Digest.</label><br>
                        <label><input type="radio" name="5" value="C"> C) It contains information about competition.</label><br>
                        <label><input type="radio" name="5" value="D"> D) It can be used for online payments.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <h3>Read the following information and answer questions 6-8</h3>
                    <div class="readtext">
                        <p>The Ridgeway Herald News<br>
    Black and White Display Advertisements<br>
    <table>
        <tr>
            <th>Size</th>
            <th>1 Month</th>
            <th>2 Months</th>	
            <th>3 or More Months</th>
        </tr>
        <tr>
            <td>1/2 page</td>
            <td>$250.00</td>
            <td>$210.00</td>
            <td>$180.00</td>
        </tr>
        <tr>
            <td>Full page</td>
            <td>$450.00</td>
            <td>$400.00</td>
            <td>$350.00</td>
        </tr>
        <tr>
            <td>1/4 page</td>
            <td>$130.00</td>
            <td>$110.00</td>
            <td>$ 95.00</td>
        </tr>
    </table>
    <br>
    • Quoted prices are per month.<br>
    • One photo is included in the price of the advertisement.<br>
    • Advertisements must be received by the first of the month preceeding publication.<br>
    • Payment in full should be submitted with advertisement; payment by credit card or personal check is acceptable.<br>
    For longer-term advertising contracts, please contact Henry Shin at The Ridgeway Herald News, 87 King St., Ridgeway.
    </p>
                    </div>
                    <h4>6. John didn’t know about the meeting because ___________ had told him.</h4>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) someone</label><br>
                        <label><input type="radio" name="6" value="B"> B) anyone</label><br>
                        <label><input type="radio" name="6" value="C"> C) anybody</label><br>
                        <label><input type="radio" name="6" value="D"> D) no one</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <h3>Read the following information and answer questions 6-8</h3>
                    <div class="readtext">
                    <p>The Ridgeway Herald News<br>
                    Black and White Display Advertisements<br>
    <table>
        <tr>
            <th>Size</th>
            <th>1 Month</th>
            <th>2 Months</th>	
            <th>3 or More Months</th>
        </tr>
        <tr>
            <td>1/2 page</td>
            <td>$250.00</td>
            <td>$210.00</td>
            <td>$180.00</td>
        </tr>
        <tr>
            <td>Full page</td>
            <td>$450.00</td>
            <td>$400.00</td>
            <td>$350.00</td>
        </tr>
        <tr>
            <td>1/4 page</td>
            <td>$130.00</td>
            <td>$110.00</td>
            <td>$ 95.00</td>
        </tr>
    </table>
    <br>
    • Quoted prices are per month.<br>
    • One photo is included in the price of the advertisement.<br>
    • Advertisements must be received by the first of the month preceeding publication.<br>
    • Payment in full should be submitted with advertisement; payment by credit card or personal check is acceptable.<br>
    For longer-term advertising contracts, please contact Henry Shin at The Ridgeway Herald News, 87 King St., Ridgeway.
    </p>
                    </div>
                    <h4>7. _______ there any people in charge of monitoring the inventory?</h4>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) Are</label><br>
                        <label><input type="radio" name="7" value="B"> B) Is</label><br>
                        <label><input type="radio" name="7" value="C"> C) Do</label><br>
                        <label><input type="radio" name="7" value="D"> D) Does</label>
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
