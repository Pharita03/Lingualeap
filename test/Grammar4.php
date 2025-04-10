
<?php
    require("../component/connect.php");
   
?>
<?php
     
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testgrammar";
     $_SESSION["unit"] =4;
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
                        <h4>Grammar flow 4 : grammar question</h4>
                    </div>
                    <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                    <a href="../unit/tunit4.php"><button class="btn"><h2>Back</h2></button></a>
                </div>
        </div>
        <div class="quiz-container" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST">
                <!-- Questions -->
                <div class="question" id="question-1">
                    <p>1.By the time Sarah arrived at the station, the train _______.</p>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) was already left</label><br>
                        <label><input type="radio" name="1" value="B"> B) was already leaving</label><br>
                        <label><input type="radio" name="1" value="C"> C) already left</label><br>
                        <label><input type="radio" name="1" value="D"> D) had already left</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <p>2. While Mark _______ dinner, his wife called to say she would be late. </p>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) cooked </label><br>
                        <label><input type="radio" name="2" value="B"> B) had been cooking </label><br>
                        <label><input type="radio" name="2" value="C"> C) had cooked</label><br>
                        <label><input type="radio" name="2" value="D"> D) was cooking </label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <p>3. The company _______ significant growth before the economic crisis began.</p>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) experienced</label><br>
                        <label><input type="radio" name="3" value="B"> B) was experiencing</label><br>
                        <label><input type="radio" name="3" value="C"> C) had experienced </label><br>
                        <label><input type="radio" name="3" value="D"> D) has experienced</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">
                    <p>4. When the fire alarm went off, everyone _______ the building immediately. </p>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) evacuated </label><br>
                        <label><input type="radio" name="4" value="B"> B) was evacuating</label><br>
                        <label><input type="radio" name="4" value="C"> C) had evacuated </label><br>
                        <label><input type="radio" name="4" value="D"> D) had been evacuating</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <p>5. James _______ on his computer when the power suddenly went out.</p>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) worked</label><br>
                        <label><input type="radio" name="5" value="B"> B) was working 	</label><br>
                        <label><input type="radio" name="5" value="C"> C) had worked </label><br>
                        <label><input type="radio" name="5" value="D"> D) had been working </label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <p>6. The construction workers _______ the project before the deadline last month.</p>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) completed</label><br>
                        <label><input type="radio" name="6" value="B"> B) were completing</label><br>
                        <label><input type="radio" name="6" value="C"> C) had completed </label><br>
                        <label><input type="radio" name="6" value="D"> D) had been completing</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <p>7.While she _______ through her old photos, she found a picture of her grandmother. </p>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) looked</label><br>
                        <label><input type="radio" name="7" value="B"> B) was looking </label><br>
                        <label><input type="radio" name="7" value="C"> C) had looked </label><br>
                        <label><input type="radio" name="7" value="D"> D) had been looking</label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <p>8. Yesterday, I met a colleague who _______ at my company five years ago. </p>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) worked</label><br>
                        <label><input type="radio" name="8" value="B"> B) was working</label><br>
                        <label><input type="radio" name="8" value="C"> C) had worked</label><br>
                        <label><input type="radio" name="8" value="D"> D) had been working</label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <p>9. The restaurant _______ for two hours when the health inspector arrived.</p>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A) closed </label><br>
                        <label><input type="radio" name="9" value="B"> B) was closing</label><br>
                        <label><input type="radio" name="9" value="C"> C) had closed </label><br>
                        <label><input type="radio" name="9" value="D"> D) had been closed</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                    <p>10. Before the meeting started, the team _______ all the necessary documents.</p>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) prepared</label><br>
                        <label><input type="radio" name="10" value="B"> B) was preparing</label><br>
                        <label><input type="radio" name="10" value="C"> C) had prepared</label><br>
                        <label><input type="radio" name="10" value="D"> D) had been preparing</label>
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
