<?php
    require("../component/connect.php");
   
?>
<?php
     
    
     session_start();
     $name = '';
     $_SESSION["type_data"] ="testreading";
     $_SESSION["unit"] =3;
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
                    <h4>Reading flow 3: reading question</h4>
                </div>
                <button class="btn" id="start" onclick="letstart()"><h2>Get start</h2></button>
                <a href="../unit/tunit3.php"><button class="btn"><h2>Back</h2></button></a>
            </div>
        </div>
        <div class="quiz-container2" id="ex" style="display: none;">
            <div class="timer" id="timer">Time left: 10:00</div>
            <form id="quiz-form" action="../test/score.php" method="POST" >
                <!-- Questions -->
                <div class="question" id="question-1">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                        <p>Read the following online chat discussion and answer the questions 1-2<br>
CASSIA CUNHA [10:22 A.M.] Hi Thomas. Tomorrow our partners from Germany will be arriving, and I would like it if someone could greet them in German. Would you take care of that?<br>
THOMAS DOLEZYCH [10:24 A.M.] Certainly, but they all spoke English to me when I went there last spring.<br>
CASSIA CUNHA [10:25 A.M.] Yes, they do speak English, but it would be a nice gesture to welcome them in their own language.<br>
THOMAS DOLEZYCH [10:26 A.M.] No question about it. Just let me know if there is anything specific you'd like me to communicate to them.<br>
CASSIA CUNHA [10:27 A.M.] Will do. Check your e-mail in an hour or so.
</p>
                    </div>
                    <h4>1.What is indicated about Mr.Dolezych?</h4>
                    <div class="options">
                        <label><input type="radio" name="1" value="A"> A) He’s Ms.Cunha’s supervisor. </label><br>
                        <label><input type="radio" name="1" value="B"> B) He’s an experienced translator.</label><br>
                        <label><input type="radio" name="1" value="C"> C) He regularly travels to other countries.</label><br>
                        <label><input type="radio" name="1" value="D"> D) He’s already met the visiting partners.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-2">
                    <h3>Read the following advertisement and answer the questions 1-2</h3>
                    <div class="readtext">
                        <p>Read the following online chat discussion and answer the questions 1-2<br>
CASSIA CUNHA [10:22 A.M.] Hi Thomas. Tomorrow our partners from Germany will be arriving, and I would like it if someone could greet them in German. Would you take care of that?<br>
THOMAS DOLEZYCH [10:24 A.M.] Certainly, but they all spoke English to me when I went there last spring.<br>
CASSIA CUNHA [10:25 A.M.] Yes, they do speak English, but it would be a nice gesture to welcome them in their own language.<br>
THOMAS DOLEZYCH [10:26 A.M.] No question about it. Just let me know if there is anything specific you'd like me to communicate to them.<br>
CASSIA CUNHA [10:27 A.M.] Will do. Check your e-mail in an hour or so.
</p>
                    </div>
                    <h4>2.At 10.26 p.m., what does Mr.Dolezyvh most likely mean when he writes, “No questions about it.”?</h4>
                    <div class="options">
                        <label><input type="radio" name="2" value="A"> A) He feels comfortable speaking German.</label><br>
                        <label><input type="radio" name="2" value="B"> B) He doesn’t plan to ask the visitors any questions.</label><br>
                        <label><input type="radio" name="2" value="C"> C) The visitors will appreciate the warm welcome.</label><br>
                        <label><input type="radio" name="2" value="D"> D)  The visitors should understand Ms.Cunha’s email. </label>
                    </div>
                </div>
                <div class="question hidden" id="question-3">
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                        <p>SAN REMO ECOLOGICAL CONSERVANCY<br>
                        www.srec.org/meet_out_corporate_donors<br>
                        <table>
                            <th>Our Work</th>
                            <th>Membership</th>
                            <th>Join as a business donor</th>
                        </table><br>
                        The retail businesses listed below are committed to helping the San Remo Ecological Conservancy (SREC) achieve its mission of promoting, sustaining, and enhancing San Remo's natural resources. -[1]- That is why they allocate 5 percent of the net sales they generate each Tuesday to the organization. -[2]- Everyone who shares our goals and principles is encouraged to support one or more of these businesses as a customer on this day. -[3]-.
