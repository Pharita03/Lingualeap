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
                    <h3 class="vol">Opportunity (n.)</h3>
                    <h4 class="meaning">A chance to do something; a good time or situation to do something                    </h4>
                    <h4 class="sample">Sample: The company offers many opportunities for career growth.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Opportunity.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="2" style="display: none;">
                    <h3 class="vol">Provide (v.)</h3>
                    <h4 class="meaning">To give something needed or useful to someone; to supply</h4>
                    <h4 class="sample">Sample: The hotel provides free breakfast.</h4>
                    <audio  controls><source src="../unit/unit3/vocabulary/Provide.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="3" style="display: none;">
                    <h3 class="vol">Effort (n.)</h3>
                    <h4 class="meaning">Physical or mental energy needed to do something; hard work</h4>
                    <h4 class="sample">Sample:  The team's effort resulted in increased sales.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Effort.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="4" style="display: none;">
                    <h3 class="vol">Commit (v.)</h3>
                    <h4 class="meaning">To promise or pledge to do something; to dedicate oneself</h4>
                    <h4 class="sample">Sample: He committed to attending all meetings.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Commit.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="5" style="display: none;">
                    <h3 class="vol">Enhance (v.)</h3>
                    <h4 class="meaning">To improve something; to make something better</h4>
                    <h4 class="sample">Sample: The new design will enhance the product's appearance.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Enhance.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="6" style="display: none;">
                    <h3 class="vol">Natural (adj.)</h3>
                    <h4 class="meaning">Existing in or caused by nature; not artificial</h4>
                    <h4 class="sample">Sample:  The park has many natural features.                    </h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Natural.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="7" style="display: none;" >
                    <h3 class="vol">Reduction (n.)</h3>
                    <h4 class="meaning">The act of making something smaller or less in size, amount, or number                    </h4>
                    <h4 class="sample">Sample: There was a reduction in price during the sale.                    </h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Reduction.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="8" style="display: none;">
                    <h3 class="vol">Donor (n.)</h3>
                    <h4 class="meaning">A person or organization that gives something (usually money or resources) to help someone/something</h4>
                    <h4 class="sample">Sample: The donor wished to remain anonymous.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Donor.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="9" style="display: none;">
                    <h3 class="vol">Association (n.)</h3>
                    <h4 class="meaning">An organization of people with a common purpose; a connection between things or ideas</h4>
                    <h4 class="sample">Sample:He joined the local business association.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Association.m4a" type="audio/mpeg"></audio>
                </div>
                <div class="excer " id="10" style="display: none;">
                    <h3 class="vol">Encourage (v.)</h3>
                    <h4 class="meaning">To give support, confidence, or hope to someone; to promote something</h4>
                    <h4 class="sample">Sample: Teachers encourage students to ask questions.</h4>
                    <audio controls><source src="../unit/unit3/vocabulary/Encourage.m4a" type="audio/mpeg"></audio>
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
                <a href="../unit/unit3.php">
                <button>📚 unit3 </button></a>
                <a href="../subunit4/vocab.php">
                <button> next unit4 </button></a>
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