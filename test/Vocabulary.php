
<?php
    require("../component/connect.php");
   
?>
<?php
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testvocab";
     $_SESSION["unit"] =1;
     $_SESSION["type"] ="vocab";
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

    <main>
        <div class="Test" id="test1">
                <h3>Exercises</h3>
                <div class="Test1" >
                    <div class="detail">
                        <h4>Vocabulary flow 1: vocabulary question</h4>
                    </div>
                    <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                    <a href="../unit/tunit1.php"><button class="btn"><h2>Back</h2></button></a>
                </div>
        </div>

        
       
        <div class="quiz-container" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST" >
                    <!-- Questions -->
                    <div class="question hidden" id="question-1" name = "1">
                        <p>1.The manager ________ her team to focus on the new project.</p>
                        <div class="options">
                            <label><input type="radio" name = "1" value="A"> A) directed</label><br>
                            <label><input type="radio" name="1" value="B"> B) obeyed</label><br>
                            <label><input type="radio" name="1" value="C"> C) revised</label><br>
                            <label><input type="radio" name="1" value="D"> D) subscribed</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-2" >
                        <p>2. After months of hard work, the company's new product launch was ________.</p>
                        <div class="options">
                            <label><input type="radio" name = "2" value="A"> A) purposed</label><br>
                            <label><input type="radio" name = "2" value="B"> B) informed</label><br>
                            <label><input type="radio" name = "2" value="C"> C) successful</label><br>
                            <label><input type="radio" name = "2" value="D"> D) determined</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-3" >
                        <p>3.The committee will ________ the best candidate for the position based on their qualifications.</p>
                        <div class="options">
                            <label><input type="radio" name = "3" value="A"> A) serve</label><br>
                            <label><input type="radio" name = "3" value="B"> B) revise</label><br>
                            <label><input type="radio" name = "3" value="C"> C) direct</label><br>
                            <label><input type="radio" name = "3" value="D"> D) determine</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-4" >
                        <p>4. The author had to ________ his manuscript several times before it was ready for publication.</p>
                        <div class="options">
                            <label><input type="radio" name = "4" value="A"> A) obey</label><br>
                            <label><input type="radio" name = "4" value="B"> B) revise</label><br>
                            <label><input type="radio" name="4" value="C"> C) subscribe</label><br>
                            <label><input type="radio" name="4" value="D"> D) inform</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-5" >
                        <p>5. She renewed her ________ to the magazine for another year.</p>
                        <div class="options">
                            <label><input type="radio" name="5" value="A"> A) publication</label><br>
                            <label><input type="radio" name="5" value="B"> B) information</label><br>
                            <label><input type="radio" name="5" value="C"> C) subscription</label><br>
                            <label><input type="radio" name="5" value="D"> D) direction</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-6" >
                        <p>6. The main ________ of the meeting was to discuss the company's future goals.</p>
                        <div class="options">
                            <label><input type="radio" name="6" value="A"> A) revision</label><br>
                            <label><input type="radio" name="6" value="B"> B) purpose</label><br>
                            <label><input type="radio" name="6" value="C"> C) service</label><br>
                            <label><input type="radio" name="6" value="D"> D) obedience</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-7" >
                        <p>7.The ________ of the research findings in a respected journal brought attention to their work.</p>
                        <div class="options">
                            <label><input type="radio" name="7" value="A"> A) subscription</label><br>
                            <label><input type="radio" name="7" value="B"> B) determination</label><br>
                            <label><input type="radio" name="7" value="C"> C) publication</label><br>
                            <label><input type="radio" name="7" value="D"> D) direction</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-8" >
                        <p>8. Volunteers ________ meals to elderly residents in the community every week.</p>
                        <div class="options">
                            <label><input type="radio" name="8" value="A"> A) revise</label><br>
                            <label><input type="radio" name="8" value="B"> B) determine</label><br>
                            <label><input type="radio" name="8" value="C"> C) serve</label><br>
                            <label><input type="radio" name="8" value="D"> D) direct</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-9" >
                        <p>9. The detective gathered all available ________ before drawing any conclusions about the case.</p>
                        <div class="options">
                            <label><input type="radio" name="9" value="A"> A) purpose</label><br>
                            <label><input type="radio" name="9" value="B"> B) subscription</label><br>
                            <label><input type="radio" name="9" value="C"> C) information</label><br>
                            <label><input type="radio" name="9" value="D"> D) revision</label>
                        </div>
                    </div>
                    <div class="question hidden"  id="question-10" >
                        <p>10. Citizens are expected to ________ traffic laws to ensure road safety.</p>
                        <div class="options">
                            <label><input type="radio" name="10" value="A"> A) subscribe</label><br>
                            <label><input type="radio" name="10" value="B"> B) revise</label><br>
                            <label><input type="radio" name="10" value="C"> C) obey</label><br>
                            <label><input type="radio" name="10" value="D"> D) determine</label>
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