Despite our best efforts to keep this list as current and accurate as possible, oversights may occasionally occur. -[4]-.
Participating in this program provides businesses with an opportunity to show the community that they care about the environment. They may also be eligible for a reduction in their tax bills. Interested in partnering with us as a business donor? Call Gina Kaufman at 555-0133.
    </p>
                    </div>
                    <h4>3. On the webpage, what does the SREC ask its individual supporters to do? </h4>
                    <div class="options">
                        <label><input type="radio" name="3" value="A"> A) Help it attract more businesses to San Remo</label><br>
                        <label><input type="radio" name="3" value="B"> B) Volunteer to clean up the local environment</label><br>
                        <label><input type="radio" name="3" value="C"> C) Shop at certain stores on Tuesday  </label><br>
                        <label><input type="radio" name="3" value="D"> D)Suggest changes to its mission</label>
                    </div>
                </div>
                <div class="question hidden" id="question-4">  
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                    <p>SAN REMO ECOLOGICAL CONSERVANCY<br>
                        www.srec.org/meet_out_corporate_donors<br>
                        <table>
                            <th>Our Work</th>
                            <th>Membership</th>
                            <th>Join as a business donor</th>
                        </table><br>
                        The retail businesses listed below are committed to helping the San Remo Ecological Conservancy (SREC) achieve its mission of promoting, sustaining, and enhancing San Remo's natural resources. -[1]- That is why they allocate 5 percent of the net sales they generate each Tuesday to the organization. -[2]- Everyone who shares our goals and principles is encouraged to support one or more of these businesses as a customer on this day. -[3]-.
Despite our best efforts to keep this list as current and accurate as possible, oversights may occasionally occur. -[4]-.
Participating in this program provides businesses with an opportunity to show the community that they care about the environment. They may also be eligible for a reduction in their tax bills. Interested in partnering with us as a business donor? Call Gina Kaufman at 555-0133.
    </p>
                    </div>
                    <h4>4. According to the website, what is one benefit for businesses that partner with the SREC?</h4>
                    <div class="options">
                        <label><input type="radio" name="4" value="A"> A) Discounts on products</label><br>
                        <label><input type="radio" name="4" value="B"> B) Positive publicity</label><br>
                        <label><input type="radio" name="4" value="C"> C) Free nature tours for staff  </label><br>
                        <label><input type="radio" name="4" value="D"> D) Membership on the SREC board   </label>
                    </div>
                </div>
                <div class="question hidden" id="question-5">
                    <h3>Read the following letter and answer questions 3-5</h3>
                    <div class="readtext">
                    <p>SAN REMO ECOLOGICAL CONSERVANCY<br>
                        www.srec.org/meet_out_corporate_donors<br>
                        <table>
                            <th>Our Work</th>
                            <th>Membership</th>
                            <th>Join as a business donor</th>
                        </table><br>
                        The retail businesses listed below are committed to helping the San Remo Ecological Conservancy (SREC) achieve its mission of promoting, sustaining, and enhancing San Remo's natural resources. -[1]- That is why they allocate 5 percent of the net sales they generate each Tuesday to the organization. -[2]- Everyone who shares our goals and principles is encouraged to support one or more of these businesses as a customer on this day. -[3]-.
Despite our best efforts to keep this list as current and accurate as possible, oversights may occasionally occur. -[4]-.
Participating in this program provides businesses with an opportunity to show the community that they care about the environment. They may also be eligible for a reduction in their tax bills. Interested in partnering with us as a business donor? Call Gina Kaufman at 555-0133.
    </p>
                    </div>
                    <h4>5. Which of the following position marked [ ] does the following sentence best belong? <br>
                    “Should you notice that information is missing, please contact donors@srec.rg.” </h4>
                    <div class="options">
                        <label><input type="radio" name="5" value="A"> A) [1]</label><br>
                        <label><input type="radio" name="5" value="B"> B) [2]</label><br>
                        <label><input type="radio" name="5" value="C"> C) [3]</label><br>
                        <label><input type="radio" name="5" value="D"> D) [4]</label>
                    </div>
                </div>
                <div class="question hidden" id="question-6">
                    <h3>Read the following information and answer questions 6-7</h3>
                    <div class="readtext">
                        <p>Welcome Bags Available<br>
