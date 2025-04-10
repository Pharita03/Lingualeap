<?php
    require("../component/connect.php");
   
?>
<?php
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testlisten";
     $_SESSION["unit"] =3;
     $_SESSION["type"] ="listening";
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
                    <h4>Listening flow 3: listening question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit3.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container1" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form  id="quiz-form" action="../test/score.php" method="POST">
                    <div class="question hidden" id="question-1">
                        <div class="img">
                            <div class="box">
                                <p>1. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 1.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="1" value="A"> A </label><br>
                                <label><input type="radio" name="1" value="B"> B </label><br>
                                <label><input type="radio" name="1" value="C"> C </label><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="question hidden" id="question-2">
                        <div class="img">
                            <div class="box">
                                <p>2. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 2 Recording 2.m4a" type="audio/mpeg"></audio>
                            </div>
                                <div class="options">
                                <label><input type="radio" name="2" value="A"> A </label><br>
                                <label><input type="radio" name="2" value="B"> B </label><br>
                                <label><input type="radio" name="2" value="C"> C </label><br>
                              
                            </div>
                        </div>
                    </div>
                    <div class="question hidden" id="question-3">
                        <div class="img">
                            <div class="box">
                                <p>3. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 3.m4a" type="audio/mpeg"></audio>
                            </div>
                                <div class="options">
                                <label><input type="radio" name="3" value="A"> A </label><br>
                                <label><input type="radio" name="3" value="B"> B </label><br>
                                <label><input type="radio" name="3" value="C"> C </label><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="question hidden" id="question-4">
                        <div class="img">
                            <div class="box">
                                <p>4. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 4.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="4" value="A"> A </label><br>
                                <label><input type="radio" name="4" value="B"> B </label><br>
                                <label><input type="radio" name="4" value="C"> C </label><br>
                               
                            </div>
                        </div>
                    </div>
                    <div class="question hidden" id="question-5">
                        <div class="img">
                            <div class="box">
                                <p>5. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 5.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="5" value="A"> A </label><br>
                                <label><input type="radio" name="5" value="B"> B </label><br>
                                <label><input type="radio" name="5" value="C"> C </label><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="question hidden" id="question-6">
                        <div class="img">
                            <div class="box">
                                <p>6. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 6.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="6" value="A"> A </label><br>
                                <label><input type="radio" name="6" value="B"> B </label><br>
                                <label><input type="radio" name="6" value="C"> C </label><br>
                                
                            </div>
                        </div>        
                    </div>
                    <div class="question hidden" id="question-7">
                        <div class="img">
                            <div class="box">
                                <p>7. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 7.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="7" value="A"> A </label><br>
                                <label><input type="radio" name="7" value="B"> B </label><br>
                                <label><input type="radio" name="7" value="C"> C </label><br>
                                
                            </div>
                        </div>        
                    </div>
                    <div class="question hidden" id="question-8">
                        <div class="img">
                            <div class="box">
                                <p>8. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 8.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="8" value="A"> A </label><br>
                                <label><input type="radio" name="8" value="B"> B </label><br>
                                <label><input type="radio" name="8" value="C"> C </label><br>
                                
                            </div>
                        </div>        
                    </div>
                    <div class="question hidden" id="question-9">
                        <div class="img">
                            <div class="box">
                                <p>9. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 9.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="9" value="A"> A </label><br>
                                <label><input type="radio" name="9" value="B"> B </label><br>
                                <label><input type="radio" name="9" value="C"> C </label><br>
                            </div>
                        </div>        
                    </div>
                    <div class="question hidden" id="question-10">
                        <div class="img">
                            <div class="box">
                                <p>10. Listen to the question and choices. Mark your answer. </p>
                                <audio controls class="audio"><source src="../unit/unit3/listening/Unit 3 Recording 10.m4a" type="audio/mpeg"></audio>
                            </div>
                            <div class="options">
                                <label><input type="radio" name="10" value="A"> A </label><br>
                                <label><input type="radio" name="10" value="B"> B </label><br>
                                <label><input type="radio" name="10" value="C"> C </label><br>
                            </div>
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
