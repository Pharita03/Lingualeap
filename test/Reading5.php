<?php
    require("../component/connect.php");
   
?>
<?php
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testreading";
     $_SESSION["unit"] =5;
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
                    <h4>Reading flow 5: reading question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit5.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container2" id="ex" style="display: none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST">
                <!-- Questions -->
                <div class="question" id="question-1">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>Parking Notice<br>
Parking along the streets in the Fredericton downtown area is prohibited every second and fourth Tuesday of the month between 8 a.m. and 12 p.m. for cleaning. ___1___ Anyone who violates this rule will be ticketed and charged a $15 penalty for the first three offenses. This must be paid within 30 days of ___2___.
City statutes permit vehicle owners to challenge a ticket's validity within the same 30-day period, and owners may make an appeal if they disagree with the outcome. On ___3___ violations, vehicles will be towed at the owner's expense. Repeated negligence could also ___4___ to the suspension of a driver's license.
Thank you for catching that omission. I've now included the full details as presented in the parking notice image.

    </p>
                    </div>
                    <h4>1.What is the correct sentence?</h4>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) The city had to adjust parking rates every two months. </label><br>
                        <label><input type="radio" name="1" value="B"> B) The city’s sanitation vehicles and crews will be working on roadways during this time.  </label><br>
                        <label><input type="radio" name="1" value="C"> C) This regulation has been implemented to reduce weekend traffic.</label><br>
                        <label><input type="radio" name="1" value="D"> D) There are several ways you can pay the fees for parking. </label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>Parking Notice<br>
Parking along the streets in the Fredericton downtown area is prohibited every second and fourth Tuesday of the month between 8 a.m. and 12 p.m. for cleaning. ___1___ Anyone who violates this rule will be ticketed and charged a $15 penalty for the first three offenses. This must be paid within 30 days of ___2___.
City statutes permit vehicle owners to challenge a ticket's validity within the same 30-day period, and owners may make an appeal if they disagree with the outcome. On ___3___ violations, vehicles will be towed at the owner's expense. Repeated negligence could also ___4___ to the suspension of a driver's license.
Thank you for catching that omission. I've now included the full details as presented in the parking notice image.
    </p>
                    </div>
                    <h4>2. What is the correct word? </h4>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) receipt</label><br>
                        <label><input type="radio" name="2" value="B"> B) receive</label><br>
                        <label><input type="radio" name="2" value="C"> C) receivable </label><br>
                        <label><input type="radio" name="2" value="D"> D) receives</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>Parking Notice<br>
Parking along the streets in the Fredericton downtown area is prohibited every second and fourth Tuesday of the month between 8 a.m. and 12 p.m. for cleaning. ___1___ Anyone who violates this rule will be ticketed and charged a $15 penalty for the first three offenses. This must be paid within 30 days of ___2___.
City statutes permit vehicle owners to challenge a ticket's validity within the same 30-day period, and owners may make an appeal if they disagree with the outcome. On ___3___ violations, vehicles will be towed at the owner's expense. Repeated negligence could also ___4___ to the suspension of a driver's license.
Thank you for catching that omission. I've now included the full details as presented in the parking notice image.

    </p>
                    </div>
                    <h4>3. What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) flexible</label><br>
                        <label><input type="radio" name="3" value="B"> B) technical</label><br>
                        <label><input type="radio" name="3" value="C"> C) exemplary</label><br>
                        <label><input type="radio" name="3" value="D"> D) subsequent</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">  
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>Parking Notice<br>
Parking along the streets in the Fredericton downtown area is prohibited every second and fourth Tuesday of the month between 8 a.m. and 12 p.m. for cleaning. ___1___ Anyone who violates this rule will be ticketed and charged a $15 penalty for the first three offenses. This must be paid within 30 days of ___2___.
City statutes permit vehicle owners to challenge a ticket's validity within the same 30-day period, and owners may make an appeal if they disagree with the outcome. On ___3___ violations, vehicles will be towed at the owner's expense. Repeated negligence could also ___4___ to the suspension of a driver's license.
Thank you for catching that omission. I've now included the full details as presented in the parking notice image.

    </p>
                    </div>
                    <h4>4. What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) lead</label><br>
                        <label><input type="radio" name="4" value="B"> B) leads</label><br>
                        <label><input type="radio" name="4" value="C"> C) led</label><br>
                        <label><input type="radio" name="4" value="D"> D) leading</label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <h3>Read the following email and answer questions 5-8 </h3>
                    <div class="readtext">
                    <p>Dear Ms. Barton,<br>
