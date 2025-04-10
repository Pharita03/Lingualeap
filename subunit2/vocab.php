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
                    <h3 class="vol">Subsequent (adjective)</h3>
                    <h4 class="meaning">Coming after something in time or order; following</h4>
                    <h4 class="sample">Sample: The subsequent meetings were more productive after we changed our strategy.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Subsequent.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="2" style="display: none;">
                    <h3 class="vol">Statements (noun)</h3>
                    <h4 class="meaning">Something that is said or written officially or formally; a document showing financial information</h4>
                    <h4 class="sample">Sample: The bank sends monthly statements showing all transactions.</h4>
                    <audio  controls><source src="../unit/unit2/vocabulary/Statements.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="3" style="display: none;">
                    <h3 class="vol">Correspondence (noun)</h3>
                    <h4 class="meaning">Communication by exchanging letters, emails, or messages; written exchanges  </h4>
                    <h4 class="sample">Sample: All business correspondence should be kept on file for at least three years.   </h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Correspondence.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="4" style="display: none;">
                    <h3 class="vol">Previous (adjective)</h3>
                    <h4 class="meaning">Existing or happening before something else; earlier</h4>
                    <h4 class="sample">Sample: Her previous work experience in sales made her an ideal candidate for the position.                    </h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Previous.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="5" style="display: none;">
                    <h3 class="vol">inquiry/enquiry (noun)</h3>
                    <h4 class="meaning">A request for information; an investigation    </h4>
                    <h4 class="sample">Sample: We received several inquiries about our new product line.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Inquiry-Enquiry.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="6" style="display: none;">
                    <h3 class="vol">destination (noun)</h3>
                    <h4 class="meaning">The place to which someone or something is going</h4>
                    <h4 class="sample">Sample:Tokyo is becoming a popular destination for international business conferences.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Destination.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="7" style="display: none;" >
                    <h3 class="vol">classified advertisement (noun)</h3>
                    <h4 class="meaning">A short paid notice in a newspaper or online platform, typically organized by categories                    </h4>
                    <h4 class="sample">Sample: She found her apartment through a classified advertisement in the local newspaper.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Classified advertisement.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="8" style="display: none;">
                    <h3 class="vol">available (adjective)</h3>
                    <h4 class="meaning">Free to be used; obtainable; not busy</h4>
                    <h4 class="sample">Sample: The new software will be available for download next week.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Available.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="9" style="display: none;">
                    <h3 class="vol">discount (noun/verb)</h3>
                    <h4 class="meaning">(n) A reduction in price; (v) to reduce the price of something</h4>
                    <h4 class="sample">Sample: The store is offering a 20% discount on all office supplies this week.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Discount (n-v).m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="10" style="display: none;">
                    <h3 class="vol">multiple (adjective/noun)</h3>
                    <h4 class="meaning">Many; more than one; consisting of several parts</h4>
                    <h4 class="sample">Sample: The company has multiple offices across Asia.</h4>
                    <audio controls><source src="../unit/unit2/vocabulary/Multiple.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="11" style="display: none;">
                    <h4 class="meaning">Let's finish test!</h4>
                </div>
                    <div class="btnn">
                        <button class="btn" id="back-btn"><h2>back</h2></button>
                        <button class="btn" id="next-btn"><h2>next</h2></button>
                        <button class="btn" id="return-btn" style="display: none;"><a href="../subunit/vocab.php"><h2>return</h2></a></button>
                    </div>
            </div>
        </div>
        <div class="library-btn">
                <a href="../unit/unit2.php">
                <button>📚 unit2 </button></a>
                <a href="../subunit3/vocab.php">
                <button> next unit3 </button></a>
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