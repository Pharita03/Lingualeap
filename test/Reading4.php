<?php
    require("../component/connect.php");
   
?>
<?php
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testreading";
     $_SESSION["unit"] =4;
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
                    <h4>Reading flow 4: reading question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit4.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container2" id="ex" style="display: none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php"  method="POST" >
                <!-- Questions -->
                <div class="question" id="question-1">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>---1--- We will be adjusting the frequency that point accumulation statements are sent to our members. From January 1, statements will be mailed every six months instead of quarterly. <br>---2--- this change, members may continue to log in at www.eddingtons.com/members to find current details. You can <br>---3--- your accumulated point and see what rewards are available in exchange for them through your online account. Or you can call us during business hours at 555-4955, and we will give you a total. <br>---4---, you can drop by a service counter at any Eddington's Department Store, and one of our staff will inform you of your current total.

    </p>
                    </div>
                    <h4>1.What is the correct sentence?</h4>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) We no longer accept membership applications.</label><br>
                        <label><input type="radio" name="1" value="B"> B) Eddington’s is set to introduce a change to its membership program. </label><br>
                        <label><input type="radio" name="1" value="C"> C)  We apologize for the recent difficulties with our card payment system.</label><br>
                        <label><input type="radio" name="1" value="D"> D) Eddington’s Department Store has a special promotion point cards.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>---1--- We will be adjusting the frequency that point accumulation statements are sent to our members. From January 1, statements will be mailed every six months instead of quarterly. <br>---2--- this change, members may continue to log in at www.eddingtons.com/members to find current details. You can <br>---3--- your accumulated point and see what rewards are available in exchange for them through your online account. Or you can call us during business hours at 555-4955, and we will give you a total. <br>---4---, you can drop by a service counter at any Eddington's Department Store, and one of our staff will inform you of your current total.

    </p>
                    </div>
                    <h4>2. What is the correct word? </h4>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) Apart from</label><br>
                        <label><input type="radio" name="2" value="B"> B) In case of</label><br>
                        <label><input type="radio" name="2" value="C"> C) Regardless of</label><br>
                        <label><input type="radio" name="2" value="D"> D) On behalf of</label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>---1--- We will be adjusting the frequency that point accumulation statements are sent to our members. From January 1, statements will be mailed every six months instead of quarterly. <br>---2--- this change, members may continue to log in at www.eddingtons.com/members to find current details. You can <br>---3--- your accumulated point and see what rewards are available in exchange for them through your online account. Or you can call us during business hours at 555-4955, and we will give you a total. <br>---4---, you can drop by a service counter at any Eddington's Department Store, and one of our staff will inform you of your current total.

    </p>
                    </div>
                    <h4>3. What is the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) submit</label><br>
                        <label><input type="radio" name="3" value="B"> B) monitor</label><br>
                        <label><input type="radio" name="3" value="C"> C) mediate</label><br>
                        <label><input type="radio" name="3" value="D"> D) convey</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">  
                    <h3>Read the following note and answer the questions 1-4</h3>
                    <div class="readtext">
                        <p>---1--- We will be adjusting the frequency that point accumulation statements are sent to our members. From January 1, statements will be mailed every six months instead of quarterly. <br>---2--- this change, members may continue to log in at www.eddingtons.com/members to find current details. You can <br>---3--- your accumulated point and see what rewards are available in exchange for them through your online account. Or you can call us during business hours at 555-4955, and we will give you a total. <br>---4---, you can drop by a service counter at any Eddington's Department Store, and one of our staff will inform you of your current total.

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
                    <h3>Read the following letter and answer questions 5-8                    </h3>
                    <div class="readtext">
                    <p>Dear Ms. Staley,<br>
Best Link Telecom recently upgraded its network and is offering high-speed Internet in your area. We began delivering service <br>---5--- July 17.
Best Link <br>---6--- fast and reliable service for the lowest cost. We promise to match the price of any competitor charging less than us.
As our customer, you may use our online storage services for free. Whether you're downloading videos and photos or sharing your work, you'll be able to get it done in less time than ever. <br>---7--.
And those already using our telephone service can get a discount of 20 percent by upgrading to a high-speed Internet package. The reduced rates will be reflected in your<br> ---8--- for the following month.
Please call 555-1573 during regular business hours to arrange an installation appointment.<br>
Yours truly,<br>
George Hyde Best Link Telecom Sales

    </p>
                    </div>
                    <h4>5. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) to</label><br>
                        <label><input type="radio" name="5" value="B"> B) within</label><br>
                        <label><input type="radio" name="5" value="C"> C) on</label><br>
                        <label><input type="radio" name="5" value="D"> D) off</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <h3>Read the following letter and answer questions 5-8                    </h3>
                    <div class="readtext">
                    <p>Dear Ms. Staley,<br>
Best Link Telecom recently upgraded its network and is offering high-speed Internet in your area. We began delivering service <br>---5--- July 17.
Best Link <br>---6--- fast and reliable service for the lowest cost. We promise to match the price of any competitor charging less than us.
As our customer, you may use our online storage services for free. Whether you're downloading videos and photos or sharing your work, you'll be able to get it done in less time than ever. <br>---7--.
And those already using our telephone service can get a discount of 20 percent by upgrading to a high-speed Internet package. The reduced rates will be reflected in your<br> ---8--- for the following month.
Please call 555-1573 during regular business hours to arrange an installation appointment.<br>
Yours truly,<br>
George Hyde Best Link Telecom Sales

    </p>
                    </div>
                    <h4>6. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) improves</label><br>
                        <label><input type="radio" name="6" value="B"> B) guarantees</label><br>
                        <label><input type="radio" name="6" value="C"> C) receives</label><br>
                        <label><input type="radio" name="6" value="D"> D) demands</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <h3>Read the following letter and answer questions 5-8                    </h3>
                    <div class="readtext">
                    <p>Dear Ms. Staley,<br>
