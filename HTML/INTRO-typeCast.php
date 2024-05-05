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
                    <h3>PHP - Type Casting</h3>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Description</h3>
                    </div>
                    <div class="sub-context">
                        <p>Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.</p>
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Syntax</h3>
                    </div>
                    <div class="sub-context dark-syntax">
                        <p><span class="opse-numbers">1.</span><span class="pink">&lt?php</span></p>
                        <p><span class="numbers">2.</span><span class="yellow">$a = 5; // Integer</span></p>
                        <p><span class="numbers">3.</span><span class="yellow">$b = 5.34; // Float</span></p>
                        <p><span class="numbers">4.</span><span class="yellow">$c = "hello"; // String</span></p>
                        <p><span class="numbers">5.</span><span class="yellow">$d = true; // Boolean</span></p>
                        <p><span class="numbers">6.</span><span class="yellow">$e = NULL; // NULL</span></p>
                        <p><span class="numbers">7.</span><span class="yellow">$a = (string) $a;</span></p>
                        <p><span class="numbers">8.</span><span class="yellow">$b = (int) $b;</span></p>
                        <p><span class="numbers">9.</span><span class="yellow">$c = (bool) $c;</span></p>
                        <p><span class="numbers">10.</span><span class="yellow">$d = (array) $d;</span></p>
                        <p><span class="numbers">11.</span><span class="yellow">$e = (object) $e;</span></p>
                        <p><span class="numbers">12.</span><span class="yellow">//To verify the type of any object in PHP, use the var_dump() function:</span></p>
                        <p><span class="numbers">13.</span><span class="yellow">var_dump($a);</span></p>
                        <p><span class="numbers">14.</span><span class="yellow">var_dump($b);</span></p>
                        <p><span class="numbers">15.</span><span class="yellow">var_dump($c);</span></p>
                        <p><span class="numbers">16.</span><span class="yellow">var_dump($d);</span></p>
                        <p><span class="numbers">17.</span><span class="yellow">var_dump($e);</span></p>
                        <p><span class="numbers">18.</span><span class="yellow"></span></p>
                        <p><span class="numbers">19.</span><span class="yellow"></span></p>
                        <p><span class="numbers">20.</span><span class="yellow"></span></p>
                        <p><span class="numbers">21.</span><span class="yellow"></span></p>
                        <p><span class="numbers">22.</span><span class="yellow"></span></p>
                        <p><span class="numbers">23.</span><span class="yellow"></span></p>
                        <p><span class="numbers">24.</span><span class="yellow"></span></p>
                        <p><span class="numbers">25.</span><span class="yellow"></span></p>
                        <p><span class="numbers">26.</span><span class="yellow"></span></p>
                        <p><span class="numbers">27.</span><span class="yellow"></span></p>
                        <p><span class="numbers">28.</span><span class="yellow"></span></p>
                        <p><span class="numbers">29.</span><span class="yellow"></span></p>
                        <p><span class="numbers">30.</span><span class="yellow"></span></p>
                        <p><span class="opse-numbers">31.</span><span class="pink">?&gt</span></p>
                        
                    </div>
                </div>
                <div class="box-child">
                    <div class="sub-header1">
                        <h3>Output</h3>
                    </div>
                    <div class="sub-context">
                        <p>
                            <?php

                                $a = 5;       // Integer
                                $b = 5.34;    // Float
                                $c = "hello"; // String
                                $d = true;    // Boolean
                                $e = NULL;    // NULL


                                $a = (string) $a;
                                $b = (int) $b;
                                $c = (bool) $c;
                                $d = (array) $d;
                                $e = (object) $e;


                                //To verify the type of any object in PHP, use the var_dump() function:
                                var_dump($a);
                                var_dump($b);
                                var_dump($c);
                                var_dump($d);
                                var_dump($e);


                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js">
    </script>
</body>
</html>