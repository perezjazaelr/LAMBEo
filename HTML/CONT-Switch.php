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
                <h3 onclick="MyConti()" >Comtinue Statement</h3> 
            </div>

            <div class="container-child">
                <div class="header">
                    <h3>PHP - Switch Statement</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">
                               The switch statement in PHP can be treated as an alternative to a series of
                               if…else statements on the same expression. Suppose you need to compare an
                               expression or a variable with many different values and execute a different
                               piece of code depending on which value it equals to. In such a case, you would
                               use multiple if…elseif…else constructs.</p>
                        <p class="marg-bot">However, such a construct can make the code quite messy and difficult to
                               follow. To simplify such codes, you can use the switch case construct in PHP
                               that offers a more compact alternative to avoid long blocks of if..elseif..else codes.";</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                            <p><span class="numbers">2.</span><span class="yellow">
                            <p><span class="numbers">3.</span><span class="yellow">// Define a variable</span></p>
                            <p><span class="numbers">4.</span><span class="yellow">$day = "Monday";</span></p>
                            <p><span class="numbers">5.</span><span class="yellow"></span></p>
                            <p><span class="numbers">6.</span><span class="yellow">// Use a switch statement to perform different actions based on the value of $day</span></p>
                            <p><span class="numbers">7.</span><span class="yellow">switch ($day) {</span></p>
                            <p><span class="numbers">8.</span><span class="yellow">    case "Monday":</span></p>
                            <p><span class="numbers">9.</span><span class="yellow">        echo "Today is Monday. It's the start of the week!";</span></p>
                            <p><span class="numbers">10.</span><span class="yellow">        break;</span></p>
                            <p><span class="numbers">11.</span><span class="yellow">    case "Tuesday":</span></p>
                            <p><span class="numbers">12.</span><span class="yellow">        echo "Today is Tuesday. Have a productive day!";</span></p>
                            <p><span class="numbers">13.</span><span class="yellow">        break;</span></p>
                            <p><span class="numbers">14.</span><span class="yellow">    case "Wednesday":</span></p>
                            <p><span class="numbers">15.</span><span class="yellow">        echo "Today is Wednesday. Midweek already!";</span></p>
                            <p><span class="numbers">16.</span><span class="yellow">        break;</span></p>
                            <p><span class="numbers">17.</span><span class="yellow">    case "Thursday":</span></p>
                            <p><span class="numbers">18.</span><span class="yellow">        echo "Today is Thursday. Almost there, keep going!";</span></p>
                            <p><span class="numbers">19.</span><span class="yellow">        break;</span></p>
                            <p><span class="numbers">20.</span><span class="yellow">    case "Friday":</span></p>
                            <p><span class="numbers">21.</span><span class="yellow">        echo "Today is Friday. Time to celebrate!";</span></p>
                            <p><span class="numbers">22.</span><span class="yellow">        break;</span></p>
                            <p><span class="numbers">23.</span><span class="yellow">    default:</span></p>
                            <p><span class="numbers">24.</span><span class="yellow">        echo "It's the weekend! Enjoy!";</span></p>
                            <p><span class="numbers">25.</span><span class="yellow">}</span></p>
                            <p><span class="numbers">26.</span><span class="yellow"></span></p>
                            <p><span class="numbers">27.</span><span class="yellow"></span></p>
                            <p><span class="numbers">28.</span><span class="yellow">?&gt;</span></p>
                            <p><span class="opse-numbers">31.</span><span class="pink">&gt;</span></p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php

                                // Define a variable
                                $day = "Monday";

                                // Use a switch statement to perform different actions based on the value of $day
                                switch ($day) {
                                    case "Monday":
                                        echo "Today is Monday. It's the start of the week!";
                                        break;
                                    case "Tuesday":
                                        echo "Today is Tuesday. Have a productive day!";
                                        break;
                                    case "Wednesday":
                                        echo "Today is Wednesday. Midweek already!";
                                        break;
                                    case "Thursday":
                                        echo "Today is Thursday. Almost there, keep going!";
                                        break;
                                    case "Friday":
                                        echo "Today is Friday. Time to celebrate!";
                                        break;
                                    default:
                                        echo "It's the weekend! Enjoy!";
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