I am writing in regard to one of the __5__ advertised in your sales flyer last week. The Cambridge XD multi-function printer was listed at a discounted price of only $449. As I have never seen it offered at such a large markdown, I am __6__ to buy one.
However, I noticed the listing says that supplies may be limited. This is not surprising given that it is a very __7__ model. ________8________. I am looking forward to hearing back from you.
Thank you,<br>
Elmer Wilson
    </p>
                    </div>
                    <h4>5. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) positions</label><br>
                        <label><input type="radio" name="5" value="B"> B) stores</label><br>
                        <label><input type="radio" name="5" value="C"> C) products</label><br>
                        <label><input type="radio" name="5" value="D"> D) venues</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <h3>Read the following letter and answer questions 5-8  </h3>
                    <div class="readtext">
                    <p>Dear Ms. Barton,<br>
I am writing in regard to one of the __5__ advertised in your sales flyer last week. The Cambridge XD multi-function printer was listed at a discounted price of only $449. As I have never seen it offered at such a large markdown, I am __6__ to buy one.
However, I noticed the listing says that supplies may be limited. This is not surprising given that it is a very __7__ model. ________8________. I am looking forward to hearing back from you.
Thank you,<br>
Elmer Wilson
    </p>
                    </div>
                    <h4>6. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) acceptable</label><br>
                        <label><input type="radio" name="6" value="B"> B) intense</label><br>
                        <label><input type="radio" name="6" value="C"> C) eager</label><br>
                        <label><input type="radio" name="6" value="D"> D) strong</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <h3>Read the following letter and answer questions 5-8   </h3>
                    <div class="readtext">
                    <p>Dear Ms. Barton,<br>
I am writing in regard to one of the __5__ advertised in your sales flyer last week. The Cambridge XD multi-function printer was listed at a discounted price of only $449. As I have never seen it offered at such a large markdown, I am __6__ to buy one.
However, I noticed the listing says that supplies may be limited. This is not surprising given that it is a very __7__ model. ________8________. I am looking forward to hearing back from you.
Thank you,<br>
Elmer Wilson
    </p>
                    </div>
                    <h4>7.  What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) popularize</label><br>
                        <label><input type="radio" name="7" value="B"> B) popular</label><br>
                        <label><input type="radio" name="7" value="C"> C) popularly</label><br>
                        <label><input type="radio" name="7" value="D"> D) popularity</label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <h3>Read the following letter and answer questions 5-8  </h3>
                    <div class="readtext">
                    <p>Dear Ms. Barton,<br>
I am writing in regard to one of the __5__ advertised in your sales flyer last week. The Cambridge XD multi-function printer was listed at a discounted price of only $449. As I have never seen it offered at such a large markdown, I am __6__ to buy one.
However, I noticed the listing says that supplies may be limited. This is not surprising given that it is a very __7__ model. ________8________. I am looking forward to hearing back from you.
Thank you,<br>
Elmer Wilson
    </p>
                    </div>
                    <h4>8. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) I sincerely appreciate your business as a first-time client.</label><br>
                        <label><input type="radio" name="8" value="B"> B)  Don’t forget to correct any errors before sending the next invoice.</label><br>
                        <label><input type="radio" name="8" value="C"> C) It is fortunate that I was able to buy it last week.</label><br>
                        <label><input type="radio" name="8" value="D"> D) Please let me know if there are any left as soon as possible.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <h3>Read the following chat and answer questions 9-12</h3>
                    <div class="readtext">
                    <p>The Tulsa Airport is getting a major facelift this year, as announced by officials from the Department of Aviation. At a press conference held earlier, spokesperson Oliver Conway shared some details about the project.<br>
