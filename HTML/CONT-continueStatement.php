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
                    <h3>PHP - Continue Statement</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">Like the break statement, continue is another loop control statement in PHP. 
                               Unlike the break statement, the continue statement skips the current iteration 
                               and continues execution at the condition evaluation and then the beginning of the next iteration./p>
                        <p class="marg-bot">  The continue statement can be used inside any type of looping constructs, i.e., for, foreach, 
                               while or do-while loops. Like break, the continue keyword is also normally used conditionally</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow"></span></p>
                        <p><span class="numbers">3.</span><span class="yellow">   for ($x=1; $x<=5; $x++){</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">      if ($x%3==0){</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">         continue;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">      }</span></p>
                        <p><span class="numbers">7.</span><span class="yellow"></span></p>
                        <p><span class="numbers">8.</span><span class="yellow">    echo "x = $x \n";</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">   }</span></p>
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
                                for ($x=1; $x<=5; $x++){
                                    if ($x%3==0){
                                        continue;
                                    }
                                    echo "x = $x \n";
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