The Fairmill Welcome Association (FWA) has decided on an exciting gift for new residents: a reusable shopping bag filled with information about the town of Fairmill.<br>
These cloth bags, which will have "Celebrate Fairmill" printed across the front, will be filled with community updates, coupons, and home-baked treats from association members. <br>
Local businesses interested in helping to fund this project can pay to have their logos printed on the back of the bags. <br>
Fairmill residents are encouraged to welcome their new neighbors by personally delivering these bags to each household. <br>
To sign up, please go online to visit our updated community Web site at fairmillwa.org.<br>
    </p>
                    </div>
                    <h4>6. Where would the article most likely appear? </h4>
                    <div class="options">
                        <label><input type="radio" name="6" value="A"> A) In a design magazine</label><br>
                        <label><input type="radio" name="6" value="B"> B) In a travel journal</label><br>
                        <label><input type="radio" name="6" value="C"> C) In a financial newsletter</label><br>
                        <label><input type="radio" name="6" value="D"> D) In a community newsletter</label>
                    </div>
                </div>
                <div class="question hidden" id="question-7">
                    <h3>Read the following information and answer questions 6-7</h3>
                    <div class="readtext">
                    <p>Welcome Bags Available<br>
The Fairmill Welcome Association (FWA) has decided on an exciting gift for new residents: a reusable shopping bag filled with information about the town of Fairmill.<br>
These cloth bags, which will have "Celebrate Fairmill" printed across the front, will be filled with community updates, coupons, and home-baked treats from association members. <br>
Local businesses interested in helping to fund this project can pay to have their logos printed on the back of the bags. <br>
Fairmill residents are encouraged to welcome their new neighbors by personally delivering these bags to each household. <br>
To sign up, please go online to visit our updated community Web site at fairmillwa.org.<br>
    </p>
                    </div>
                    <h4>7. How can local businesses support the project?</h4>
                    <div class="options">
                        <label><input type="radio" name="7" value="A"> A) By providing free samples</label><br>
                        <label><input type="radio" name="7" value="B"> B) When they cancel an ad </label><br>
                        <label><input type="radio" name="7" value="C"> C) When the newspaper edits an ad</label><br>
                        <label><input type="radio" name="7" value="D"> D)  When the newspaper misprints an ad </label>
                    </div>
                </div>
                <div class="question hidden" id="question-8">
                    <h3>ead the following article and answer questions 8-11 </h3>
                    <div class="readtext">
                    <p>Growing Your Business, Part 6: Using Social Media<br>
by Rajiv Shrestha<br>
Everyone knows that social media is an excellent means to promote a company's brand and products. The speed of social media, as well as its relative inexpensiveness, makes it an attractive option for small companies that can't rely on television or magazine advertising to reach new customers. And most sites can be managed without the help of a technology expert. -[1]-.
But even though social media offers many opportunities, you should not try to promote your business on as many outlets as possible. Managing information on several networks can quickly become a full-time job and can make it harder, not easier, to control your message. -[2]-. Therefore it is important that you learn the benefits and limitations of each social media platform, and then decide which one or two are best suited to your target customers. -[3]-.
Different platforms focus on different kinds of content, like photos, videos, short messages, or blogs. Some platforms need to be updated frequently, with customers expecting you to post new material every day. -[4]-. Certain platforms are better for reaching larger, more general audiences, while some allow you to focus on a specific group of customers. So before you set up accounts on every available platform, think about your business needs and your customer base.
</p>
                    </div>
                    <h4>8. For whom is the article most likely intended?</h4>
                    <div class="options">
                        <label><input type="radio" name="8" value="A"> A) A small business owner</label><br>
                        <label><input type="radio" name="8" value="B"> B) A Human Resources manager </label><br>
                        <label><input type="radio" name="8" value="C"> C) A network administrator</label><br>
                        <label><input type="radio" name="8" value="D"> D)A web site designer</label>
                    </div>
                </div>
                <div class="question hidden" id="question-9">
                    <h3>ead the following article and answer questions 8-11 </h3>
                    <div class="readtext">
                    <p>Growing Your Business, Part 6: Using Social Media<br>
