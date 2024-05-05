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
                    <h3>PHP - If Else Statement</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">   /* This is the first subtopic for Control statements*/</p>
                        <p class="marg-bot">   echo "<h3>Decision Making in a Computer Program</h3></p>
                        <p class="marg-bot">    Decision-making in programming involves anticipating conditions during
                            program execution and executing specific actions based on those conditions. 
                            Conditional statements are used for decision-making, which is fundamental 
                            programming languages.";</p>
                        <p class="marg-bot">    echo "A typical decision-making structure in most programming languages
                            consists of if...else, elseif, and switch statements:</p>
                        <p class="marg-bot">   The <h4> if...else statement</h4> is used to execute code when a condition is
                            true and another set of code when it's false.</p>
                        <p class="marg-bot">        The  <h4>elseif statement</h4>  extends if...else to check multiple conditions.\n
                            The  <h4>switch statement</h4>  is used to select one of many blocks of code for
                            execution, avoiding long chains of if...elseif...else..";</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">  $a = 10;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = 13;</span></p>
                        <p><span class="numbers">4.</span><span class="yellow"></span></p>
                        <p><span class="numbers">5.</span><span class="yellow"> if($a > $b)</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">echo "a is higher than b";</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">else</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">echo "b is higher than a ";</span></p>
                        <p><span class="numbers">9.</span><span class="yellow"></span></p>
                        <p><span class="opse-numbers">10.</span><span class="pink">?&gt</span></p>
						
                    </div>
                    
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php 

                                $a = 10;
                                $b = 13;

                                if($a > $b)
                                    echo "a is higher than b";
                                else
                                    echo "b is higher than a ";
                                
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