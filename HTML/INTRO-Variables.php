<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAMBEosaurus</title>
    <link rel="Website icon" type="png" href="../PICTURES/Untitled-1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">    
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
                    <h3>PHP Introduction</h3>
                </div>
            <img  onclick="Myland()" src="../PICTURES/Untitled-1.png" alt="">
        </div>

        <div class="sub-container">
            <div class="sidebar">
                <h3 onclick="Myhome()">Hello World</h3>
                <h3 onclick="Mycomment()" >Comments</h3>
                <h3 onclick="Myvariables()" >Variables</h3>
                <h3 onclick="Myecho()" >Echo/Print</h3>
                <h3 onclick="MyvarDump()" >var_dump</h3>
                <h3 onclick="My$var()" >$ and $$ Variables</h3>
                <h3 onclick="Mycons()" >Constants</h3>
                <h3 onclick="MymagCons()" >Magic Constants</h3>
                <h3 onclick="Mydata()" >Data Types</h3> 
                <h3 onclick="MytypeCast()" >Type Casting</h3>
                <h3 onclick="MytypeJug()" >Type Juggling</h3>
                <h3 onclick="Mystrings()" >Strings</h3>
                <h3 onclick="MyBoolean()" >Boolean</h3>
                <h3 onclick="Myint()" >Integers</h3>
                <h3 onclick="Myfiles()" >Files and I/O</h3>
                <h3 onclick="Mymaths()" >Maths Function</h3>
                <h3 onclick="Myhere()" >Heredoc & Nowdoc</h3>
                <h3 onclick="Mycomp()" >Compound Types </h3> 
            </div>

            <div class="container-child">
                <div class="header">
                    <h3>PHP - Variables</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p class="marg-bot">A variable in PHP is a named memory location that holds data belonging to one of the data types.</p>
                        <p>• PHP uses the convention of prefixing a dollar sign ($) to the name of a variable.</p>
                        <p>• Variable names in PHP are case-sensitive.</p>
                        <p>• Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.</p>
                        <p>• As per the naming convention, "$name", "$rate_of_int", "$Age", "$mark1" are examples of valid variable names in PHP.</p>
                        <p class="marg-bot">• Invalid variable names: "name" (not having $ prefix), "$rate of int" (whitespace not allowed), "$Age#1" (invalid character #), "$11" (name not starting with alphabet).</p>
                        <p class="marg-bot">Variables are assigned with the "=" operator, with the variable on the left hand side and the expression to be evaluated on the right.</p>
                        <p class="marg-bot"><strong>No Need to Specify the Type of a Variable</strong></p>
                        <p class="marg-bot">PHP is a dynamically typed language. There is no need to specify the type of a variable. On the contrary, the type of a variable is decided by the value assigned to it. The value of a variable is the value of its most recent assignment. Take a look at this following example −</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">  $x = 10;</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">  echo "Data type of x: " . gettype($x) . "\n";</span></p>
                        <p><span class="numbers">4.</span><span class="yellow"></span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$x = 10.55;</span></p>
                        <p><span class="numbers">6.</span><span class="yellow"></span></p>
                        <p><span class="numbers">7.</span><span class="yellow">   echo "Data type of x now: " . gettype($x) . "";</span></p>
                        <p><span class="numbers">8.</span><span class="yellow"></span></p>
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
                                $x = 10;
                                echo "Data type of x: " . gettype($x) . "\n";

                                $x = 10.55;
                                echo "Data type of x now: " . gettype($x) . "";
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