<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAMBEosaurus</title>
    <link rel="Website icon" type="png" href="../PICTURES/Untitled-1.png">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet"> 
</head>
<body>
    

    <div class="main-container">

        <div id="pre-loader">
            <img src="../PICTURES/Untitled-1.png" alt="">
            <img src="../PICTURES/1484-unscreen.gif" alt="">
        </div>

        <div class="nav-bar">
            <img src="../PICTURES/Untitled-1.png" alt="">
            <h3>LAMBEosaurus</h3>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="sub-header">
                    <h3>PHP Introduction</h3>
                </div>
                <div class="box-context">
                    <p>PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf released the first version of PHP way back in 1994. Initially, PHP was supposed to be an abbreviation for "Personal Home Page", but it now stands for the recursive initialism "PHP: Hypertext Preprocessor".</p>
                </div>
                <div class="link" onclick="My_INTRODUCTION()">
                    <h6>See more</h6>
                </div>
            </div>

            <div class="box">
                <div class="sub-header">
                    <h3>PHP Operators</h3>
                </div>
                <div class="box-context">
                    <p>This chapter will provide an overview of how you can use these operators in PHP. In the subsequent chapters, we will take a closer look at each of the operators and how they work.</p>
                </div>
                <div class="link" onclick="My_OPERATOR()">
                    <h6>See more</h6>
                </div>
            </div>

            <div class="box">
                <div class="sub-header">
                    <h3>PHP Control Statement</h3>
                </div>
                <div class="box-context">
                    <p>Decision-making is the anticipation of conditions occurring during the execution of a program and specified actions taken according to the conditions….</p>
                </div>
                <div class="link" onclick="My_CONTROLSTATE()">
                    <h6>See more</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/script.js"></script>
    <script>
        var loader = document.getElementById("pre-loader");
    
    window.addEventListener("load", function () {
    setTimeout(() => {
        loader.style.display = "none";
    }, 5000);
    });

    </script>
</body>
</html>