Best Link Telecom recently upgraded its network and is offering high-speed Internet in your area. We began delivering service <br>---5--- July 17.
Best Link <br>---6--- fast and reliable service for the lowest cost. We promise to match the price of any competitor charging less than us.
As our customer, you may use our online storage services for free. Whether you're downloading videos and photos or sharing your work, you'll be able to get it done in less time than ever. <br>---7--.
And those already using our telephone service can get a discount of 20 percent by upgrading to a high-speed Internet package. The reduced rates will be reflected in your<br> ---8--- for the following month.
Please call 555-1573 during regular business hours to arrange an installation appointment.<br>
Yours truly,<br>
George Hyde Best Link Telecom Sales

    </p>
                    </div>
                    <h4>7.  Which sentence suits best?</h4>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) This service is no longer available in your area.</label><br>
                        <label><input type="radio" name="7" value="B"> B) Your bill will vary based on how many files you store.</label><br>
                        <label><input type="radio" name="7" value="C"> C) This will cause the cost of computers to be cut.</label><br>
                        <label><input type="radio" name="7" value="D"> D) Our high-speed Internet service can handle it all.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <h3>Read the following letter and answer questions 5-8                    </h3>
                    <div class="readtext">
                    <p>Dear Ms. Staley,<br>
Best Link Telecom recently upgraded its network and is offering high-speed Internet in your area. We began delivering service <br>---5--- July 17.
Best Link <br>---6--- fast and reliable service for the lowest cost. We promise to match the price of any competitor charging less than us.
As our customer, you may use our online storage services for free. Whether you're downloading videos and photos or sharing your work, you'll be able to get it done in less time than ever. <br>---7--.
And those already using our telephone service can get a discount of 20 percent by upgrading to a high-speed Internet package. The reduced rates will be reflected in your<br> ---8--- for the following month.
Please call 555-1573 during regular business hours to arrange an installation appointment.<br>
Yours truly,<br>
George Hyde Best Link Telecom Sales

    </p>
                    </div>
                    <h4>8. What it the correct word?</h4>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) password</label><br>
                        <label><input type="radio" name="8" value="B"> B) statement</label><br>
                        <label><input type="radio" name="8" value="C"> C) demonstration</label><br>
                        <label><input type="radio" name="8" value="D"> D) reception</label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <h3>Read the following chat and answer questions 9-10</h3>
                    <div class="readtext">
                    <p>SHARON VAN DEIST 9:38 <br>
I saw your advertisement for a minivan in the paper this morning. I've been looking for something that size. Is it still available?<br>
ENRICO LOPEZ 9:40 <br>
It is. Are you interested in seeing it and taking a test drive? I live at 2230 Sawyer Avenue, which is just off of Broad Street.<br>
SHARON VAN DEIST 9:47 <br>
Oh, my apartment is nearby in Madison Heights on Finn Street. Are you in now? I can walk over and meet you at your place in about 15 minutes.<br>
ENRICO LOPEZ 9:51 <br>
I'm actually at the supermarket on Baird Avenue now, but I should be home within 30 minutes.<br>
SHARON VAN DEIST 9:53 <br>
Okay. I'll be there at 10:30, if that works for you.<br>
ENRICO LOPEZ 9:54 <br>
That'll do.<br>

    </p>
                    </div>
                    <h4>9. What most likely does Ms. Van Deist want to do? </h4>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A)  Look at some minivans at a dealership</label><br>
                        <label><input type="radio" name="9" value="B"> B) Try out a vehicle that is for sale</label><br>
                        <label><input type="radio" name="9" value="C"> C) Send a payment for a van purchase</label><br>
                        <label><input type="radio" name="9" value="D"> D)  Pick up some mechanical test results</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                <h3>Read the following chat and answer questions 9-10</h3>
                    <div class="readtext">
                    <p>SHARON VAN DEIST 9:38 <br>
I saw your advertisement for a minivan in the paper this morning. I've been looking for something that size. Is it still available?<br>
ENRICO LOPEZ 9:40 <br>
It is. Are you interested in seeing it and taking a test drive? I live at 2230 Sawyer Avenue, which is just off of Broad Street.<br>
SHARON VAN DEIST 9:47 <br>
Oh, my apartment is nearby in Madison Heights on Finn Street. Are you in now? I can walk over and meet you at your place in about 15 minutes.<br>
ENRICO LOPEZ 9:51 <br>
I'm actually at the supermarket on Baird Avenue now, but I should be home within 30 minutes.<br>
SHARON VAN DEIST 9:53 <br>
Okay. I'll be there at 10:30, if that works for you.<br>
ENRICO LOPEZ 9:54 <br>
That'll do.<br>

    </p>
                    </div>
                    <h4>10. At 9:54, what does Mr.Lopez mean when he writes, “That’ll do”?</h4>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) He’s satisfied with a buyer’s offer.</label><br>
                        <label><input type="radio" name="10" value="B"> B) He has completed all of his errands.</label><br>
                        <label><input type="radio" name="10" value="C"> C) He is available at a specific time.</label><br>
                        <label><input type="radio" name="10" value="D"> D) He is certain that a vehicle works. </label>
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