"In response to __9__ growth in regional aviation, city authorities and airport management have decided that now is the time to make renovations. In addition to an extra runway and gate facilities, the airport's interior __10__ a significant transformation designed to enhance security and ease passenger flow," he said. The airport was first constructed over four decades ago at a cost of $11 million, but the cost of the current work is expected to exceed $1 billion. ____11____ . 
If all goes according to plan, the new Tulsa Airport will  __12__state-of-the-art equipment and facilities.
    </p>
                    </div>
                    <h4>9. What is the correct word? </h4>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A) continue </label><br>
                        <label><input type="radio" name="9" value="B"> B) continued</label><br>
                        <label><input type="radio" name="9" value="C"> C) continuation</label><br>
                        <label><input type="radio" name="9" value="D"> D) continually</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                <h3>Read the following chat and answer questions 9-12</h3>
                    <div class="readtext">
                    <p>The Tulsa Airport is getting a major facelift this year, as announced by officials from the Department of Aviation. At a press conference held earlier, spokesperson Oliver Conway shared some details about the project.<br>
"In response to __9__ growth in regional aviation, city authorities and airport management have decided that now is the time to make renovations. In addition to an extra runway and gate facilities, the airport's interior __10__ a significant transformation designed to enhance security and ease passenger flow," he said. The airport was first constructed over four decades ago at a cost of $11 million, but the cost of the current work is expected to exceed $1 billion. ____11____ . 
If all goes according to plan, the new Tulsa Airport will  __12__state-of-the-art equipment and facilities.
    </p>
                    </div>
                    <h4>10. What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) to undergo</label><br>
                        <label><input type="radio" name="10" value="B"> B) underwent</label><br>
                        <label><input type="radio" name="10" value="C"> C) has undergone </label><br>
                        <label><input type="radio" name="10" value="D"> D) will undergo</label>
                    </div>
                </div>
                <div class="question hidden" id="question-11">
                <h3>Read the following chat and answer questions 9-12</h3>
                    <div class="readtext">
                    <p>The Tulsa Airport is getting a major facelift this year, as announced by officials from the Department of Aviation. At a press conference held earlier, spokesperson Oliver Conway shared some details about the project.<br>
"In response to __9__ growth in regional aviation, city authorities and airport management have decided that now is the time to make renovations. In addition to an extra runway and gate facilities, the airport's interior __10__ a significant transformation designed to enhance security and ease passenger flow," he said. The airport was first constructed over four decades ago at a cost of $11 million, but the cost of the current work is expected to exceed $1 billion. ____11____ . 
If all goes according to plan, the new Tulsa Airport will  __12__state-of-the-art equipment and facilities.
    </p>
                    </div>
                    <h4>11. What is the right sentence for no. 11?</h4>
                    <div class="options">
                        <label><input type="radio" name="11" value="A"> A) The amount needed has forced officials to cancel their renovation.</label><br>
                        <label><input type="radio" name="11" value="B"> B) This figure is reasonable given the project’s significant size.</label><br>
                        <label><input type="radio" name="11" value="C"> C) This is due to a decrease in the number of transit passengers.</label><br>
                        <label><input type="radio" name="11" value="D"> D) Anticipated tourist arrivals could bring added revenues in top of that. </label>
                    </div>
                </div>
                <div class="question hidden" id="question-12">
                <h3>Read the following chat and answer questions 9-12</h3>
                    <div class="readtext">
                    <p>The Tulsa Airport is getting a major facelift this year, as announced by officials from the Department of Aviation. At a press conference held earlier, spokesperson Oliver Conway shared some details about the project.<br>
"In response to __9__ growth in regional aviation, city authorities and airport management have decided that now is the time to make renovations. In addition to an extra runway and gate facilities, the airport's interior __10__ a significant transformation designed to enhance security and ease passenger flow," he said. The airport was first constructed over four decades ago at a cost of $11 million, but the cost of the current work is expected to exceed $1 billion. ____11____ . 
If all goes according to plan, the new Tulsa Airport will  __12__state-of-the-art equipment and facilities.
    </p>
                    </div>
                    <h4>12. What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="12" value="A"> A) disclose</label><br>
                        <label><input type="radio" name="12" value="B"> B) process</label><br>
                        <label><input type="radio" name="12" value="C"> C) feature</label><br>
                        <label><input type="radio" name="12" value="D"> D) distract </label>
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
