<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAMBEosaurus</title>
    <link rel="Website icon" type="png" href="../PICTURES/Untitled-1.png">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .nav-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="nav-bar">
            <div class = "nav-cont">
                <!--/*changes here*/ -->
                    <a href="#" class="toggle-button">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                    <h3>PHP Control Statements</h3>
                </div>
            <img  onclick="Myland()" src="../PICTURES/Untitled-1.png" alt="">
        </div>
        
        <div class="sub-container">
            <div class="sidebar">
                <h3 onclick="Mydeci()" >Decision Making</h3>
                <h3 onclick="Myifelse()" >If Else Statement</h3>
                <h3 onclick="Myswitch()" >Switch Statement</h3>
                <h3 onclick="MyforLoop()" >For loop</h3>
                <h3 onclick="MyforeachLoop()" >Foreach loop</h3>
                <h3 onclick="MywhileLoop()" >While loop</h3>
                <h3 onclick="MydowhileLoop()" >Do While loop</h3>
                <h3 onclick="Mybreak()" >Break Statement</h3>
                <h3 onclick="MyConti()" >Continue Statement</h3> 
            </div>

            <div class="container-child">
                <div class="header">
                    <h3>PHP - Foreach Loop </h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">The foreach construct in PHP is specially meant for iterating over arrays. 
                               If you try to use it on a variable with a different data type, PHP raises an error.</p>
                        <p class="marg-bot"> The first type of syntax above shows a parenthesis in front of the foreach keyword. 
                               The name of the array to be traversed is then followed by the as keyword and then a variable.</p>
                        <p class="marg-bot">When the fist iteration starts, the first element in the array is assigned to the variable. 
                               After the looping block is over, the variable takes the value of the next element and repeats the 
                               statements in the loop body till the elements in the array are exhausted</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow"></span></p>
                        <p><span class="numbers">3.</span><span class="yellow"> $arr = array("john", "Periculo", "Jaz", "Berna", "bogart");</span></p>
                        <p><span class="numbers">4.</span><span class="yellow"> foreach ($arr as $val) {</span></p>
                        <p><span class="numbers">5.</span><span class="yellow"> echo "$val \n";</span></p>
                        <p><span class="numbers">6.</span><span class="yellow"></span></p>
                        <p><span class="numbers">7.</span><span class="yellow">  }</span></p>
                        <p><span class="numbers">8.</span><span class="yellow"></span></p>
                        <p><span class="opse-numbers">9.</span><span class="pink">?&gt</span></p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php
                                $arr = array("john", "Periculo", "Jaz", "Berna", "bogart");
                                foreach ($arr as $val) {
                                    echo "$val \n";
                                }
                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>