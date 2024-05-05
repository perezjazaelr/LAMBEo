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
                    <h3>PHP - Comments</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>A comment in any computer program (such as a PHP program) is a certain explanatory text that is ignored by the language compiler/interpreter. Its purpose is to help the user understand the logic used in the program algorithm.
                            Although placing comments in the code is not essential, it is a highly recommended practice. The comments also serve as program documentation. Comments are also useful when the code needs to be debugged and modified.
                            </p>
                            
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="green"># Single line comment Starting with # symbol</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">echo </span><span class="orange">"Hello World"</span><span class="yellow">\n</span><span class="white"> ;</span></p>
                        <p><span class="numbers">4.</span><span class="green">/* This is a multiline comment example
                            program to add two numbers
                         </span></p>
                        <p><span class="numbers">5.</span><span class="green">numbers
                            Variables used - $x for first number, 
                            $y for second number */
                         </span></p>
                        <p><span class="numbers">6.</span><span class="light-blue">$x</span><span class="white">=</span><span class="yellow">10</span><span class="white">;</span></p>
                        <p><span class="numbers">7.</span><span class="light-blue">$x</span><span class="white">=</span><span class="yellow">20</span><span class="white">;</span></p>
                        <p><span class="numbers marg">8.</span><span class="yellow">print</span><span class="orange">"Total = "</span><span class="white">. </span><span class="light-blue"> $x</span><span class="white">=</span><span class="light-blue">$y</span><span class="white"> ;</span></p>
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

                            echo "Hello World\n";

                            /* This is a multiline comment example
                            program to add two numbers
                            Variables used - $x for first number, 
                            $y for second number */
                            
                            $x=10;
                            $y=20;
                            print "Total = ". $x+$y;
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