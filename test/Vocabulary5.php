<?php
    require("../component/connect.php");
   
?>
<?php
      session_start();
      $name = '';
      $_SESSION["type_data"] ="testvocab";
      $_SESSION["unit"] =5;
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
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="Test" id="test1">
                <h3>Exercises</h3>
                <div class="Test1" >
                    <div class="detail">
                        <h4>Vocabulary flow 5: vocabulary question</h4>
                    </div>
                    <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                    <a href="../unit/tunit5.php"><button class="btn"><h2>Back</h2></button></a>
                </div>
        </div>
        <div class="quiz-container" id="ex" style="display:none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST">
                    <!-- Questions -->
                    <div class="question hidden" id="question-1" >
                        <p>1. The new policy ____ the use of cellphones in the classroom. This means that the students cannot use their phones.</p>
                        <div class="options">
                            <label><input type="radio" name="1" value="A"> A) allows </label><br>
                            <label><input type="radio" name="1" value="B"> B) prohibits </label><br>
                            <label><input type="radio" name="1" value="C"> C) recommends  </label><br>
                            <label><input type="radio" name="1" value="D"> D) encourages</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-2" >
                        <p>2.The employee ____ the company's code of conduct by taking unauthorized breaks.</p>
                        <div class="options">
                            <label><input type="radio" name="2" value="A"> A) followed </label><br>
                            <label><input type="radio" name="2" value="B"> B) suggested  </label><br>
                            <label><input type="radio" name="2" value="C"> C) violated   </label><br>
                            <label><input type="radio" name="2" value="D"> D) complied with</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-3" >
                        <p>3.For speeding, the driver received a heavy ____ that they had to pay.</p>
                        <div class="options">
                            <label><input type="radio" name="3" value="A"> A) reward </label><br>
                            <label><input type="radio" name="3" value="B"> B) promotion  </label><br>
                            <label><input type="radio" name="3" value="C"> C) compliment  </label><br>
                            <label><input type="radio" name="3" value="D"> D) penalty</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-4" >
                        <p>4. After repeated infractions, the driver faced a ____ of their license for 6 months. </p>
                        <div class="options">
                            <label><input type="radio" name="4" value="A"> A) reinstatement  </label><br>
                            <label><input type="radio" name="4" value="B"> B) extension  </label><br>
                            <label><input type="radio" name="4" value="C"> C) suspension </label><br>
                            <label><input type="radio" name="4" value="D"> D) guarantee </label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-5">
                        <p>5.The customer _____ the excellent service they received at the store.</p>
                        <div class="options">
                            <label><input type="radio" name="5" value="A"> A) complained about  </label><br>
                            <label><input type="radio" name="5" value="B"> B) ignored  </label><br>
                            <label><input type="radio" name="5" value="C"> C) highly valued  </label><br>
                            <label><input type="radio" name="5" value="D"> D) demanded a refund for</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-6" >
                        <p>6. The outdated office building underwent a complete ____ to modernize its appearance. </p>
                        <div class="options">
                            <label><input type="radio" name="6" value="A"> A) personal makeover </label><br>
                            <label><input type="radio" name="6" value="B"> B) cosmetic surgery </label><br>
                            <label><input type="radio" name="6" value="C"> C) renovation </label><br>
                            <label><input type="radio" name="6" value="D"> D) leadership change</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-7" >
                        <p>7.The company focuses on ____ issues specific to the Midwest market. </p>
                        <div class="options">
                            <label><input type="radio" name="7" value="A"> A) global  </label><br>
                            <label><input type="radio" name="7" value="B"> B) regional  </label><br>
                            <label><input type="radio" name="7" value="C"> C) local </label><br>
                            <label><input type="radio" name="7" value="D"> D) international</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-8" >
                        <p>8. The ____ industry has seen significant growth in recent years as the number of car sales are increasing. </p>
                        <div class="options">
                            <label><input type="radio" name="8" value="A"> A) automotive  </label><br>
                            <label><input type="radio" name="8" value="B"> B) maritime  </label><br>
                            <label><input type="radio" name="8" value="C"> C) air </label><br>
                            <label><input type="radio" name="8" value="D"> D) rail</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-9" >
                        <p>9. The hotel's ____ featured high ceilings and luxurious finishes.</p>
                        <div class="options">
                            <label><input type="radio" name="9" value="A"> A) interior </label><br>
                            <label><input type="radio" name="9" value="B"> B) underlying structure </label><br>
                            <label><input type="radio" name="9" value="C"> C) outdoor spaces</label><br>
                            <label><input type="radio" name="9" value="D"> D) xternal appearance</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-10" >
                        <p>10. Based on the sales trends, the company ____ strong holiday season revenues.</p>
                        <div class="options">
                            <label><input type="radio" name="10" value="A"> A) questions  </label><br>
                            <label><input type="radio" name="10" value="B"> B) demands   </label><br>
                            <label><input type="radio" name="10" value="C"> C) predicts  </label><br>
                            <label><input type="radio" name="10" value="D"> D) expects</label>
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
