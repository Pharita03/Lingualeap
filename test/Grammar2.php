
<?php
    require("../component/connect.php");
   
?>
<?php
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testgrammar";
     $_SESSION["unit"] =2;
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
                        <h4>Grammar flow 2 : grammar question</h4>
                    </div>
                    <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                    <a href="../unit/tunit2.php"><button class="btn"><h2>Back</h2></button></a>
                </div>
        </div>
        <div class="quiz-container" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST">
                <!-- Questions -->
                <div class="question" id="question-1">
                    <p>1.Work Power magazine is a new trade _________ for HR professionals.</p>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) publish</label><br>
                        <label><input type="radio" name="1" value="B"> B) publishing</label><br>
                        <label><input type="radio" name="1" value="C"> C) publisher</label><br>
                        <label><input type="radio" name="1" value="D"> D) publications</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <p>2. Hype Tech’s new database software has ________ search capabilities to provide more relevant results.</p>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) expanded</label><br>
                        <label><input type="radio" name="2" value="B"> B) expansive</label><br>
                        <label><input type="radio" name="2" value="C"> C) expansively</label><br>
                        <label><input type="radio" name="2" value="D"> D) expansion</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <p>3. A new musical production is holding auditions for _______ singers in Mangrove Town next Saturday.</p>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) experience</label><br>
                        <label><input type="radio" name="3" value="B"> B) experienced</label><br>
                        <label><input type="radio" name="3" value="C"> C) experiences</label><br>
                        <label><input type="radio" name="3" value="D"> D) experiencing</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">
                    <p>4. The partnership was formed _______ to help both Tilano Group and Easton Company reach beyond their traditional market.</p>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) specify</label><br>
                        <label><input type="radio" name="4" value="B"> B) specified</label><br>
                        <label><input type="radio" name="4" value="C"> C) specific</label><br>
                        <label><input type="radio" name="4" value="D"> D) specifically</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <p>5.Customers who were surveyed found most of the nine color variations of Mulberry purses ____________.</p>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) attracts</label><br>
                        <label><input type="radio" name="5" value="B"> B) attraction</label><br>
                        <label><input type="radio" name="5" value="C"> C) attractive</label><br>
                        <label><input type="radio" name="5" value="D"> D) attractively</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <p>6. The manufacturer’s Web site cautions that glass with certain coatings may not fuse __________ with other glass.</p>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) complete</label><br>
                        <label><input type="radio" name="6" value="B"> B) completing</label><br>
                        <label><input type="radio" name="6" value="C"> C) completion</label><br>
                        <label><input type="radio" name="6" value="D"> D) completely</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <p>7.The company ___________ expanded its operations overseas.</p>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) slow</label><br>
                        <label><input type="radio" name="7" value="B"> B) slows </label><br>
                        <label><input type="radio" name="7" value="C"> C) rapidly</label><br>
                        <label><input type="radio" name="7" value="D"> D) rapid</label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <p>8. Despite her ___________ research, she overlooked a crucial detail.</p>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) thorough </label><br>
                        <label><input type="radio" name="8" value="B"> B) thoroughly</label><br>
                        <label><input type="radio" name="8" value="C"> C) accuracy </label><br>
                        <label><input type="radio" name="8" value="D"> D) accurately </label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <p>9. The merger will __________ our quarterly earnings.</p>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A) effect</label><br>
                        <label><input type="radio" name="9" value="B"> B) effects</label><br>
                        <label><input type="radio" name="9" value="C"> C) affecting</label><br>
                        <label><input type="radio" name="9" value="D"> D) affect</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                    <p>10. The compliance department __________ new guidelines last week.</p>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) issue</label><br>
                        <label><input type="radio" name="10" value="B"> B) issued </label><br>
                        <label><input type="radio" name="10" value="C"> C) issuing </label><br>
                        <label><input type="radio" name="10" value="D"> D) issues</label>
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
