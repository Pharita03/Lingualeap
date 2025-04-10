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
<body class="volcab">
    <?php include '../addmin/head.php'; ?>
    <?php include '../addmin/sidebar.php'; ?>
    <main>
        <div class="boxvol">
            
            <div class="Box5" id="start">
                <div class="VDO">
                    <div class="Test">
                        
                        <div class="Test">
                            <button class="btn" onclick="letstart()"><h2>Get start</h2></button>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="voc" id="audio" style="display: none;">
                <div class="excer " id="1">
                    <h3 class="vol">Prohibit (verb)</h3>
                    <h4 class="meaning">To forbid, prevent, or stop from doing something.</h4>
                    <h4 class="sample">Sample:The school prohibits students from using their phones during class.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Prohibit.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="2" style="display: none;">
                    <h3 class="vol">Violate (verb)</h3>
                    <h4 class="meaning">To break or fail to comply with a rule, law, or agreement.</h4>
                    <h4 class="sample">Sample: The employee violated the company's policy by taking excessive breaks during the workday.</h4>
                    <audio  controls><source src="../unit/unit5/vacabulary/Violate.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="3" style="display: none;">
                    <h3 class="vol">Penalty (noun)</h3>
                    <h4 class="meaning">A punishment imposed for breaking a law, rule, or contract.</h4>
                    <h4 class="sample">Sample: The speeding ticket carried a $200 penalty for the driver.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Penalty.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="4" style="display: none;">
                    <h3 class="vol">Suspension (noun)</h3>
                    <h4 class="meaning">The temporary prevention of a person's right or privilege, often as a punishment.   </h4>
                    <h4 class="sample">Sample: The soccer player received a two-game suspension for receiving a red card. </h4> 
                    <audio controls><source src="../unit/unit5/vacabulary/Suspension.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="5" style="display: none;">
                    <h3 class="vol">Appreciate (verb)</h3>
                    <h4 class="meaning">To recognize the full worth or value of something.</h4>
                    <h4 class="sample">Sample: The customer greatly appreciated the excellent customer service provided by the sales associate.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Appreciate.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="6" style="display: none;">
                    <h3 class="vol">Facelift (noun)</h3>
                    <h4 class="meaning">A renovation or redesign that improves the appearance of something. </h4>
                    <h4 class="sample">Sample: The aging office building underwent a complete facelift, transforming its outdated exterior into a modern, sleek design.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Facelift.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="7" style="display: none;" >
                    <h3 class="vol">Regional (adjective)</h3>
                    <h4 class="meaning">Relating to a particular region or area, rather than the whole country or world.                     </h4>
                    <h4 class="sample">Sample:The company's regional sales manager is responsible for overseeing operations in the Midwest region.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Regional.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="8" style="display: none;">
                    <h3 class="vol">Aviation (noun)</h3>
                    <h4 class="meaning">The design, development, production, operation, and use of aircraft. </h4>
                    <h4 class="sample">Sample: The aviation industry has faced significant challenges due to the pandemic's impact on air travel.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Aviation.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="9" style="display: none;">
                    <h3 class="vol">Interior (noun)</h3>
                    <h4 class="meaning">The inner part or side of something, especially a building.</h4>
                    <h4 class="sample">Sample: The interior of the new luxury hotel featured high ceilings and elegant decor.                    </h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Interior.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="10" style="display: none;">
                    <h3 class="vol">Expect (verb)</h3>
                    <h4 class="meaning">To consider likely or certain to happen. </h4>
                    <h4 class="sample">Sample: The company expects to see a significant increase in sales during the upcoming holiday season.Sample sentence:  Finding a solution to this problem is one of the greatest challenges faced by scientists today.</h4>
                    <audio controls><source src="../unit/unit5/vacabulary/Expect.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="11" style="display: none;">
                    <h4 class="meaning">Let's finish test!</h4>
                </div>
                    <div class="btnn">
                        <button class="btn" id="back-btn"><h2>back</h2></button>
                        <button class="btn" id="next-btn"><h2>next</h2></button>
                        <button class="btn" id="return-btn" style="display: none;"><a href="../subunit5/vocab.php"><h2>return</h2></a></button>
                    </div>
            </div>
        </div>
        <div class="library-btn">
                <a href="../unit/unit5.php">
                <button>📚 unit5 </button></a>
        </div> 
    </main>
</body>
<script>
    function letstart(){
        document.getElementById("start").style.display="none";
        document.getElementById("audio").style.display="block";
        
        let i = 1 ;
        const totalPages = 10;
        const next = document.getElementById("next-btn");
        const back = document.getElementById("back-btn");
        const re = document.getElementById("return-btn");
        const title =  document.getElementById("start");
        const vol =document.getElementById("audio")

        function updateButtons() {
            if (i <= 1) {
                back.style.display = "none"; 
            } else {
                back.style.display = "flex"; 
            }

            if (i >= totalPages) {
                next.style.display = "none"; 
                re.style.display = "flex"; 
            } else {
                next.style.display = "flex"; 
                re.style.display = "none"; 
            }
        }

        updateButtons();

        next.addEventListener("click", () => {
            if (i < totalPages) {
                document.getElementById(i).style.display = "none"; 
                i++;
                document.getElementById(i).style.display = "flex"; 
                updateButtons(); 
            }
        });

       
        back.addEventListener("click", () => {
            if (i > 1) {
                document.getElementById(i).style.display = "none"; 
                i--;
                document.getElementById(i).style.display = "flex"; 
                updateButtons(); 
            }
        });
            


    };
    
</script>

</html>