by Rajiv Shrestha<br>
Everyone knows that social media is an excellent means to promote a company's brand and products. The speed of social media, as well as its relative inexpensiveness, makes it an attractive option for small companies that can't rely on television or magazine advertising to reach new customers. And most sites can be managed without the help of a technology expert. -[1]-.
But even though social media offers many opportunities, you should not try to promote your business on as many outlets as possible. Managing information on several networks can quickly become a full-time job and can make it harder, not easier, to control your message. -[2]-. Therefore it is important that you learn the benefits and limitations of each social media platform, and then decide which one or two are best suited to your target customers. -[3]-.
Different platforms focus on different kinds of content, like photos, videos, short messages, or blogs. Some platforms need to be updated frequently, with customers expecting you to post new material every day. -[4]-. Certain platforms are better for reaching larger, more general audiences, while some allow you to focus on a specific group of customers. So before you set up accounts on every available platform, think about your business needs and your customer base.
</p>
                    </div>
                    <h4>9. What is NOT mentioned as a benefit of using social media. </h4>
                    <div class="options">
                        <label><input type="radio" name="9" value="A"> A) It spreads information very quickly.</label><br>
                        <label><input type="radio" name="9" value="B"> B) It allows customers to give feedback. </label><br>
                        <label><input type="radio" name="9" value="C"> C) It costs less than more traditional media.</label><br>
                        <label><input type="radio" name="9" value="D"> D) It requires little technical knowledge.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-10">
                    <h3>ead the following article and answer questions 8-11 </h3>
                    <div class="readtext">
                    <p>Growing Your Business, Part 6: Using Social Media<br>
by Rajiv Shrestha<br>
Everyone knows that social media is an excellent means to promote a company's brand and products. The speed of social media, as well as its relative inexpensiveness, makes it an attractive option for small companies that can't rely on television or magazine advertising to reach new customers. And most sites can be managed without the help of a technology expert. -[1]-.
But even though social media offers many opportunities, you should not try to promote your business on as many outlets as possible. Managing information on several networks can quickly become a full-time job and can make it harder, not easier, to control your message. -[2]-. Therefore it is important that you learn the benefits and limitations of each social media platform, and then decide which one or two are best suited to your target customers. -[3]-.
Different platforms focus on different kinds of content, like photos, videos, short messages, or blogs. Some platforms need to be updated frequently, with customers expecting you to post new material every day. -[4]-. Certain platforms are better for reaching larger, more general audiences, while some allow you to focus on a specific group of customers. So before you set up accounts on every available platform, think about your business needs and your customer base.
</p>
                    </div>
                    <h4>10. What advice does the article give about using social media? </h4>
                    <div class="options">
                        <label><input type="radio" name="10" value="A"> A) Try as many sites as possible.                        </label><br>
                        <label><input type="radio" name="10" value="B"> B) Hire a full-time employee to manage accounts. </label><br>
                        <label><input type="radio" name="10" value="C"> C) Avoid posting personal information.                        </label><br>
                        <label><input type="radio" name="10" value="D"> D) Select platforms carefully.</label>
                    </div>
                </div>
                <div class="question hidden" id="question-11">
                    <h3>ead the following article and answer questions 8-11 </h3>
                    <div class="readtext">
                    <p>Growing Your Business, Part 6: Using Social Media<br>
by Rajiv Shrestha<br>
Everyone knows that social media is an excellent means to promote a company's brand and products. The speed of social media, as well as its relative inexpensiveness, makes it an attractive option for small companies that can't rely on television or magazine advertising to reach new customers. And most sites can be managed without the help of a technology expert. -[1]-.
But even though social media offers many opportunities, you should not try to promote your business on as many outlets as possible. Managing information on several networks can quickly become a full-time job and can make it harder, not easier, to control your message. -[2]-. Therefore it is important that you learn the benefits and limitations of each social media platform, and then decide which one or two are best suited to your target customers. -[3]-.
Different platforms focus on different kinds of content, like photos, videos, short messages, or blogs. Some platforms need to be updated frequently, with customers expecting you to post new material every day. -[4]-. Certain platforms are better for reaching larger, more general audiences, while some allow you to focus on a specific group of customers. So before you set up accounts on every available platform, think about your business needs and your customer base.
</p>
                    </div>
                    <h4>11. For whom is the article most likely intended?</h4>
                    <div class="options">
                        <label><input type="radio" name="11"value="A"> A) [1]</label><br>
                        <label><input type="radio" name="11" value="B"> B) [2] </label><br>
                        <label><input type="radio" name="11" value="C"> C) [3]</label><br>
                        <label><input type="radio" name="11" value="D"> D) [4]</label>
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
