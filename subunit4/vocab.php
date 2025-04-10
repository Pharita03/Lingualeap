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
                    <h3 class="vol">accumulation (noun)</h3>
                    <h4 class="meaning">the action or process of accumulating or the state of being accumulated </h4>
                    <h4 class="sample">Sample: The company's accumulation of cash reserves over the years allowed them to weather the economic downturn.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Accumulation.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="2" style="display: none;">
                    <h3 class="vol">quarterly (adjective)</h3>
                    <h4 class="meaning"> occurring or payable every three months </h4>
                    <h4 class="sample">Sample:The company reports its financial results on a quarterly basis.                    </h4>
                    <audio  controls><source src="../unit/unit4/vocabulary/Quarterly.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="3" style="display: none;">
                    <h3 class="vol">through (preposition)</h3>
                    <h4 class="meaning">expressing movement into one side of and out of the other side of </h4>
                    <h4 class="sample">Sample: The hiker made her way through the dense forest.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Through.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="4" style="display: none;">
                    <h3 class="vol">reliable (adjective)</h3>
                    <h4 class="meaning">consistently good in quality or performance; able to be trusted</h4>
                    <h4 class="sample">Sample: The old car may not be the most reliable vehicle, but it always gets me where I need to go.                    </h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Reliable.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="5" style="display: none;">
                    <h3 class="vol">reflect (verb)</h3>
                    <h4 class="meaning">to show or express (something) in one's appearance, behavior, or situation</h4>
                    <h4 class="sample">Sample: The company's strong financial results were reflected in the rising stock price.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Reflect.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="6" style="display: none;">
                    <h3 class="vol">nearby (adverb)</h3>
                    <h4 class="meaning">at, in, or to a short distance </h4>
                    <h4 class="sample">Sample: There is a grocery store nearby that I visit frequently.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Nearby.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="7" style="display: none;" >
                    <h3 class="vol">actually (adverb)</h3>
                    <h4 class="meaning">in fact or in reality </h4>
                    <h4 class="sample">Sample: I actually prefer the blue shirt over the green one.                    </h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Actually.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="8" style="display: none;">
                    <h3 class="vol">competitor (noun)</h3>
                    <h4 class="meaning">a person or business that competes with another person or business</h4>
                    <h4 class="sample">Sample:The two companies have been fierce competitors in the market for years.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Competitor.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="9" style="display: none;">
                    <h3 class="vol">installation (noun)</h3>
                    <h4 class="meaning">the process of setting up a piece of equipment or a system and making it ready for use                     </h4>
                    <h4 class="sample">Sample: The installation of the new software program took several hours to complete.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Installation.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="10" style="display: none;">
                    <h3 class="vol">challenge (noun)</h3>
                    <h4 class="meaning"> something that needs great mental or physical effort in order to be done successfully and therefore tests a person's ability </h4>
                    <h4 class="sample">Sample: Finding a solution to this problem is one of the greatest challenges faced by scientists today.</h4>
                    <audio controls><source src="../unit/unit4/vocabulary/Challenge.m4a" type="audio/mpeg"></audio>
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
                <a href="../unit/unit4.php">
                <button>📚 unit4 </button></a>
                <a href="../subunit5/vocab.php">
                <button> next unit5 </button></a>
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