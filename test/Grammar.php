
<?php
    require("../component/connect.php");
   
?>
<?php
    session_start();
     $name = '';
     $_SESSION["type_data"] ="testgrammar";
     $_SESSION["unit"] =1;
     $_SESSION["type"] ="grammar";
    
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
                <div class="Test1" >
                    <div class="detail">
                        <h4>Grammar flow 1 : grammar question</h4>
                    </div>
                    <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                    <a href="../unit/tunit1.php"><button class="btn"><h2>Back</h2></button></a>
                </div>
        </div>
        <div class="quiz-container" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" name="formt" action="../test/score.php" method="POST">
                <!-- Questions -->
                <div class="question" id="question-1">
                    <p>1.Emily introduced _____________ before starting the interview for the management job.</p>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) her</label><br>
                        <label><input type="radio" name="1" value="B"> B) she</label><br>
                        <label><input type="radio" name="1" value="C"> C) herself</label><br>
                        <label><input type="radio" name="1" value="D"> D) hers</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <p>2. The purpose of the _________ is to catch up the production progress.</p>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) meeting</label><br>
                        <label><input type="radio" name="2" value="B"> B) meet</label><br>
                        <label><input type="radio" name="2" value="C"> C) meets</label><br>
                        <label><input type="radio" name="2" value="D"> D) to meet</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <p>3. _____ who still wish to submit applications after the deadline need to pay a $45 fee in order to be considered.</p>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) Anyone</label><br>
                        <label><input type="radio" name="3" value="B"> B) Those</label><br>
                        <label><input type="radio" name="3" value="C"> C) They</label><br>
                        <label><input type="radio" name="3" value="D"> D) Someone</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">
                    <p>4. Mr.Chen was surprised by the promotion, because _________ hadn’t imagined that it could happen this year.</p>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) his</label><br>
                        <label><input type="radio" name="4" value="B"> B) him</label><br>
                        <label><input type="radio" name="4" value="C"> C) himself</label><br>
                        <label><input type="radio" name="4" value="D"> D) he</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <p>5. The company is facing a problem in marketing and ____________.</p>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) distribute</label><br>
                        <label><input type="radio" name="5" value="B"> B) distributes</label><br>
                        <label><input type="radio" name="5" value="C"> C) distribution</label><br>
                        <label><input type="radio" name="5" value="D"> D) distributed</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <p>6. John didn’t know about the meeting because ___________ had told him.</p>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) someone</label><br>
                        <label><input type="radio" name="6" value="B"> B) anyone</label><br>
                        <label><input type="radio" name="6" value="C"> C) anybody</label><br>
                        <label><input type="radio" name="6" value="D"> D) no one</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <p>7. _______ there any people in charge of monitoring the inventory?</p>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) Are</label><br>
                        <label><input type="radio" name="7" value="B"> B) Is</label><br>
                        <label><input type="radio" name="7" value="C"> C) Do</label><br>
                        <label><input type="radio" name="7" value="D"> D) Does</label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <p>8. A banquet was held to honor five employees, who _________ worked for the company for more than 20 years.</p>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) has</label><br>
                        <label><input type="radio" name="8" value="B"> B) have</label><br>
                        <label><input type="radio" name="8" value="C"> C) do</label><br>
                        <label><input type="radio" name="8" value="D"> D) does</label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <p>9. Mr.Chang asked other board members to think about __________ they’d like to nominate as the next chairperson.</p>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A) who</label><br>
                        <label><input type="radio" name="9" value="B"> B) which</label><br>
                        <label><input type="radio" name="9" value="C"> C) whom</label><br>
                        <label><input type="radio" name="9" value="D"> D) whose</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                    <p>10. We won’t have ________ time for the discussion, so I think we’d better hurry.</p>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) much</label><br>
                        <label><input type="radio" name="10" value="B"> B) many</label><br>
                        <label><input type="radio" name="10" value="C"> C) amount</label><br>
                        <label><input type="radio" name="10" value="D"> D) little</label>
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
