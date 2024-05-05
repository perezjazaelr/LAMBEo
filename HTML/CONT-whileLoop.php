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
                    <h3>PHP - While loop</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p> The easiest way to create a loop in a PHP script is
                               with the while construct. The syntax of while loop in PHP is
                               similar to that in C language. The loop body block will be repeatedly 
                               executed as long as the Boolean expression in the while statement is true.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">   $names = array("Jordan","Bryant","Wade", "Pope", "Condoriano");</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">   $size = count($names);</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">   $x=0;</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">   while ($x<$size) {</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">      echo "Names at index $x is $names[$x] \n";</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">    $x++;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">   }</span></p>
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
                                $names = array("Jordan","Bryant","Wade", "Pope", "Condoriano");
                                $size = count($names);
                                $x=0;

                                while ($x<$size) {
                                    echo "Names at index $x is $names[$x] \n";
                                    $x++;
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